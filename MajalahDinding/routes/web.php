<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('user/home',[App\Http\Controllers\PesanController::class,'indexuser']);
Route::get('home',[App\Http\Controllers\PesanController::class,'indexadmin']);
Route::post('tolak/$id',[App\Http\Controllers\PesanController::class,'tolak']);
Route::post('user/pesan',[App\Http\Controllers\PesanController::class,'store']);
Route::post('terima/$id',[App\Http\Controllers\PesanController::class,'terima']);
Route::post('login',[App\Http\Controllers\UserController::class,'postLogin']);
