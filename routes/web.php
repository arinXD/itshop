<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/my-shop', [WebController::class, 'webPage'])->name("web.myshop");
Route::resource('/product_types', ProductTypeController::class);
Route::get('/product_types_test', [ProductTypeController::class, "index2"]);
Route::get('/products', [ProductController::class, "index"]);

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware('isAdmin');

Route::get('/error', function () {
    return view('error_page');
})->name('error');

require __DIR__ . '/auth.php';
