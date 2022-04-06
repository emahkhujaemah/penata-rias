<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortofolioController;


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
Auth::routes();

Route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('pengunjung.home');
// });

Route::get('/artist', function () {
    return view('pengunjung.artist');
});

Route::get('/p_portofolio', function () {
    return view('pengunjung.portofolio');
});

Route::get('/p_lokasi', function () {
    return view('pengunjung.lokasi');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard']);
    Route::resource('/profile', ProfileController::class);
    Route::resource('/portofolio', PortofolioController::class);
});

