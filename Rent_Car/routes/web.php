<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CustomerController;
use app\Http\Controllers\WebController;

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
Route::get("/customerList",[\App\Http\Controllers\CustomerController::class,"customerList"]);
Route::get("/about",[\App\Http\Controllers\WebController::class,"aboutUs"]);
