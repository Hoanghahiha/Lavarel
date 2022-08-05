<?php

use Illuminate\Support\Facades\Route;

//Route::group(['prefix'=>"student"],function (){
//    Route::get("List",[\App\Http\Controllers\StudentController::class,"studentList"]);
//    Route::get("Form",[\App\Http\Controllers\StudentController::class,"studentForm"]);
//    Route::post("Form",[\App\Http\Controllers\StudentController::class,"studentCreate"]);
//    Route::get("Edit/{id}",[\App\Http\Controllers\StudentController::class,'studentEdit']);
//    Route::put("Edit/{student}",[\App\Http\Controllers\StudentController::class,'studentUpdate']);
//    Route::delete("Delete/{student}",[\App\Http\Controllers\StudentController::class,'studentDelete']);
//});
Route::get("/studentList",[\App\Http\Controllers\StudentController::class,"studentList"]);//->middleware("is_admin");
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
