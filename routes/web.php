<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PackagesController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/packages', [PackagesController::class, 'index'])->name('packages');

Route::get('/experiences', [ElementsController::class, 'index'])->name('experiences');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Reservation routes
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
