<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sign-in', function() {
   return view('user.auth.sign-in');
})->name('sign-in');

Route::get('/sign-up', function() {
    return view('user.auth.sign-up');
})->name('sign-up');

Route::get('/product-detail', function() {
    return view('user.product-detail');
})->name('product-detail');

Route::get('/checkout', function() {
    return view('user.checkout');
})->name('checkout');

Route::get('/blogs', function() {
    return view('user.blogs');
})->name('blogs');

Route::get('/blogs/{id?}', function() {
    return view('user.blog-detail');
})->name('blog-detail');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::resource('orders', \App\Http\Controllers\OrderController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
});

require __DIR__.'/auth.php';
