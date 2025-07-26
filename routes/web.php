<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::redirect('/', '/home');

Route::prefix('home')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('website.home');
});

Route::prefix('wish-list')->controller(WishListController::class)->group(function () {
    Route::get('/', 'index')->name('website.wish-list');
});

Route::prefix('/')->controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('website.products');
    Route::get('/product', 'show')->name('website.product');
});


Route::prefix('about-us')->controller(AboutController::class)->group(function () {
    Route::get('/', 'index')->name('website.about');
});

Route::prefix('contact-us')->controller(ContactController::class)->group(function () {
    Route::get('/', 'index')->name('website.contact');
});

require __DIR__.'/auth.php';
