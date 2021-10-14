<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
Route::group(['middleware' => ['web']], function () {
    // Halaman Utama
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkRole:Admin,Kasir');
    // Halaman Utama

    Route::resource('/user', UserController::class)->middleware('checkRole:Admin');
    Route::resource('/master-barang', MbarangController::class)->middleware('checkRole:Admin,Kasir');
    Route::resource('/dashboard', DashboardController::class)->only(['index'])->middleware('checkRole:Admin');
    Route::resource('/profile', ProfileController::class)->only(['index', 'update', 'show'])->middleware('checkRole:Admin,Kasir');



    //Cari Fitur
    Route::get('/user-cari', [UserController::class, 'cari'])->name('user-cari')->middleware('checkRole:Admin');
    Route::get('/barang-cari', [App\Http\Controllers\MbarangController::class, 'cari'])->middleware('checkRole:Admin');
    //Cari Fitur

    //Transaksi
    Route::resource('/transaksi-pembelian', TpembelianController::class)->middleware('checkRole:Admin,Kasir');
    Route::resource('/transaksi-pembelian-barang', TpembelianbarangController::class)->middleware('checkRole:Admin,Kasir');
    //Transaksi

    // DATA PDF
    Route::get('/pdf-transaksi-pembelian', [TpembelianController::class, 'pdf'])->name('pdf-transaksi-pembelian')->middleware('checkRole:Admin,Kasir');
    Route::get('/pdf-transaksi-pembelian-barang', [TpembelianbarangController::class, 'pdf'])->name('pdf-transaksi-pembelian-barang')->middleware('checkRole:Admin,Kasir');
    // DATA PDF

    // DATA Print
    Route::get('/print-transaksi-pembelian', [TpembelianController::class, 'print'])->name('print-transaksi-pembelian')->middleware('checkRole:Admin,Kasir');
    Route::get('/print-transaksi-pembelian-barang', [TpembelianbarangController::class, 'print'])->name('print-transaksi-pembelian-barang')->middleware('checkRole:Admin,Kasir');
    // DATA Print

    // DATA PDF Detail
    Route::get('/pdf-transaksi-pembelian-detail', [TpembelianController::class, 'pdfdetail'])->name('pdf-transaksi-pembelian-detail')->middleware('checkRole:Admin,Kasir');
    Route::get('/pdf-transaksi-pembelian-barang-detail', [TpembelianbarangController::class, 'pdfdetail'])->name('pdf-transaksi-pembelian-barang-detail')->middleware('checkRole:Admin,Kasir');
    // DATA PDF Detail

    // DATA Print Detail
    Route::get('/print-transaksi-pembelian-detail', [TpembelianController::class, 'printdetail'])->name('print-transaksi-pembelian-detail')->middleware('checkRole:Admin,Kasir');
    Route::get('/print-transaksi-pembelian-barang-detail', [TpembelianbarangController::class, 'printdetail'])->name('print-transaksi-pembelian-barang-detail')->middleware('checkRole:Admin,Kasir');
    // DATA Print Detail

});
// });