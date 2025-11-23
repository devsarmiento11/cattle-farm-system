<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'home']);

Route::get('/native',[HomeController::class,'native']);
Route::get('/imported',[HomeController::class,'imported']);
Route::get('/crossbreed',[HomeController::class,'crossbreed']);

Route::get('/checkout/{id}',[HomeController::class,'checkout']);

Route::post('/complete',[HomeController::class,'complete'])->name('complete');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('view_category', [AdminController::class, 'view_category'])->name('admin.dashboard');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('add_category', [AdminController::class, 'add_category'])->name('admin.dashboard');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->name('admin.dashboard');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('update_category/{id}', [AdminController::class, 'update_category'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('add_product', [AdminController::class, 'add_product'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('upload_product', [AdminController::class, 'upload_product'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('view_product', [AdminController::class, 'view_product'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('update_product/{id}', [AdminController::class, 'update_product'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('update_product_confirm/{id}', [AdminController::class, 'update_product_confirm'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('product_search', [AdminController::class, 'product_search'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('view_orders', [AdminController::class, 'view_orders'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::patch('update_order_status/{id}', [AdminController::class, 'update_order_status'])->name('update_order_status');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('delete_order/{id}', [AdminController::class, 'delete_order'])->name('delete_order');
});

