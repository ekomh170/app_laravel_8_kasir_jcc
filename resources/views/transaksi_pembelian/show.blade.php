@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Detail Lengkap Transaksi Pembelian
@endsection
@section('content')
<div class="h2 mb-3 text-center">Detail Lengkap Transaksi Pembelian</div>
<hr style="width:75%">
<div class="card mb-4">
    <div class="card-header">
        Detail Profile yang Sedang Login
    </div>
    <div class="card-body">
        <h4 class="card-text"><b>ID Transaksi Pembelian</b> : {{ $tpembelian->id }}</h4>
        <h4 class="card-text"><b>Total Harga</b> : {{ $tpembelian->total_harga }}</h4>
    </div>
</div>
@endsection
