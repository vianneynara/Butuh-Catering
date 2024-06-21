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

// Guest routes

Route::get('/mt', function () {
    return view('./error/maintenance');
})->name('maintenance');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

// Shop routes

Route::get('/shops', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shops/create', [ShopController::class, 'create'])->name('shop.create');
Route::post('/shops/new', [ShopController::class, 'store'])->name('shop.store');
Route::get('/shops/{shop}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/shops/{shop}/products', [ProductController::class, 'shopProducts'])->name('product.shopProducts');

// Product routes

Route::get('/shops/{shop}/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/shops/{shop}/products/new', [ProductController::class, 'store'])->name('product.store');
Route::get('/shops/{shop}/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/shops/{shop}/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/shops/{shop}/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::patch('/products/{product}/name', [ProductController::class, 'changeName']);
Route::patch('/products/{product}/description', [ProductController::class, 'changeDescription']);
Route::patch('/products/{product}/price', [ProductController::class, 'changePrice']);
Route::patch('/products/{product}/min_order', [ProductController::class, 'changeMinOrder']);
Route::patch('/products/{product}/max_order', [ProductController::class, 'changeMaxOrder']);
Route::patch('/products/{product}/image_url', [ProductController::class, 'changeImageUrl']);

Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');

// Cart Item routes

Route::get('/cart', [CartItemController::class, 'index'])->name('cartItem.index');
Route::get('/cart/form/{productId}', [CartItemController::class, 'create'])->name('cartItem.create');
Route::post('/cart/{productId}/{quantity}', [CartItemController::class, 'store'])->name('cartItem.store');
Route::delete('/cart/{cartItem}', [CartItemController::class, 'destroy'])->name('cartItem.destroy');

Route::patch('/cart/{cartItem}/{quantity}', [CartItemController::class, 'changeQuantity'])->name('cartItem.changeQuantity');
Route::get('/cart/{cartItem)/quantity', [CartItemController::class, 'getQuantity'])->name('cartItem.getQuantity');

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::post('logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// API routes

Route::get('/api/shops', [ShopController::class, 'getAllShops']);
Route::get('/api/shops/{shop}', [ShopController::class, 'getShop']);
Route::get('/api/products', [ProductController::class, 'getAllProducts']);
Route::get('/api/products/{product}', [ProductController::class, 'getProduct']);
