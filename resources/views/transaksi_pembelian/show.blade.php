@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang
@endsection
@section('content')

<div class="h2 mb-3 text-center">Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang</div>
<hr style="width:75%">
<div class="card mb-4">

    <div class="card-header">
        Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang
    </div>

    <div class="card-body">
        <div class="mb-3">
            <a href="{{ url('pdf-transaksi-pembelian-detail') }}/{{ $tpembelian->id }}"><button type="button"
                    class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></button></a>
            <a href="{{ url('print-transaksi-pembelian-detail')}}/{{ $tpembelian->id }}"><button type="button"
                    class="btn btn-outline-warning"><i class="fas fa-print"></i></button></a>
        </div>
        @foreach ($tpembelian->transaksi_pembelian_barang as $item => $key)
        <h4 class="card-text"><b>Transaksi Pembelian {{ $item + 1  }}</b> : </h4>
        <ul>
            <li>
                <h4 class="card-text"><b>Nama Barang</b> : {{ $key->master_barang->nama_barang }}</h4>
            </li>
            <li>
                <h4 class="card-text"><b>Harga Satuan</b> : {{ $key->harga_satuan }}</h4>
            </li>
            <li>
                <h4 class="card-text"><b>Jumlah Barang</b> : {{ $key->jumlah }}</h4>
            </li>
            <li>
                <h4 class="card-text"><b>Jumlah Barang</b> : {{ $key->harga_satuan * $key->jumlah}}</h4>
            </li>
        </ul>
        @endforeach
        <h4><b>Total Harga : </b>{{ $tpembelian->total_harga }}</h4>
        <h4 class="card-text">
        </h4>
    </div>
</div>
<a href="{{ url('transaksi-pembelian') }}" class="btn btn-danger">Kembali</a>@endsection
