<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[\App\Http\Controllers\WebController::class,"home"]);
Route::get("/about",[App\Http\Controllers\WebController::class,"aboutUs"])->middleware("auth");
Route::get("/usersPage/index",[App\Http\Controllers\WebController::class,"index"])->middleware("auth");
Route::get("/usersPage/profile",[App\Http\Controllers\WebController::class,"profile"])->middleware("auth");

