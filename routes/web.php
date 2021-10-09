<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MbarangController;
use App\Http\Controllers\TpembelianController;
use App\Http\Controllers\TpembelianbarangController;
use App\Http\Controllers\DashboardController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/user', UserController::class);
Route::resource('/master-barang', MbarangController::class);
Route::resource('/transaksi-pembelian', TpembelianController::class);
Route::resource('/transaksi-pembelian-barang', TpembelianbarangController::class);
Route::resource('/dashboard', DashboardController::class);