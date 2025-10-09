<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        dd("Okay");
        // $currencies = Currency::active()->get();
        return response()->json("Okjay data");
    }

    public function setCurrency(Request $request)
    {
        $currency = Currency::getByCode($request->code);

        if ($currency) {
            session(['currency' => $currency->code]);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 400);
    }

    public function getCurrent()
    {
        $currencyCode = session('currency', 'USD');
        $currency = Currency::getByCode($currencyCode) ?? Currency::getByCode('USD');

        return response()->json([
            'code' => $currency->code,
            'symbol' => $currency->symbol
        ]);
    }
}