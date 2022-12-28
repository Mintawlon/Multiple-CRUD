<?php

use App\Http\Controllers\barndController;
use App\Http\Controllers\drugController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\shopController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/test', resourceController::class);

Route::resource('/addnew', drugController::class);

Route::resource('/shop', shopController::class);

Route::resource('/brand', barndController::class);
