<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperController;

Route::get('/test',[HelperController::class,'checkHelper']);