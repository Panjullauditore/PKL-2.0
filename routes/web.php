<?php

use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;

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
    Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
    Route::get('/kuliner', [KulinerController::class, 'index'])->name('kuliner');
    Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
