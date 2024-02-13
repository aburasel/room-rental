<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

//Auth::routes();
Route::middleware(['auth','verified'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('admin.dashboard');
    });
    Route::middleware(['rental-owner'])->group(function () {
        Route::get('/rental-owner/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('rental_owner.dashboard');
    });
    Route::middleware(['user'])->group(function () {
        //Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');
    });
});


require __DIR__ . '/auth.php';

