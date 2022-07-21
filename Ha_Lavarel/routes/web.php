<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\WebController;
use app\Http\Controllers\ClassController;
use app\Http\Controllers\StudentController;
use app\Http\Controllers\ScoreController;
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

Route::get("/studentList",[\App\Http\Controllers\StudentController::class,"studentList"]);
Route::get("/studentForm",[\App\Http\Controllers\StudentController::class,"studentForm"]);
Route::post("/studentForm",[\App\Http\Controllers\StudentController::class,"studentCreate"]);

Route::get("/classList",[\App\Http\Controllers\ClassController::class,"classList"]);
Route::get("/classForm",[\App\Http\Controllers\ClassController::class,"classForm"]);
Route::post("/classForm",[\App\Http\Controllers\ClassController::class,"classCreate"]);

Route::get("/subjectList",[\App\Http\Controllers\WebController::class,"subjectList"]);

Route::get("/scoreList",[\App\Http\Controllers\ScoreController::class,"scoreList"]);
Route::get("/scoreForm",[\App\Http\Controllers\ScoreController::class,"scoreForm"]);
Route::post("/scoreForm",[\App\Http\Controllers\ScoreController::class,"scoreCreate"]);


