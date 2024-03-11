<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\ProdukController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk', [ProdukController::class, 'tambah_action']);
Route::get('/konsumen', [KonsumenController::class, 'index']);
Route::get('/konsumen/tambah', [KonsumenController::class, 'tambah']);
Route::post('/konsumen/tambah', [KonsumenController::class, 'tambah_action']);

Route::get('/konsumen/{id}/apikey', [KonsumenController::class, 'updateStatus']);
