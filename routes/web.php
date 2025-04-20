<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleRedirectController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PublicsController;

// 🌐 PUBLIC ROUTES (no login needed)
Route::get('/', [PublicsController::class, 'home'])->name('home');
Route::get('/publics-sectors', [PublicsController::class, 'sectors'])->name('publics.sectors');
Route::get('/publics-events', [PublicsController::class, 'events'])->name('publics.events');
Route::get('/events/{id}', [PublicsController::class, 'eventDetails'])->name('publics.event.details');

// 🔐 DEFAULT DASHBOARD (optional)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 🔐 PROFILE MANAGEMENT
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🔄 Role Redirect
    Route::get('/redirect', [RoleRedirectController::class, 'redirect']);
});

// 🎯 ROLE-BASED ROUTES

// Donor
Route::middleware(['auth', 'role:donor'])->group(function () {
    Route::view('/donor/dashboard', 'dashboards.donor');
    Route::resource('/donations', DonationController::class);
});

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin/dashboard', 'dashboards.admin');
    Route::resource('/sectors', SectorController::class);
});

// Coordinator
Route::middleware(['auth', 'role:coordinator'])->group(function () {
    Route::view('/coordinator/dashboard', 'dashboards.coordinator');
    Route::resource('/events', EventController::class);
});

// Accountant
Route::middleware(['auth', 'role:accountant'])->group(function () {
    Route::view('/accountant/dashboard', 'dashboards.accountant');
    Route::get('/donations', [DonationController::class, 'index']);
});

// Top Management
Route::middleware(['auth', 'role:top'])->group(function () {
    Route::view('/top/dashboard', 'dashboards.top');
});

require __DIR__.'/auth.php';
