<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/visit-us', [PageController::class, 'visit'])->name('visit');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])
        ->middleware('throttle:10,1')
        ->name('login');
    Route::post('/login', [AdminController::class, 'login'])
        ->middleware('throttle:10,1')
        ->name('login.attempt');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/messages', [AdminController::class, 'messages'])
        ->middleware('admin.auth')
        ->name('messages');
});