<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

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

Route::middleware('auth')->prefix('admin/')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/tags', TagController::class)->except(['create', 'edit', 'show']);

    Route::resource('/posts', PostController::class)->except(['create', 'edit', 'show']);

    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::resource('orders', \App\Http\Controllers\OrderController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
});

require __DIR__.'/auth.php';

require __DIR__.'/frontend.php';
