<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [MarketController::class, 'index'])->name('market');
Route::get('/add/{id}', [MarketController::class, 'create'])->name('market.add');
Route::post('/add/tambah', [MarketController::class, 'store'])->name('market.tambah');

Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');
Route::get('/keranjang/hapus/{id}', [CartController::class, 'destroy'])->name('keranjang.hapus');



Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori');
Route::post('/kategori/tambah', [CategoryController::class, 'store'])->name('kategori.tambah');
Route::get('/kategori/edit/{id}', [CategoryController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [CategoryController::class, 'update'])->name('kategori.update');
Route::get('/kategori/hapus/{id}', [CategoryController::class, 'destroy'])->name('kategori.hapus');

Route::get('/produk', [ProductController::class, 'index'])->name('produk');
Route::post('/produk/tambah', [ProductController::class, 'store'])->name('produk.tambah');
Route::get('/produk/edit/{id}', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');
Route::get('/produk/hapus/{id}', [ProductController::class, 'destroy'])->name('produk.hapus');
