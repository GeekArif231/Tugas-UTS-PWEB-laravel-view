<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'login'])->name('login');
Route::get('/register', [ContactController::class, 'register'])->name('register');
Route::post('/login', [ContactController::class, 'processLogin'])->name('processLogin');
Route::get('/contact', [ContactController::class, 'showContact'])->name('contact');
