<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', [App\Http\Controllers\Backend\DashboardController::class, 'index']);
    Route::resource('/tokens', App\Http\Controllers\Backend\TokenController::class);
    Route::resource('/documentation', App\Http\Controllers\Backend\DocumentationController::class);

});
