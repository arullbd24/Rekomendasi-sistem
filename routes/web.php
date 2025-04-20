<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jasa', [JasaController::class, 'index'])->name('jasa.index');

// Tampilkan form register
Route::get('/register', [RegisterController::class, 'show'])->name('register');

// Proses form register
Route::post('/register', [RegisterController::class, 'register']);

// Tampilkan form login
Route::get('/login', [LoginController::class, 'show'])->name('login');

// Proses form login
Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::post('/dashboard', [DashboardController::class, 'dashboard']);

