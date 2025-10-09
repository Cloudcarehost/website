<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CurrencyController;

Route::middleware('api')->group(function () {
    Route::get('/currencies', [CurrencyController::class, 'index']);
    Route::post('/currency/set', [CurrencyController::class, 'setCurrency']);
    Route::get('/currency/current', [CurrencyController::class, 'getCurrent']);
});