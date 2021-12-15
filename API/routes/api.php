<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class,'list']);
Route::get('/users/{id}',[UserController::class,'detail']);