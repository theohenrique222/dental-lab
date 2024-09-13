<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Categorycontroller;
// use App\Http\Controllers\CombinedController;
use Illuminate\Support\Facades\Route;

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/category', [CategoryController::class, 'show']);

// Route::get('/combined-services-category', [CombinedController::class, 'combined']);