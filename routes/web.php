<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perpustakaan;
use App\Http\Controllers\PetugasController;


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

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::resource('/anggota', AnggotaController::class);

Route::resource('/buku', BukuContoller::class);

Route::resource('/petugas', PetugasController::class);

