<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

Route::get('/',function() {
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

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);


Route::middleware(['web'])->group(function () {
    Route::get('/homepage', [HomeController::class, 'index'])->name('home');
    Route::get('/admin', [HomeController::class, 'indexAdmin'])->name('admin');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

});
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');







