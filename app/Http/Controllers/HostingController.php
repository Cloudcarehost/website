<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostingController extends Controller
{
    public function index()
    {
        return view('hosting.index');
    }

    public function shared(Request $request)
    {
        $currency = $request->get('currency', 'USD');

        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where('slug', 'shared-hosting')
            ->get();

        $blogs = DB::table('blogs')
            //  ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();

        return view('hosting.shared', compact('data', 'blogs'));
    }

    public function wordpress(Request $request)
    {
        $currency = $request->get('currency', 'USD');

        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where('slug', 'wordpress-hosting')
            ->get();

        $blogs = DB::table('blogs')
            // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.wordpress', compact('data', 'blogs'));
    }

    public function woocommerce(Request $request)
    {
        $currency = $request->get('currency', 'USD');

        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where('slug', 'woocommerce-hosting')
            ->get();

        $blogs = DB::table('blogs')
            // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.woocommerce', compact('data', 'blogs'));
    }

    public function cloud()
    {
        return view('hosting.cloud');
    }

    public function vps(Request $request)
    {
        $currency = $request->get('currency', 'USD');

        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_quaterly' => 'eur_discounted_quaterly',
                'discounted_semiannually' => 'eur_discounted_semiannually',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'quaterly' => 'eur_quarterly',
                'semiannually' => 'eur_semiannually',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_quaterly' => 'aud_discounted_quaterly',
                'discounted_semiannually' => 'aud_discounted_semiannually',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'quaterly' => 'aud_quarterly',
                'semiannually' => 'aud_semiannually',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_quaterly' => 'inr_discounted_quaterly',
                'discounted_semiannually' => 'inr_discounted_semiannually',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'quaterly' => 'inr_quarterly',
                'semiannually' => 'inr_semiannually',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_quaterly' => 'aed_discounted_quaterly',
                'discounted_semiannually' => 'aed_discounted_semiannually',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'quaterly' => 'aed_quarterly',
                'semiannually' => 'aed_semiannually',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_quaterly' => 'usd_discounted_quaterly',
                'discounted_semiannually' => 'usd_discounted_semiannually',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'quaterly' => 'usd_quarterly',
                'semiannually' => 'usd_semiannually',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_quaterly']} as usd_discounted_quaterly",
                "{$currencyConfig['discounted_semiannually']} as usd_discounted_semiannually",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['quaterly']} as usd_quarterly",
                "{$currencyConfig['semiannually']} as usd_semiannually",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where('slug', 'vps-hosting')
            ->get();
        $blogs = DB::table('blogs')
            //  ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.vps', compact('data', 'blogs'));
    }

    public function dedicated(Request $request)
    {
        $currency = $request->get('currency', 'USD');

        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_quaterly' => 'eur_discounted_quaterly',
                'discounted_semiannually' => 'eur_discounted_semiannually',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'quaterly' => 'eur_quarterly',
                'semiannually' => 'eur_semiannually',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_quaterly' => 'aud_discounted_quaterly',
                'discounted_semiannually' => 'aud_discounted_semiannually',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'quaterly' => 'aud_quarterly',
                'semiannually' => 'aud_semiannually',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_quaterly' => 'inr_discounted_quaterly',
                'discounted_semiannually' => 'inr_discounted_semiannually',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'quaterly' => 'inr_quarterly',
                'semiannually' => 'inr_semiannually',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_quaterly' => 'aed_discounted_quaterly',
                'discounted_semiannually' => 'aed_discounted_semiannually',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'quaterly' => 'aed_quarterly',
                'semiannually' => 'aed_semiannually',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_quaterly' => 'usd_discounted_quaterly',
                'discounted_semiannually' => 'usd_discounted_semiannually',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'quaterly' => 'usd_quarterly',
                'semiannually' => 'usd_semiannually',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_quaterly']} as usd_discounted_quaterly",
                "{$currencyConfig['discounted_semiannually']} as usd_discounted_semiannually",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['quaterly']} as usd_quarterly",
                "{$currencyConfig['semiannually']} as usd_semiannually",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where('slug', 'dedicated-server')
            ->get();
        $blogs = DB::table('blogs')
            // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.dedicated', compact('data', 'blogs'));
    }

    public function nodejs(Request $request)
    {
        $currency = $request->get('currency', 'USD');

        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where('slug', 'nodejs-hosting')
            ->get();
        $blogs = DB::table('blogs')
            // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.nodejs', compact('data', 'blogs'));
    }

    public function reseller(Request $request)
    {
        $currency = $request->get('currency', 'USD');

        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where('slug', 'reseller-hosting')
            ->get();
        $blogs = DB::table('blogs')
            // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.reseller', compact('data', 'blogs'));
    }

    public function compare()
    {
        return view('hosting.compare');
    }

    public function checkout($plan)
    {
        if (!in_array($plan, ['starter', 'pro', 'business', 'business-cloud'])) {
            abort(404);
        }

        return view('hosting.checkout', compact('plan'));
    }

    public function process(Request $request)
    {
        // Process the payment and create the hosting account
        // This would integrate with your payment processor

        return redirect()->route('hosting.success');
    }

    public function userHome(Request $request)
    {
        $currency = $request->get('currency', 'USD');
        // dd("Okay", $currency);
        $currencyMap = [
            'EUR' => [
                'prefix' => 'eur_prefix',
                'discounted_annually' => 'eur_discounted_annually',
                'discounted_biennially' => 'eur_discounted_biennially',
                'discounted_triennially' => 'eur_discounted_triennially',
                'monthly' => 'eur_monthly',
                'annually' => 'eur_annually',
                'biennially' => 'eur_biennially',
                'triennially' => 'eur_triennially',
                'url_param' => '?currency=3'
            ],
            'AUD' => [
                'prefix' => 'aud_prefix',
                'discounted_annually' => 'aud_discounted_annually',
                'discounted_biennially' => 'aud_discounted_biennially',
                'discounted_triennially' => 'aud_discounted_triennially',
                'monthly' => 'aud_monthly',
                'annually' => 'aud_annually',
                'biennially' => 'aud_biennially',
                'triennially' => 'aud_triennially',
                'url_param' => '?currency=4'
            ],
            'INR' => [
                'prefix' => 'inr_prefix',
                'discounted_annually' => 'inr_discounted_annually',
                'discounted_biennially' => 'inr_discounted_biennially',
                'discounted_triennially' => 'inr_discounted_triennially',
                'monthly' => 'inr_monthly',
                'annually' => 'inr_annually',
                'biennially' => 'inr_biennially',
                'triennially' => 'inr_triennially',
                'url_param' => '?currency=2'
            ],
            'AED' => [
                'prefix' => 'aed_prefix',
                'discounted_annually' => 'aed_discounted_annually',
                'discounted_biennially' => 'aed_discounted_biennially',
                'discounted_triennially' => 'aed_discounted_triennially',
                'monthly' => 'aed_monthly',
                'annually' => 'aed_annually',
                'biennially' => 'aed_biennially',
                'triennially' => 'aed_triennially',
                'url_param' => '?currency=6'
            ],
            'USD' => [
                'prefix' => 'usd_prefix',
                'discounted_annually' => 'usd_discounted_annually',
                'discounted_biennially' => 'usd_discounted_biennially',
                'discounted_triennially' => 'usd_discounted_triennially',
                'monthly' => 'usd_monthly',
                'annually' => 'usd_annually',
                'biennially' => 'usd_biennially',
                'triennially' => 'usd_triennially',
                'url_param' => '?currency=1'
            ]
        ];

        $currencyConfig = $currencyMap[$currency] ?? $currencyMap['USD'];

        $data = DB::table('plans')
            ->select(
                'id',
                'name',
                'slug2',
                'features_json',
                'product_url',
                "{$currencyConfig['prefix']} as usd_prefix",
                "{$currencyConfig['discounted_annually']} as usd_discounted_annually",
                "{$currencyConfig['discounted_biennially']} as usd_discounted_biennially",
                "{$currencyConfig['discounted_triennially']} as usd_discounted_triennially",
                "{$currencyConfig['monthly']} as usd_monthly",
                "{$currencyConfig['annually']} as usd_annually",
                "{$currencyConfig['biennially']} as usd_biennially",
                "{$currencyConfig['triennially']} as usd_triennially",
                DB::raw("'{$currencyConfig['url_param']}' as url_curr_id")
            )
            ->where(function ($query) {
                $query->where('slug', 'shared-hosting')->where('slug2', 'starter')
                    ->orWhere('slug2', 'micro')
                    ->orWhere('slug2', 'turbo')
                    ->orWhere('slug2', 'boost');
            })
            ->get();

        $blogs = DB::table('blogs')
            // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();

        // dd($data);
        return view('user.home', compact('data', 'blogs'));
    }
}