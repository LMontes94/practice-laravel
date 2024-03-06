<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/search', [UserController::class, 'search'])->name('search');
Route::post('/search', [UserController::class, 'search-post'])->name('search-name');
