@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Halaman Utama Sesudah Login
@endsection
@section('content')
<div class="h2 mb-3 text-center">Halaman Utama</div>
<hr style="width:75%">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Aplikasi Kasir Sederhana</h6>
    </div>
    <div class="card-body">
        <div class="h2">Project 2 - Aplikasi Kasir (Laravel Project)</div>
        <hr style="width:50%"> Jabar Coding Camp (JCC), Aplikasi Kasir (Laravel Project), Anda diminta untuk membuat
        aplikasi
        kasir sederhana Kelas JCC Partnership - Project Challenge (Tantangan).<br><br>
        <div class="h4"> diminta untuk membuat aplikasi kasir sederhana yang mencakup fitur: </div>
        <ul>
            <li>Mencatat transaksi pembelian barang</li>
            <li>Menampilkan daftar transaksi pembelian barang</li>
            <li>Authentikasi login pengguna</li>
            <li>Pengaturan data pengguna</li>
            <li>Pengaturan data master produk</li>
        </ul>
    </div>
</div>
@endsection
