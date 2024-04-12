<?php

use App\Http\Controllers\DealerController;
use App\Models\Dealer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute ini
| dimuat oleh RouteServiceProvider dalam sebuah grup yang berisi middleware "web".
| Sekarang buatlah sesuatu yang hebat!
|
*/

// Rute untuk halaman utama
Route::get('/home', function () {
    return view('home');
})->name('home');

// Rute untuk menampilkan daftar dealer


// Rute untuk menampilkan detail dealer berdasarkan jenis
Route::resource('/dealer', DealerController::class);
