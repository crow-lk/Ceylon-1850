<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/packages', [PackagesController::class, 'index'])->name('packages');

Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Reservation routes
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Social login routes
Route::get('/auth/{provider}', [AuthController::class, 'redirectToProvider'])->name('social.login');
Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProviderCallback']);
