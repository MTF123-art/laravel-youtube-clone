<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login-page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register-page');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth','role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        
    });
});

Route::middleware(['auth','role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        // video management
        Route::get('/my-video', [VideoController::class, 'index'])->name('my-video');
        Route::get('/add-video', [VideoController::class, 'addVideo'])->name('add-video');
        Route::post('/store-video', [VideoController::class, 'storeVideo'])->name('store-video');
    });
});