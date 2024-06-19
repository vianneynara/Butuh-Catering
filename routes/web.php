<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Auth;

Route::get('/',function() {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Shop routes

Route::middleware('auth')->group(function () {
    Route::get('/shops/create', [ShopController::class, 'create'])->name('shop.create');
    Route::post('/shops', [ShopController::class, 'store'])->name('shop.store');
    Route::get('/shops/{shopId}/edit', [ShopController::class, 'edit'])->name('shop.edit');
    Route::patch('/shops/{shopId}', [ShopController::class, 'update'])->name('shop.update');
    Route::delete('/shops/{shopId}', [ShopController::class, 'destroy'])->name('shop.destroy');
});

Route::get('/shops/{shopId}', [ShopController::class, 'show'])->name('shop.show');

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
Route::get('/register', [RegisterController::class, 'create'])->name('register');
