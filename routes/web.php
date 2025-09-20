<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// guest routes
Route::middleware('guest')->group(function () {
    // the login routes
    Route::get('/', [AuthController::class, 'login']);

    // logging in
    Route::get('/login', [AuthController::class, 'login'])->name('cookmates.login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

// authenticated routes
Route::middleware('auth')->group(function () {

    Route::get('/home', [DashboardController::class, 'home'])->name('cookmates.home');
    Route::get('/logoutPage', [AuthController::class, 'logoutPage'])->name('cookmates.logoutPage');
    Route::post('/logout', [AuthController::class, 'logout'])->name('cookmates.logout');

    // registration
    Route::get('/admins/register', [AuthController::class, 'register'])->name('admins.register');
    Route::post('/admins', [AuthController::class, 'store'])->name('admins.store');

    // recipes dashboard
    Route::get('/cookmates', [DashboardController::class, 'index'])->name('cookmates.index');
    Route::get('/cookmates/create', [DashboardController::class, 'create'])->name('cookmates.create');
    Route::post('/cookmates', [DashboardController::class, 'store'])->name('cookmates.store');
    Route::get('/cookmates/about', [DashboardController::class, 'about'])->name('cookmates.about');
    Route::get('/cookmates/{recipe}', [DashboardController::class, 'show'])->name('cookmates.show');
    Route::get('/cookmates/{recipe}/search', [DashboardController::class, 'search'])->name('cookmates.search');
    Route::get('/cookmates/{recipe}/edit', [DashboardController::class, 'edit'])->name('cookmates.edit');
    Route::put('/cookmates/{recipe}', [DashboardController::class, 'update'])->name('cookmates.update');
    Route::delete('/cookmates/{recipe}', [DashboardController::class, 'destroy'])->name('cookmates.destroy');
});
