<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NavigationController;

// Route::get('/', function () {
//     return view('navigation.asset-content.main');
// });

Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');
Route::get('/', [NavigationController::class, 'main'])->name('app');

// category foreach
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
