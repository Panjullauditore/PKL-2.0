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

// routes/web.php
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])
    ->name('dashboard');

// Public routes
route::get('/{category}', [PlacesController::class, 'index'])->name('places.index');
route::get('/places/{id}', [PlacesController::class, 'show'])->name('places.show');
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
    $projects = [
        'Hotel' => 15,
        'Culinary' => 21,
        'Shopping' => 11,
        'Entertainment' => 17,
        'Tourist Attraction' => 13,
        'Tour Guide' => 19
    ];
    
    $projectTypes = array_keys($projects);
    
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


// Admin Routes
Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');

    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

    Route::prefix('admin')->group(function () {
        Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
        Route::post('/projects', [ProjectController::class, 'store'])->name('admin.projects.store');  // Pastikan route POST ada
        Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
    });

    Route::middleware(['auth'])->prefix('admin')->group(function () {
        Route::get('/places/add', [AdminController::class, 'addPlace'])->name('admin.places.add');
        Route::post('/places', [AdminController::class, 'store'])->name('admin.store');
    });
    
    //Testing Review
    Route::post('/hotels/{hotelId}/reviews', [HotelController::class, 'storeReview'])
     ->name('hotel.review.store');

    Route::get('/entertainment/{entertainmentId}/reviews', [EntertainmentController::class, 'storeReview'])
     ->name('entertainment.review.store');

    Route::get('/culinary/{culinarytId}/reviews', [CulinaryController::class, 'storeReview'])
     ->name('culinary.review.store');

    Route::get('/shopping/{shoppingId}/reviews', [ShoppingController::class, 'storeReview'])
     ->name('shopping.review.store');

    Route::get('/tour-guide/{guideId}/reviews', [TourGuideController::class, 'storeReview'])
     ->name('tour-guide.review.store'); 

    Route::post('/tourist-attraction/{placeId}/review', [TouristAttractionController::class, 'storeReview'])
     ->name('tourist-attraction.review.store');


require __DIR__.'/auth.php';
