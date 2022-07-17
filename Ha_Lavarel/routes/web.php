<?php

use Illuminate\Support\Facades\Route;
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
Route::get("/about",[\App\Http\Controllers\WebController::class,"aboutUs"]);
Route::get("/studentList",[\App\Http\Controllers\WebController::class,"studentList"]);
Route::get("/classList",[\App\Http\Controllers\WebController::class,"classList"]);
Route::get("/subjectList",[\App\Http\Controllers\WebController::class,"subjectList"]);
Route::get("/scoreList",[\App\Http\Controllers\WebController::class,"scoreList"]);

