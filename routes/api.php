<?php

use App\Http\Controllers\Trade\TradeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('script', [TradeController::class, 'index']);