<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LapbasketController;
use App\Http\Controllers\PembayaraanController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;


Route::resource('/customer', CustomersController::class)->middleware('auth');
Route::resource('/kasir', KasirController::class);
Route::resource('/lapbasket', LapbasketController::class);
Route::resource('/penyewaan', PenyewaanController::class);
Route::resource('/pembayaraan', PembayaraanController::class);
Route::resource('/halaman', HalamanController::class);


Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login-post', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', function () {
   return view ('dashboard');
})->name('dashboard')->middleware('auth');




Route::get('/', function () {
    return view('welcome');
});
