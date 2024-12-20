<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getIndex'])->name('home');
Route::get('/create', [ProductController::class, 'createIndex']);
Route::post('/create-product',[ProductController::class, 'createProduct']);
Route::get('/update/{id}', [ProductController::class, 'updateIndex']);
Route::put('/update-product/{id}',[ProductController::class, 'updateProduct']);
Route::delete('/delete-product/{id}',[ProductController::class, 'deleteProduct']);
