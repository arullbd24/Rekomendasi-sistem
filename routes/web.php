<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jasa', [JasaController::class, 'index'])->name('jasa.index');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Tampilkan form login
Route::get('/login', [LoginController::class, 'show'])->name('login');

// Proses form login
Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::post('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::post('/admin', [AdminController::class, 'admin']);

// Login Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Register Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Password Reset Routes
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
