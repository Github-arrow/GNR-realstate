<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeGNRController;
use App\Http\Controllers\HouseListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeGNRController::class, 'welcome'])->name('welcome');

// Route::get('/HouseListing', [HouseListingController::class, 'index'])->name('HouseListing.index');
// Route::get('/HouseListing/create', [HouseListingController::class, 'create'])->name('HouseListing.create');
// Route::post('/HouseListing', [HouseListingController::class, 'store'])->name('HouseListing.store');
// Route::get('/HouseListing/{id}', [HouseListingController::class, 'show'])->name('HouseListing.show');
// Route::get('/HouseListing/{id}/edit', [HouseListingController::class, 'edit'])->name('HouseListing.edit');
// Route::put('/HouseListing/{id}', [HouseListingController::class, 'update'])->name('HouseListing.update');
// Route::delete('/HouseListing/{id}', [HouseListingController::class, 'destroy'])->name('HouseListing.destroy');

Route::resource('HouseListing', HouseListingController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';