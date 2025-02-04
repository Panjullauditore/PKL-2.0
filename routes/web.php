<?php

use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TouristAttractionController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\TourGuideController;

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/culinary', [CulinaryController::class, 'index'])->name('culinary.index');
Route::get('/entertainment', [EntertainmentController::class, 'index'])->name('entertainment.index');

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

    Route::middleware(['auth'])->group(function () {
        Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.index');
        Route::get('/hotel/{id}', [HotelController::class, 'show'])->name('hotel.show');
        Route::get('/culinary', [CulinaryController::class, 'index'])->name('culinary.index');
        Route::get('/culinary/{id}', [CulinaryController::class, 'show'])->name('culinary.show');
        Route::get('/shopping', [ShoppingController::class, 'index'])->name('shopping.index');
        Route::get('/shopping/{id}', [ShoppingController::class, 'show'])->name('shopping.show');
        Route::get('/entertainment', [EntertainmentController::class, 'index'])->name('entertainment.index');
        Route::get('/entertainment/{id}', [EntertainmentController::class, 'show'])->name('entertainment.show');
        Route::get('/tourist-attraction', [TouristAttractionController::class, 'index'])->name('tourist-attraction.index');
        Route::get('/tourist-attraction/{id}', [TouristAttractionController::class, 'show'])->name('tourist-attraction.show');
        Route::get('/tour-guide', [TourGuideController::class, 'index'])->name('tour-guide.index');
        Route::get('/tour-guide/{id}', [TourGuideController::class, 'show'])->name('tour-guide.show');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
