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

Route::get('/', [\App\Http\Controllers\AddTransportationController::class, 'ViewTransportation']);
Route::post('/add_transportation', [\App\Http\Controllers\OrderController::class, 'AddTransportation'])->name('orders.store');
//Route::get('/', [\App\Http\Controllers\AddTransportationController::class, 'AddTransportation']);
