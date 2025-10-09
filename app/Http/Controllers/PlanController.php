<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    /**
     * Fetch products from third-party, compute discounts, clean description,
     * and upsert into `plans` table.
     */
    public function getPlansData(Request $request)
    {
        // dd("Okay trest0");
        $url = 'https://clients.cloudcarehost.com/includes/api.php';
        $payload = [
            'identifier' => env('PRODUCT_API_ID'),
            'secret' => env('PRODUCT_API_SECRET'),
            'responsetype' => 'json',
            'action' => 'GetProducts',
        ];

        try {
            $response = Http::asForm()->timeout(30)->post($url, $payload);
            if (!$response->successful()) {
                return response()->json([
                    'ok' => false,
                    'message' => 'Third-party API returned non-2xx',
                    'status' => $response->status(),
                    'body' => $response->body()
                ], 502);
            }

            $data = $response->json();
            // dd("fff", $data);
            if (!isset($data['products']['product']) || !is_array($data['products']['product'])) {
                return response()->json([
                    'ok' => false,
                    'message' => 'Unexpected products payload',
                    'payload_keys' => array_keys($data)
                ], 500);
            }

            DB::table('plans')->truncate();

            $products = $data['products']['product'];
            $inserted = 0;
            $updated = 0;
            $errors = [];

            // helper: parse price string to float (null-safe)
            $parsePrice = function ($v) {
                if ($v === null || $v === '')
                    return null;
                $clean = preg_replace('/[^0-9\.\-]/', '', (string) $v);
                return $clean === '' ? null : (float) $clean;
            };

            foreach ($products as $prod) {
                $name = $prod['name'] ?? null;
                $slug = $prod['slug'] ?? null;
                $product_url = $prod['product_url'] ?? null;
                $raw_description = $prod['description'] ?? null;

                // USD pricing block
                $usd = $prod['pricing']['USD'] ?? null;
                $aed = $prod['pricing']['AED'] ?? null;
                $aud = $prod['pricing']['AUD'] ?? null;
                $eur = $prod['pricing']['EUR'] ?? null;
                $inr = $prod['pricing']['INR'] ?? null;

                // usd
                $usd_prefix = $usd['prefix'] ?? null;
                $usd_suffix = $usd['suffix'] ?? null;
                // $usd_msetupfee = $parsePrice($usd['msetupfee'] ?? null);
                $usd_monthly = $parsePrice($usd['monthly'] ?? null);
                $usd_quarterly = $parsePrice($usd['quarterly'] ?? null);
                $usd_semiannually = $parsePrice($usd['semiannually'] ?? null);
                $usd_annually = $parsePrice($usd['annually'] ?? null);
                $usd_biennially = $parsePrice($usd['biennially'] ?? null);
                $usd_triennially = $parsePrice($usd['triennially'] ?? null);

                // aed
                $aed_prefix = $aed['prefix'] ?? null;
                $aed_suffix = $aed['suffix'] ?? null;
                // $aed_msetupfee = $parsePrice($aed['msetupfee'] ?? null);
                $aed_monthly = $parsePrice($aed['monthly'] ?? null);
                $aed_quarterly = $parsePrice($aed['quarterly'] ?? null);
                $aed_semiannually = $parsePrice($aed['semiannually'] ?? null);
                $aed_annually = $parsePrice($aed['annually'] ?? null);
                $aed_biennially = $parsePrice($aed['biennially'] ?? null);
                $aed_triennially = $parsePrice($aed['triennially'] ?? null);

                // aud
                $aud_prefix = $aud['prefix'] ?? null;
                $aud_suffix = $aud['suffix'] ?? null;
                // $aud_msetupfee = $parsePrice($aud['msetupfee'] ?? null);
                $aud_monthly = $parsePrice($aud['monthly'] ?? null);
                $aud_quarterly = $parsePrice($aud['quarterly'] ?? null);
                $aud_semiannually = $parsePrice($aud['semiannually'] ?? null);
                $aud_annually = $parsePrice($aud['annually'] ?? null);
                $aud_biennially = $parsePrice($aud['biennially'] ?? null);
                $aud_triennially = $parsePrice($aud['triennially'] ?? null);

                // eur
                $eur_prefix = $eur['prefix'] ?? null;
                $eur_suffix = $eur['suffix'] ?? null;
                // $eur_msetupfee = $parsePrice($eur['msetupfee'] ?? null);
                $eur_monthly = $parsePrice($eur['monthly'] ?? null);
                $eur_quarterly = $parsePrice($eur['quarterly'] ?? null);
                $eur_semiannually = $parsePrice($eur['semiannually'] ?? null);
                $eur_annually = $parsePrice($eur['annually'] ?? null);
                $eur_biennially = $parsePrice($eur['biennially'] ?? null);
                $eur_triennially = $parsePrice($eur['triennially'] ?? null);

                // inr
                $inr_prefix = $inr['prefix'] ?? null;
                $inr_suffix = $inr['suffix'] ?? null;
                // $inr_msetupfee = $parsePrice($inr['msetupfee'] ?? null);
                $inr_monthly = $parsePrice($inr['monthly'] ?? null);
                $inr_quarterly = $parsePrice($inr['quarterly'] ?? null);
                $inr_semiannually = $parsePrice($inr['semiannually'] ?? null);
                $inr_annually = $parsePrice($inr['annually'] ?? null);
                $inr_biennially = $parsePrice($inr['biennially'] ?? null);
                $inr_triennially = $parsePrice($inr['triennially'] ?? null);

                // parse features from description -> array of strings
                $features = [];
                if ($raw_description) {
                    if (preg_match_all('/<li[^>]*>(.*?)<\/li>/is', $raw_description, $matches)) {
                        foreach ($matches[1] as $m) {
                            $txt = trim(html_entity_decode(strip_tags($m)));
                            if ($txt !== '')
                                $features[] = $txt;
                        }
                    } else {
                        // fallback: break paragraphs or <br> into items, else plain text
                        // replace <br> with newline then split
                        $temp = preg_replace('/<br\s*\/?>/i', "\n", $raw_description);
                        // strip all tags
                        $plain = trim(html_entity_decode(strip_tags($temp)));
                        if ($plain !== '') {
                            // try to split by newlines into items
                            $parts = preg_split('/\r\n|\r|\n/', $plain);
                            foreach ($parts as $p) {
                                $t = trim($p);
                                if ($t !== '')
                                    $features[] = $t;
                            }
                        }
                    }
                }

                $now = now();

                $baseUrl = 'https://clients.cloudcarehost.com/store/';
                $path = str_replace($baseUrl, '', $product_url);
                // Split the remaining path into segments
                $segments = explode('/', $path);
                // Extract the slugs
                $slug1 = $segments[0] ?? null; // 'shared-hosting'
                $slug2 = $segments[1] ?? null; // 'starter'

                $rowData = [
                    'name' => $name,
                    'slug' => $slug1,
                    'slug2' => $slug2,
                    'product_url' => $product_url,
                    // USD
                    'usd_prefix' => $usd_prefix,
                    'usd_suffix' => $usd_suffix,
                    'usd_monthly' => $usd_monthly,
                    'usd_quarterly' => $usd_quarterly,
                    'usd_semiannually' => $usd_semiannually,
                    'usd_annually' => $usd_annually,
                    'usd_biennially' => $usd_biennially,
                    'usd_triennially' => $usd_triennially,
                    'usd_discounted_monthly' => 0,
                    'usd_discounted_quaterly' => $this->getPercentage($usd_monthly, 3, $usd_quarterly),
                    'usd_discounted_semiannually' => $this->getPercentage($usd_monthly, 6, $usd_semiannually),
                    'usd_discounted_annually' => $this->getPercentage($usd_monthly, 12, $usd_annually),
                    'usd_discounted_biennially' => $this->getPercentage($usd_monthly, 24, $usd_biennially),
                    'usd_discounted_triennially' => $this->getPercentage($usd_monthly, 36, $usd_triennially),
                    // AED
                    'aed_prefix' => $aed_prefix,
                    'aed_suffix' => $aed_suffix,
                    'aed_monthly' => $aed_monthly,
                    'aed_quarterly' => $aed_quarterly,
                    'aed_semiannually' => $aed_semiannually,
                    'aed_annually' => $aed_annually,
                    'aed_biennially' => $aed_biennially,
                    'aed_triennially' => $aed_triennially,
                    'aed_discounted_monthly' => 0,
                    'aed_discounted_quaterly' => $this->getPercentage($aed_monthly, 3, $aed_quarterly),
                    'aed_discounted_semiannually' => $this->getPercentage($aed_monthly, 6, $aed_semiannually),
                    'aed_discounted_annually' => $this->getPercentage($aed_monthly, 12, $aed_annually),
                    'aed_discounted_biennially' => $this->getPercentage($aed_monthly, 24, $aed_biennially),
                    'aed_discounted_triennially' => $this->getPercentage($aed_monthly, 36, $aed_triennially),
                    // AUD
                    'aud_prefix' => $aud_prefix,
                    'aud_suffix' => $aud_suffix,
                    'aud_monthly' => $aud_monthly,
                    'aud_quarterly' => $aud_quarterly,
                    'aud_semiannually' => $aud_semiannually,
                    'aud_annually' => $aud_annually,
                    'aud_biennially' => $aud_biennially,
                    'aud_triennially' => $aud_triennially,
                    'aud_discounted_monthly' => 0,
                    'aud_discounted_quaterly' => $this->getPercentage($aud_monthly, 3, $aud_quarterly),
                    'aud_discounted_semiannually' => $this->getPercentage($aud_monthly, 6, $aud_semiannually),
                    'aud_discounted_annually' => $this->getPercentage($aud_monthly, 12, $aud_annually),
                    'aud_discounted_biennially' => $this->getPercentage($aud_monthly, 24, $aud_biennially),
                    'aud_discounted_triennially' => $this->getPercentage($aud_monthly, 36, $aud_triennially),
                    // EUR
                    'eur_prefix' => $eur_prefix,
                    'eur_suffix' => $eur_suffix,
                    'eur_monthly' => $eur_monthly,
                    'eur_quarterly' => $eur_quarterly,
                    'eur_semiannually' => $eur_semiannually,
                    'eur_annually' => $eur_annually,
                    'eur_biennially' => $eur_biennially,
                    'eur_triennially' => $eur_triennially,
                    'eur_discounted_monthly' => 0,
                    'eur_discounted_quaterly' => $this->getPercentage($eur_monthly, 3, $eur_quarterly),
                    'eur_discounted_semiannually' => $this->getPercentage($eur_monthly, 6, $eur_semiannually),
                    'eur_discounted_annually' => $this->getPercentage($eur_monthly, 12, $eur_annually),
                    'eur_discounted_biennially' => $this->getPercentage($eur_monthly, 24, $eur_biennially),
                    'eur_discounted_triennially' => $this->getPercentage($eur_monthly, 36, $eur_triennially),
                    // INR
                    'inr_prefix' => $inr_prefix,
                    'inr_suffix' => $inr_suffix,
                    'inr_monthly' => $inr_monthly,
                    'inr_quarterly' => $inr_quarterly,
                    'inr_semiannually' => $inr_semiannually,
                    'inr_annually' => $inr_annually,
                    'inr_biennially' => $inr_biennially,
                    'inr_triennially' => $inr_triennially,
                    'inr_discounted_monthly' => 0,
                    'inr_discounted_quaterly' => $this->getPercentage($inr_monthly, 3, $inr_quarterly),
                    'inr_discounted_semiannually' => $this->getPercentage($inr_monthly, 6, $inr_semiannually),
                    'inr_discounted_annually' => $this->getPercentage($inr_monthly, 12, $inr_annually),
                    'inr_discounted_biennially' => $this->getPercentage($inr_monthly, 24, $inr_biennially),
                    'inr_discounted_triennially' => $this->getPercentage($inr_monthly, 36, $inr_triennially),
                    'features_json' => !empty($features) ? json_encode($features) : null,
                    'currency' => 'USD',
                    'updated_at' => $now,
                    'created_at' => $now,
                ];
                // dd("sss :- ", $rowData);
                try {

                    DB::table('plans')->insert($rowData);
                    // dd("1st record inserted");
                    $inserted++;

                } catch (\Throwable $e) {
                    Log::error("Failed to upsert plan pid=: " . $e->getMessage()); //{$pid}
                    $errors[] = "pid : " . $e->getMessage(); //{$pid}
                }
            }

            return redirect()->route('dashboard')->with('success', 'Blog post deleted successfully!');
        } catch (\Throwable $e) {
            Log::error('Error calling products API: ' . $e->getMessage());
        }
    }

    public function getPercentage($usd_monthly, $months, $usd_annually)
    {
        // dd("Okay data", $usd_monthly, $months, $usd_annually);
        $actual_annual = $usd_monthly * $months;
        $discount_amount = $actual_annual - $usd_annually;
        $discount_percentage = ($discount_amount / $actual_annual) * 100;
        $usd_discounted_annually = round($discount_percentage, 0);
        // dd("data :- ", $usd_discounted_annually);
        // return $usd_discounted_annually ?? 0;
        return max(0, $usd_discounted_annually);
    }
}


