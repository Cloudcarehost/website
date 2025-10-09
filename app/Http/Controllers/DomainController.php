<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;


class DomainController extends Controller
{
    private function getCurrenciesAssoc(): array
{
    // Cache key
    return Cache::remember('whmcs_currencies_assoc', 60 * 24, function () {
        $url = 'https://clients.cloudcarehost.com/includes/api.php';
        $payload = [
            'identifier'   => env('SYSTEM_API_ID'),
            'secret'       => env('SYSTEM_API_SECRET'),
            'responsetype' => 'json',
            'action'       => 'GetCurrencies',
        ];

        $response = Http::asForm()->timeout(20)->post($url, $payload);
        if (! $response->successful()) {
            return [];
        }

        $data = $response->json();
        if (! isset($data['currencies']['currency']) || ! is_array($data['currencies']['currency'])) {
            return [];
        }

        // Normalize result to array of { code, prefix, suffix, rate }
        $out = [];
        foreach ($data['currencies']['currency'] as $c) {
            $code = $c['code'] ?? null;
            $rate = isset($c['rate']) ? (float) $c['rate'] : null;
            if (! $code || $rate === null) continue;
            $out[$code] = [
                'id' => $c['id'] ?? null,
                'code' => $code,
                'prefix' => $c['prefix'] ?? '',
                'suffix' => $c['suffix'] ?? '',
                'format' => $c['format'] ?? 1,
                // store numeric rate (WHMCS returns rates relative to default currency; we assume USD rate=1)
                'rate' => $rate,
            ];
        }

        return $out;
    });
}
  public function getDomainName(Request $request)
{

    $url = 'https://clients.cloudcarehost.com/includes/api.php';
    $payload = [
        'identifier'   => env('DOMAIN_API_ID'),
        'secret'       => env('DOMAIN_API_SECRET'),
        'responsetype' => 'json',
        'action'       => 'GetTLDPricing',
    ];

    try {
        $response = Http::asForm()->timeout(30)->post($url, $payload);

        if (! $response->successful()) {
            return back()->withErrors(['api' => 'Failed to fetch TLD pricing.']);
        }

        $data = $response->json();

        if (! isset($data['pricing']) || ! is_array($data['pricing'])) {
            return back()->withErrors(['api' => 'Unexpected API response.']);
        }
        // Build simplified array for Blade
        $tldPricing = [];
        foreach ($data['pricing'] as $tld => $meta) {
            $price = null;

            if (isset($meta['register']) && is_array($meta['register'])) {
                if (isset($meta['register']['1'])) {
                    $price = $meta['register']['1']; // 1-year price
                } else {
                    foreach ($meta['register'] as $val) {
                        $price = $val;
                        break;
                    }
                }
            }

            $tldPricing[] = (object)[
                'tld'   => $tld,
                'price' => $price,
            ];

        }

        return view('user.domain-name', compact('tldPricing'));

    } catch (\Throwable $e) {
        return back()->withErrors(['api' => 'Error calling TLD API: ' . $e->getMessage()]);
    }
}

    /**
     * Fetch TLD pricing as an associative array: [ 'com' => '14.00', 'in' => '7.00', ... ]
     * Cached for 24 hours.
     */
    private function getTldPricingAssoc(): array
    {
        return Cache::remember('tld_pricing_assoc', 60 * 24, function () {
            $url = 'https://clients.cloudcarehost.com/includes/api.php';
            $payload = [
                'identifier'   => env('DOMAIN_API_ID'),
                'secret'       => env('DOMAIN_API_SECRET'),
                'responsetype' => 'json',
                'action'       => 'GetTLDPricing',
            ];

            $response = Http::asForm()->timeout(30)->post($url, $payload);

            if (! $response->successful()) {
                return [];
            }

            $data = $response->json();
            if (! isset($data['pricing']) || ! is_array($data['pricing'])) {
                return [];
            }

            $assoc = [];
            foreach ($data['pricing'] as $tld => $meta) {
                $price = null;
                if (isset($meta['register']) && is_array($meta['register'])) {
                    // prefer 1-year price, otherwise pick the first available
                    if (isset($meta['register']['1'])) {
                        $price = $meta['register']['1'];
                    } else {
                        foreach ($meta['register'] as $val) {
                            $price = $val;
                            break;
                        }
                    }
                }
                // Keep the price as string or null
                $assoc[$tld] = $price;
            }

            return $assoc;
        });
    }

    /**
     * Check domain availability via WHMCS DomainCheck API
     * We cache the result for a short time (60s) to avoid hammering external API for quick repeated requests.
     */
    private function checkDomainAvailability(string $domain): array
    {
        $cacheKey = 'domain_check_' . sha1($domain);

        return Cache::remember($cacheKey, 60, function () use ($domain) {
            $url = 'https://clients.cloudcarehost.com/includes/api.php';
            $payload = [
                'identifier'   => env('DOMAIN_API_ID'),
                'secret'       => env('DOMAIN_API_SECRET'),
                'responsetype' => 'json',
                'action'       => 'DomainWhois',
                'domain'       => $domain,
            ];

            $response = Http::asForm()->timeout(20)->post($url, $payload);
            if (! $response->successful()) {
                return [
                    'domain'  => $domain,
                    'status'  => 'error',
                    'message' => 'DomainCheck returned HTTP ' . $response->status(),
                ];
            }

            $data = $response->json();
            $rawStatus = $data['status'] ?? null;
            $status = 'unavailable';
            if ($rawStatus === 'available' ) {
                $status = 'available';
            } elseif ($rawStatus === 'unavailable' || $rawStatus === 211 || (string) $rawStatus === '211') {
                $status = 'unavailable';
            } elseif ($data['result'] === 'success' && is_string($rawStatus)) {
                // fallback: if they returned "available" as string
                $status = ($rawStatus === 'available') ? 'available' : 'unavailable';
            }

            return [
                'domain' => $domain,
                'status' => $status,
                'raw'    => $data,
            ];
        });
    }

