<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware(['api', 'token_verify'])->group(function () {
    Route::get('/get-states', [App\Http\Controllers\Frontend\LocationController::class, 'getStates']);
    Route::get('/get-districts', [App\Http\Controllers\Frontend\LocationController::class, 'getDistricts']);
    Route::get('/get-municipalities', [App\Http\Controllers\Frontend\LocationController::class, 'getCities']);
});