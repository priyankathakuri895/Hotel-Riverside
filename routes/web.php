<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

Route::view('/', 'frontend.home')->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/packages', 'frontend.packages')->name('packages');
Route::view('/facilities', 'frontend.facilities')->name('facilities');
Route::view('/booking', 'frontend.booking')->name('booking');
/*
|--------------------------------------------------------------------------
| DASHBOARD (default Breeze)
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

Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Bookings
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');

    // Booking actions
    Route::post('/booking/{id}/approve', [AdminController::class, 'approve'])->name('admin.booking.approve');
    Route::post('/booking/{id}/reject', [AdminController::class, 'reject'])->name('admin.booking.reject');
    Route::delete('/booking/{id}', [AdminController::class, 'delete'])->name('admin.booking.delete');

    // CRUD
    Route::resource('packages', PackageController::class);
    Route::resource('facilities', FacilityController::class);
    Route::resource('rooms', RoomController::class);
});

/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';