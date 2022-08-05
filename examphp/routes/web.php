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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/student/list",[\App\Http\Controllers\StudentController::class,"all"]);
Route::get("/student/create",[\App\Http\Controllers\StudentController::class,"form"]);
Route::post("/student/create",[\App\Http\Controllers\StudentController::class,"create"]);
