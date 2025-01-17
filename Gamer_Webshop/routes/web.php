<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::name('products.')->group(function () {
    Route::get('products', [ProductController::class, 'index'])->name('index');
    Route::get('products/create', [ProductController::class, 'create'])->name('create');
    Route::post('products', [ProductController::class, 'store'])->name('store');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('show');
    Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('products/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('destroy');
});


Route::name('categories.')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('create');
    Route::post('categories', [CategoryController::class, 'store'])->name('store');
    Route::get('categories/{category}', [CategoryController::class, 'show'])->name('show');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('destroy');
});


Route::name('orders.')->group(function () {
    Route::get('orders', [OrderController::class, 'index'])->name('index');
    Route::get('orders/create', [OrderController::class, 'create'])->name('create');
    Route::post('orders', [OrderController::class, 'store'])->name('store');
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('show');
    Route::delete('orders/{order}', [OrderController::class, 'destroy'])->name('destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
