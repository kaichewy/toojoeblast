<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the API!']);
});

// Route::view('/', 'welcome')

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

require __DIR__.'/auth.php';
=======
Route:: get('/yoyo', function () {
    return 'this is yoyo';
});
>>>>>>> 7ecc652e3c57c479a656f416fe8c5399b32ff067