    /**
     * Pop & return the next suggestion candidate from cache (for sequential suggestion checks).
     * Returns null if none left.
     */
    public function popNextSuggestion(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $token = $request->input('token');
        $cacheKey = 'domain_suggestions_queue_' . $token;

        // Use atomic-ish get->modify->put using Cache::get + put.
        // If using Redis you can replace this with an actual Redis list pop for atomicity.
        $queue = Cache::get($cacheKey, []);

        if (empty($queue) || !is_array($queue)) {
            // Signal completion explicitly
            return response()->json(['ok' => true, 'done' => true, 'message' => 'No suggestions left']);
        }

        // take first element
        $nextTld = array_shift($queue);
        // update cache (short TTL)
        Cache::put($cacheKey, $queue, now()->addMinutes(5));

        // Build domain candidate from provided baseName
        $base = $request->input('base');
        if (! $base) {
            return response()->json(['ok' => false, 'message' => 'Missing base parameter'], 422);
        }

        $candidate = $base . '.' . $nextTld;

        // Do the availability check (cached with existing checkDomainAvailability())
        $checked = $this->checkDomainAvailability($candidate);
        // include price if available
        $tldAssoc = $this->getTldPricingAssoc();
        $checked['price'] = $tldAssoc[$nextTld] ?? null;

        return response()->json([
            'ok' => true,
            'done' => false,
            'tld' => $nextTld,
            'suggestion' => $checked,
            'remaining' => count($queue),
        ]);
    }
    /**
     * Main endpoint: receive user 'domain' input, determine TLD, price and suggestions
     */
    public function searchDomain(Request $request)
    {
        $request->validate([
            'domain' => 'required|string',
        ]);

        // normalize input: remove protocol and path, to lower
        $input = strtolower(trim($request->input('domain')));
        $input = preg_replace('#^https?://#', '', $input);
        $input = strtok($input, '/'); // keep part before any slash
        $input = trim($input);

        if (empty($input)) {
            return response()->json(['ok' => false, 'message' => 'Empty domain input'], 422);
        }

        // Get pricing (assoc tld => price)
        $tldAssoc = $this->getTldPricingAssoc();
        if (empty($tldAssoc)) {
            return response()->json(['ok' => false, 'message' => 'Failed to fetch TLD pricing'], 502);
        }
        $availableTlds = array_keys($tldAssoc);
        // split input into parts
        $parts = array_filter(explode('.', $input), fn($p) => $p !== '');
        $parts = array_values($parts);
        $partsCount = count($parts);

        // determine the best matching tld (try longest match up to 3 parts, e.g., co.uk / co.in)
        $matchedTld = null;
        $matchedParts = 0;
        if ($partsCount >= 2) {
            $maxTry = min(3, $partsCount - 1);
            for ($i = $maxTry; $i >= 1; $i--) {
                $candidate = implode('.', array_slice($parts, -$i));
                if (in_array($candidate, $availableTlds, true)) {
                    $matchedTld = $candidate;
                    $matchedParts = $i;
                    break;
                }
            }
        }
        // If no TLD matched, set fallback:
        if (! $matchedTld) {
            if ($partsCount === 1) {
                $matchedTld = 'com'; // default
                $matchedParts = 1;
            } else {
                // fallback to last segment as tld
                $matchedTld = end($parts);
                $matchedParts = 1;
            }
        }

        // pick base name (the label to use for suggestions). Use the label immediately before the tld.
        $baseIndex = $partsCount - $matchedParts - 1;
        $baseName = ($baseIndex >= 0) ? $parts[$baseIndex] : $parts[0];

        // form searched domain (use the chosen base + matched tld)
        $searchedFull = $baseName . '.' . $matchedTld;

        // do domain check for searched
        $searchedCheck = $this->checkDomainAvailability($searchedFull);
        $searchedCheck['price'] = $tldAssoc[$matchedTld] ?? null;

        // Prepare suggestions queue (preserve pricing order). Exclude matchedTld
        $maxSuggestions = 6;
        $suggestionTlds = [];
        foreach ($availableTlds as $tld) {
            if ($tld === $matchedTld) continue;
            $suggestionTlds[] = $tld;
            if (count($suggestionTlds) >= $maxSuggestions) break;
        }

        // put suggestion queue into cache with a short token
        $token = Str::random(40);
        $cacheKey = 'domain_suggestions_queue_' . $token;
        // store queue as array of tlds; short TTL (5 min)
        Cache::put($cacheKey, $suggestionTlds, now()->addMinutes(5));

        // Determine base currency (use env fallback)
        $baseCurrency = env('BASE_TLD_CURRENCY', 'USD'); // set in .env if different

        // prepare currencies
        $currencies = $this->getCurrenciesAssoc();
        // return searched result immediately plus the token and baseName so frontend can fetch suggestions sequentially
        return response()->json([
            'ok' => true,
            'searched' => $searchedCheck,
            'suggestion_token' => $token,
            'base' => $baseName,
            'suggestions_expected' => count($suggestionTlds),
            'currency' => [
                'base' => $baseCurrency,
                'list' => array_values($currencies), // array of currency objects
            ],
        ]);
    }
}

