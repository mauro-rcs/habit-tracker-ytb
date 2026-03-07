<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [siteController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
