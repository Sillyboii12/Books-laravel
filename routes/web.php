<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/add', [BookController::class, 'create']);

Route::post('/books/add', [BookController::class, 'store']);

