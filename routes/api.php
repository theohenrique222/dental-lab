<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Categorycontroller;
use Illuminate\Support\Facades\Route;

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/category', [CategoryController::class, 'show']);