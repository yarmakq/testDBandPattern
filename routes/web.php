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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/info_transportation', [\App\Http\Controllers\ViewTransportationsController::class, 'view']);
Route::get('/view_organization', [\App\Http\Controllers\ViewOrganizationController::class, 'index']);
Route::get('/add_transportation', [\App\Http\Controllers\AddTransportationController::class, 'ViewTransportation'])->name('transportations.index');
Route::post('/add_transportation', [\App\Http\Controllers\OrderController::class, 'AddTransportation'])->name('orders.store');
