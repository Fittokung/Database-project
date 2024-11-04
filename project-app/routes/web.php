<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiaryEntryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderCartController;



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
    Route::get('/profile/bio', [UserController::class, 'showBio'])->name('profile.show-bio');

    Route::resource('orders', OrderController::class);
    Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');

    Route::get('/order', function () {
        return view('order');
    })->name('order');

    Route::post('order/add', [OrderCartController::class, 'add'])->name('order.add');
    Route::get('/order', [OrderCartController::class, 'showOrderPage'])->name('order.page');

    // Route to handle updating the bio
    Route::patch('/profile/bio', [UserController::class, 'updateBio'])->name('profile.update-bio');
    Route::middleware('auth')->group(function () {
        Route::resource('diary', DiaryEntryController::class); //add this
    });
    Route::post('/profile/photo/update', [UserController::class, 'updateProfilePhoto'])->name('profile.photo.update');
});

require __DIR__ . '/auth.php';
