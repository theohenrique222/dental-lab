<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/services', [ServiceController::class, 'index']);

// Route::get('/services', function() {
//     return response()->json((['Raiva do dia' => 'API Rodando a mais de mil Gloria a Deeeeeeeussss!!!!!!!!!!']));
// });