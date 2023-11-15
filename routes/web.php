<?php


use App\Http\Controllers\authController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TBController;

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


Route::get('/login', [authController::class, 'show'])->name('log');
Route::post('/login', [authController::class, 'login'])->name('valids');

Route::get('/', [TBController::class, 'home'])->name('homes');
Route::get('/produk', [TBController::class, 'product'])->name('prod');
Route::get('/admin', [TBController::class, 'index'])->name('bungas');
Route::get('/admin/tambah', [TBController::class, 'create'])->name('tambah.bunga');
Route::post('/admin', [TBController::class, 'store'])->name('tambah');
Route::get('/admin/{id}/edit', [TBController::class, 'edit'])->name('edit');
Route::post('/admin/{id}', [TBController::class, 'update'])->name('update');
Route::delete('/admin/{id}', [TBController::class, 'destroy'])->name('hapus');
