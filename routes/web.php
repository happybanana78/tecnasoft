<?php

use App\Http\Controllers\PointController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrxController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main admin page
Route::get('/', function () {
    return view('admin');
})->middleware('auth');

// Admin operations
Route::middleware('auth')->group(function () {
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {

        Route::resource('/users', UserController::class)
            ->only(['index']);  // Users
        Route::resource('/points', PointController::class)
            ->only(['index', 'show']);  // Points
        Route::resource('/services', ServiceController::class)
            ->only(['index', 'edit']);  // Services
        Route::resource('/transactions', TrxController::class)
            ->only(['index']);  // Transtaction history
    });
});

// Laravel breeze routes
Route::get('/dashboard', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
