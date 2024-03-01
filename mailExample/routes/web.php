<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\MailController;

Route::get('/', [MailController::class, 'index'])->name('index');
Route::get('/mailme', [MailController::class, 'mailMe'])->name('mailMe');
