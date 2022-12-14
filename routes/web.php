<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StockController;

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


    Route::get('/', [LoginController::class, 'login_view']);
    Route::get('/login', [LoginController::class, 'login_view']);


Route::get('/getprice', [StockController::class, 'getprice_view']);
Route::get('/storeprice/{str}', [StockController::class, 'storeprice']);

