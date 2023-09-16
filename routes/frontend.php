<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSiteController;

Route::middleware('web')->group(function () {
    Route::get('/', [ClientSiteController::class, 'index'])->name('home');

    Route::get('/products', [ClientSiteController::class, 'products'])->name('products');

    Route::get('/products/{product}', [ClientSiteController::class, 'productDetail'])->name('products.detail');

    Route::get('/checkout', [ClientSiteController::class, 'checkoutPage'])->name('checkout');

    Route::post('/checkout', [ClientSiteController::class, 'checkout'])->name('checkout');

    Route::get('/blogs', [ClientSiteController::class, 'posts'])->name('blogs');

    Route::get('/blogs/{post:slug}', [ClientSiteController::class, 'postDetail'])->name('blogs.detail');

    Route::get('/sign-in', function () {
        return view('user.auth.sign-in');
    })->name('sign-in');

    Route::get('/sign-up', function () {
        return view('user.auth.sign-up');
    })->name('sign-up');
});
