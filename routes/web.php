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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\AddPlacesController;
use App\Http\Controllers\UserMonitoringController;
use App\Http\Controllers\AddCulinaryController;
use App\Http\Controllers\AddPopularController;

// routes/web.php
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])
    ->name('dashboard');

// Public routes
route::get('/category/{category}', [PlacesController::class, 'index'])->name('places.index');
route::get('/places/{id}', [PlacesController::class, 'show'])->name('places.show');
Route::get('/tour-guide', [TourGuideController::class, 'index'])->name('tour-guide.index');
Route::get('/tour-guide/{id}', [TourGuideController::class, 'show'])->name('tour-guide.show');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.userProfile');
    
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('admin');  
    
});

// Testing Root
Route::get('/dashboard', function () {
    
    return view('dashboard', compact('projects', 'projectTypes'));
})->middleware(['auth'])->name('dashboard');

Route::get('/places', function () {
    return view('places');
})->middleware(['auth'])->name('places');

Route::get('/culinaries', function () {
    return view('culinaries');
})->middleware(['auth'])->name('culinaries');

Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

Route::post('/profile/photo', [ProfileController::class, 'updatePhoto'])
    ->name('profile.photo.update')
    ->middleware('auth');

Route::post('/places/{id}/reviews', [PlacesController::class, 'storeReview'])
    ->name('review.store');

Route::get('/tour-guide/{guideId}/reviews', [TourGuideController::class, 'storeReview'])
    ->name('tour-guide.review.store'); 

Route::get('/addwishlist/{id}', [PlacesController::class, 'addWishlist'])->name('addwishlist.store');
Route::get('/removewishlist/{id}', [PlacesController::class, 'removeWishlist'])->name('removewishlist.store');
Route::get('/addfavorite/{id}', [PlacesController::class, 'addFavorite'])->name('addfavorite.store');
Route::get('/removefavorite/{id}', [PlacesController::class, 'removeFavorite'])->name('removefavorite.store');

// Admin Routes
Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');

    
 
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
        Route::post('/projects', [ProjectController::class, 'store'])->name('admin.projects.store');  // Pastikan route POST ada
        Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
    });

    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::get('/places/add', [AdminController::class, 'addPlace'])->name('admin.places.add');
        Route::post('/places', [AdminController::class, 'store'])->name('admin.store');
    });

    

    

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin/usermonitoring', [UserMonitoringController::class, 'index'])->name('admin.usermonitoring.index');
        Route::get('/profile/monitoring/{id}', [userMonitoringController::class, 'monitoring'])->name('profile.monitoring');
        Route::get('/admin/addplaces', [AddPlacesController::class, 'index'])->name('addplaces.index');
        Route::post('/admin/addplaces', [AddPlacesController::class, 'store'])->name('addplaces.store');
        Route::delete('/admin/places/{place}', [AddPlacesController::class, 'destroy'])->name('places.destroy');
        Route::post('/admin/places/{place}', [AddPlacesController::class, 'update'])->name('places.update');
        Route::get('/admin/places/{place}/edit', [AddPlacesController::class, 'edit'])->name('places.edit');
        Route::post('/admin/additem/{place}', [AddPlacesController::class, 'additems'])->name('places.additems');
         
        Route::get('/admin/addculinary', [AddCulinaryController::class, 'index'])->name('addculinary.index');
        Route::post('/admin/addculinary', [AddCulinaryController::class, 'store'])->name('addculinary.store');
        Route::get('addculinary/edit/{id}', [AddCulinaryController::class, 'edit'])->name('addculinary.edit');
        Route::post('addculinary/update/{id}', [AddCulinaryController::class, 'update'])->name('addculinary.update');
        Route::delete('addculinary/delete/{id}', [AddCulinaryController::class, 'destroy'])->name('addculinary.destroy');
        Route::get('/admin/addpopular/{id}', [AddPopularController::class, 'store'])->name('addpopular.store');
        Route::get('/admin/removepopular/{id}', [AddPopularController::class, 'remove'])->name('addpopular.remove');
    });



     
     
require __DIR__.'/auth.php';
