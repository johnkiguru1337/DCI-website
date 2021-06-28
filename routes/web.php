<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\officerController;
use App\Http\Controllers\crimeController;
use App\Http\Controllers\welcomeController;

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
Route::resource('/',welcomeController::class);
Route::resource('/officer',officerController::class);
Route::resource('/crime',crimeController::class);
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

