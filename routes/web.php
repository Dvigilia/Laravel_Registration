<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Registration Routes
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [UserController::class, 'register'])->name('register');

// Login Routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

// Logout Route
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
