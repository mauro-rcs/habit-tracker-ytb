<?php

use App\Http\Controllers\HabitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;

// SITE
Route::get('/', [SiteController::class, 'index'])->name('index');

// AUTH
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

    // HABITS
    Route::get('/dashboard/habits/create', [HabitController::class, 'create'])->name('habit.create');
    Route::post('/dashboard/habits', [HabitController::class, 'store'])->name('habit.store');
});

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');

// REGISTER
Route::get('/cadastro', [RegisterController::class, 'index'])->name('register');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register');
