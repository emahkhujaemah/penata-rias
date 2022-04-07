<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\LokasiController;


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
Route::get('/', function () {
    return view('pengunjung.home');
});

Route::get('/artist', function () {
    return view('pengunjung.artist');
});

Route::get('/p_portofolio', function () {
    return view('pengunjung.portofolio');
});

Route::get('/p_lokasi', function () {
    return view('pengunjung.lokasi');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/profile', ProfileController::class);
    Route::resource('/portofolio', PortofolioController::class);
    Route::resource('/lokasi', LokasiController::class);
    // Route::resource('/range-harga', PortofolioController::class);
});

