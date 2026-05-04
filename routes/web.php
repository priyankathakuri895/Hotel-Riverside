<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

Route::view('/', 'frontend.home')->name('home');

Route::view('/about', 'frontend.about')->name('about');

Route::view('/packages', 'frontend.packages')->name('packages');

Route::view('/facilities', 'frontend.facilities')->name('facilities');

/*
|--------------------------------------------------------------------------
| BOOKING ROUTE (CUSTOMER LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Booking Page
    Route::view('/booking', 'frontend.booking')->name('booking');
    // Store Booking
    Route::post('/booking',
        [BookingController::class, 'store'])
        ->name('booking.store');

    // My Bookings
    Route::get('/my-bookings',
        [BookingController::class, 'myBookings'])
        ->name('my.bookings');

    // Cancel Booking
    Route::delete('/booking/cancel/{id}',
        [BookingController::class, 'cancel'])
        ->name('booking.cancel');
    
    // Delete Booking (Admin)
    Route::delete('/booking/{id}',
    [AdminController::class, 'delete'])
    ->name('admin.booking.delete');

});

/*
|--------------------------------------------------------------------------
| DASHBOARD (Laravel Breeze)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

 /*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

    // Dashboard
    Route::get('/dashboard',
        [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    // Bookings Page
    Route::get('/bookings',
        [AdminController::class, 'bookings'])
        ->name('admin.bookings');

    // Approve Booking
    Route::post('/booking/{id}/approve',
        [AdminController::class, 'approve'])
        ->name('admin.booking.approve');

    // Reject Booking
    Route::post('/booking/{id}/reject',
        [AdminController::class, 'reject'])
        ->name('admin.booking.reject');

    // Delete Booking
    Route::delete('/booking/{id}',
        [AdminController::class, 'delete'])
        ->name('admin.booking.delete');

    // Packages CRUD
    Route::resource('packages', PackageController::class);

    // Facilities CRUD
    Route::resource('facilities', FacilityController::class);

    // Rooms CRUD
    Route::resource('rooms', RoomController::class);

});
/*
|--------------------------------------------------------------------------
| PROFILE ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile',
        [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile',
        [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile',
        [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';