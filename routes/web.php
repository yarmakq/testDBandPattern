<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\ViewOrganizationController;
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

Route::get('/', [HomeController::class, 'index']);
Route::resource('transportations', TransportationController::class);
Route::resource('organizations', OrganizationController::class);
Route::resource('trucks', \App\Http\Controllers\TruckController::class);
Route::resource('workers', \App\Http\Controllers\WorkerController::class);
