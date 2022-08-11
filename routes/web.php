<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('login', [AuthController::class, 'loginUser'])->name('auth.loginUser');

    Route::get('register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('register', [AuthController::class, 'storeUser'])->name('auth.register.store');

    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('home', [AuthController::class, 'home'])->name('home');
