<?php

use Illuminate\Support\Facades\Route;

// Клиентские контроллеры
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;

// Админские контроллеры
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\PostController as AdminPostController;


// ===============================
//   ГЛАВНАЯ СТРАНИЦА
// ===============================
Route::get('/', function () {
    return view('welcome');
})->name('home');


// ===============================
//   КЛИЕНТСКАЯ ЧАСТЬ (ПУБЛИЧНАЯ)
// ===============================
Route::resource('services', ServiceController::class)->only(['index', 'show']);
Route::resource('portfolio', PortfolioController::class)->only(['index', 'show']);
Route::resource('posts', PostController::class)->only(['index', 'show']);


// ===============================
//   КЛИЕНТСКИЙ DASHBOARD (BREEZE)
// ===============================
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('client.dashboard');
    })->name('dashboard');
});


// ===============================
//   AUTH + PROFILE (BREEZE)
// ===============================
require __DIR__.'/auth.php';
require __DIR__.'/profile.php';


// ===============================
//   АДМИНКА
// ===============================
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Админский Dashboard (через контроллер)
        Route::get('/', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        // Управление пользователями
        Route::resource('users', AdminUserController::class);

        // Управление контентом
        Route::resource('services', AdminServiceController::class);
        Route::resource('portfolio', AdminPortfolioController::class);
        Route::resource('posts', AdminPostController::class);
    });