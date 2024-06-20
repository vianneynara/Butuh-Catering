<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\CartItemController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
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

Route::get('/shops', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shops/create', [ShopController::class, 'create'])->name('shop.create');
Route::post('/shops', [ShopController::class, 'store'])->name('shop.store');
Route::get('/shops/{shop}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/shops/{shop}/products', [ProductController::class, 'shopProducts'])->name('product.shopProducts');

// Product routes

Route::get('/shops/{shop}/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/shops/{shop}/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/shops/{shop}/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/shops/{shop}/products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/shops/{shop}/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::patch('/shops/{shop}/{product}/name', [ProductController::class, 'changeName'])->name('product.changeName');
Route::patch('/shops/{shop}/{product}/description', [ProductController::class, 'changeDescription'])->name('product.changeDescription');
Route::patch('/shops/{shop}/{product}/price', [ProductController::class, 'changePrice'])->name('product.changePrice');
Route::patch('/shops/{shop}/{product}/min_order', [ProductController::class, 'changeMinOrder'])->name('product.changeMinOrder');
Route::patch('/shops/{shop}/{product}/max_order', [ProductController::class, 'changeMaxOrder'])->name('product.changeMaxOrder');
Route::patch('/shops/{shop}/{product}/image_url', [ProductController::class, 'changeImageUrl'])->name('product.changeImageUrl');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');

// Cart Item routes

Route::get('/cart', [CartItemController::class, 'index'])->name('cartItem.index');
Route::get('/cart/form/{productId}', [CartItemController::class, 'create'])->name('cartItem.create');
Route::post('/cart/{productId}/{quantity}', [CartItemController::class, 'store'])->name('cartItem.store');
Route::delete('/cart/{cartItem}', [CartItemController::class, 'destroy'])->name('cartItem.destroy');

Route::patch('/cart/{cartItem}/{quantity}', [CartItemController::class, 'changeQuantity'])->name('cartItem.changeQuantity');
Route::get('/cart/{cartItem)/quantity', [CartItemController::class, 'getQuantity'])->name('cartItem.getQuantity');

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])
        ->name('logout');
});

Route::get('/admin', [HomeController::class, 'indexAdmin'])->name('admin');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
