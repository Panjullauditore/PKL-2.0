<?php

use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\TouristAttractionController;
use App\Http\Controllers\TourGuideController;

Route::get('/hotel/{id}', [DetailController::class, 'show'])->name('hotel.detail');
// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

    Route::middleware(['auth'])->group(function () {
        Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');
        Route::get('/culinary', [KulinerController::class, 'index'])->name('kuliner');
        Route::get('/shopping', [ShoppingController::class, 'index'])->name('shopping');
        Route::get('/entertainment', [EntertainmentController::class, 'index'])->name('entertainment');
        Route::get('/tourist-attraction', [WisataController::class, 'index'])->name('wisata');
        Route::get('/tour-guide', [TourGuideController::class, 'index'])->name('tour.guide');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
