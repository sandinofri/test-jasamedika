<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/tambah', [CarController::class, 'create']);
Route::get('/sewa', [CarController::class, 'index']);
Route::post('/tambah', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/search', [CarController::class, 'search'])->name('cars.search');
Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.store');
Route::get('/daftar', [RentalController::class, 'index']);
