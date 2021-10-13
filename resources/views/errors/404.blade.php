@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Kesalahan Dalam Pages Halaman
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        @auth
        <p class="text-gray-500 mb-0">Halaman Tidak Ada Kembali Kehalaman Profile Dengan klik link dibawah</p>
        <a href="{{ url('/profile') }}">&larr; Back to Profile</a>
        @endauth
        @guest
        <p class="text-gray-500 mb-0">Kembali Kehalaman Utama Dengan klik link dibawah dan Lakukan Daftar dan Lalu Login</p>
        <a href="{{ url('/') }}">&larr; Back to Halaman Utama</a>
        @endguest
    </div>

</div>
<!-- /.container-fluid -->
@endsection
