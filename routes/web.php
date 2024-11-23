<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getIndex']);
Route::get('/create', [CreateController::class, 'getIndex']);
Route::post('/create-book', [CreateController::class, 'createBook']);