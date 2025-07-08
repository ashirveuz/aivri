<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishListController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::prefix('home')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('website.home');
});

Route::prefix('wish-list')->controller(WishListController::class)->group(function () {
    Route::get('/', 'index')->name('website.wish-list');
});
