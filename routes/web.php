<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getIndex']);
Route::controller(BookController::class)->group(function(){
    Route::get('/create',  'getIndex');
    Route::post('/create-book', 'createBook');
    Route::get('/edit/{id}', 'getEdit');
    Route::put('/edit-book/{id}', 'editBook');
    Route::delete('/delete-book/{id}', 'deleteBook');
});

// Route::get('/create', [BookController::class, 'getIndex']);
// Route::post('/create-book', [BookController::class, 'createBook']);
// Route::get('/edit/{id}', [BookController::class, 'getEdit']);
// Route::put('/edit-book/{id}', [BookController::class, 'editBook']);
// Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook']);