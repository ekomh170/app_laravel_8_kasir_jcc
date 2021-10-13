@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Detail Lengkap Data Transaksi Pembelian Barang
@endsection
@section('content')
<div class="h2 mb-3 text-center">Detail Lengkap Data Transaksi Pembelian Barang</div>
<hr style="width:75%">
<div class="card mb-4">
    <div class="card-header">
        Detail Lengkap Data Transaksi Pembelian Barang
    </div>
    <div class="card-body">
        <h4 class="card-text"><b>ID Barang</b> : {{ $tpembelianb->id }}</h4>
        <h4 class="card-text"><b>transaksi_pembelian_id</b> : {{ $tpembelianb->transaksi_pembelian_id }}</h4>
        <h4 class="card-text"><b>master_barang_id</b> : {{ $tpembelianb->master_barang_id }}</h4>
        <h4 class="card-text"><b>jumlah</b> : {{ $tpembelianb->jumlah }}</h4>
        <h4 class="card-text"><b>Harga Satuan</b> : {{ $tpembelianb->harga_satuan }}</h4>
    </div>
</div>
@endsection
