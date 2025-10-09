<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Currency;

class CurrencyMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session()->has('currency')) {
            $currency = Currency::getByCode(session('currency'));
            if ($currency) {
                app()->singleton('activeCurrency', function () use ($currency) {
                    return $currency;
                });
                return $next($request);
            }
        }

        // Default to USD if not set or invalid
        $currency = Currency::getByCode('USD');
        session(['currency' => 'USD']);
        app()->singleton('activeCurrency', function () use ($currency) {
            return $currency;
        });

        return $next($request);
    }
}