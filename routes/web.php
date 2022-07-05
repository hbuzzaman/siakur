<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkurController;

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

// Login & Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //name login untuk setting nama route pada providers
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/', [DashboardController::class, 'index'])->middleware('auth');


Route::resource('/user', UserController::class)->middleware('role');

Route::resource('/lokasi', LocationController::class)->middleware('auth');

Route::resource('/pic', PicController::class)->middleware('auth');

Route::resource('/alatukur', AkurController::class)->middleware('auth');

