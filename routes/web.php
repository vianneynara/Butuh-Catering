<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
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
    Route::get('/shops/{shop}/edit', [ShopController::class, 'edit'])->name('shop.edit');
    Route::put('/shops/{shop}', [ShopController::class, 'update'])->name('shop.update');
    Route::delete('/shops/{shop}', [ShopController::class, 'destroy'])->name('shop.destroy');

    Route::patch('/shops/{shop}/name', [ShopController::class, 'changeName'])->name('shop.changeName');
    Route::patch('/shops/{shop}/address', [ShopController::class, 'changeAddress'])->name('shop.changeAddress');
    Route::patch('/shops/{shop}/status', [ShopController::class, 'changeStatus'])->name('shop.changeStatus');
});

Route::get('/shops/{shop}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/shops', [ShopController::class, 'index'])->name('shop.index');

// Product routes

Route::middleware('auth')->group(function () {
    Route::get('/shops/{shop}/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/shops/{shop}/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/shops/{shop}/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/shops/{shop}/products/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/shops/{shop}/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::patch('/shops/{shop}/products/{product}/name', [ProductController::class, 'changeName'])->name('product.changeName');
    Route::patch('/shops/{shop}/products/{product}/description', [ProductController::class, 'changeDescription'])->name('product.changeDescription');
    Route::patch('/shops/{shop}/products/{product}/price', [ProductController::class, 'changePrice'])->name('product.changePrice');
    Route::patch('/shops/{shop}/products/{product}/min_order', [ProductController::class, 'changeMinOrder'])->name('product.changeMinOrder');
    Route::patch('/shops/{shop}/products/{product}/max_order', [ProductController::class, 'changeMaxOrder'])->name('product.changeMaxOrder');
    Route::patch('/shops/{shop}/products/{product}/image_url', [ProductController::class, 'changeImageUrl'])->name('product.changeImageUrl');
});

Route::get('/shops/{shop}/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/shops/{shop}/products', [ProductController::class, 'shopProducts'])->name('product.shopProducts');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
Route::get('/register', [RegisterController::class, 'create'])->name('register');
