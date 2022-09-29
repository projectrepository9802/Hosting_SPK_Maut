<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAlternatifController;
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

Route::get('dashboard', [DashboardController::class, 'index']);
Route::resource('data-alternatif', DataAlternatifController::class);
