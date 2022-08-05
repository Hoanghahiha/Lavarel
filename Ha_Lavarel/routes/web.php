<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get("/about",[\App\Http\Controllers\WebController::class,"aboutUs"]);

Route::get("/studentList",[\App\Http\Controllers\StudentController::class,"studentList"])->middleware("is_admin");
Route::get("/studentForm",[\App\Http\Controllers\StudentController::class,"studentForm"]);
Route::post("/studentForm",[\App\Http\Controllers\StudentController::class,"studentCreate"]);
Route::get("/studentEdit/{id}",[\App\Http\Controllers\StudentController::class,"studentEdit"]);
Route::put("/studentEdit/{student}",[\App\Http\Controllers\StudentController::class,"studentUpdate"]);
Route::delete("/studentDelete/{student}",[\App\Http\Controllers\StudentController::class,"studentDelete"]);

Route::get("/classList",[\App\Http\Controllers\ClassController::class,"classList"]);
Route::get("/classForm",[\App\Http\Controllers\ClassController::class,"classForm"]);
Route::post("/classForm",[\App\Http\Controllers\ClassController::class,"classCreate"]);

Route::get("/subjectList",[\App\Http\Controllers\WebController::class,"subjectList"]);

Route::get("/scoreList",[\App\Http\Controllers\ScoreController::class,"scoreList"]);
Route::get("/scoreForm",[\App\Http\Controllers\ScoreController::class,"scoreForm"]);
Route::post("/scoreForm",[\App\Http\Controllers\ScoreController::class,"scoreCreate"]);

//Route::group(['prefix'=>"student","middleware"=>["is_admin"]] function (){
//
//});
//Route::group(['prefix'=>"class"], function (){
//
//});
include_once "user.php";
Route::middleware("is_admin")->prefix("admin")->group(function (){
    include_once "admin.php";
});
