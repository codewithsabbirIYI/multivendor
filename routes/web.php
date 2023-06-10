<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;

// Admin Controller Here
use App\Http\Controllers\Vendor\VendorController;

// Vendor Controller Here
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified', 'role:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes Here

    // Admin Route With Login
    Route::middleware('auth', 'verified', 'role:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'Index'])->name('admin.dashboard');
    // Admin Log In Route
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    // admin profile Route
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

    // admin social link insert Route
    Route::post('/admin/social/link', [AdminController::class, 'adminSocialLink'])->name('admin.social.link');

    });

    // Admin Route Without Login
    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/admin/registration', [AdminController::class, 'registration'])->name('admin.registration');



// Vendor Routes Here

    // Vendor With LogIn Routes
    Route::middleware('auth', 'verified', 'role:vendor')->group(function () {
        Route::get('/vendor/dashboard', [VendorController::class, 'Index'])->name('vendor.dashboard');

    });
    // Vendor Without LogIn Routes



// User Routes Here

    // User With LogIn Routes

    // User Without LogIn Routes

require __DIR__.'/auth.php';
