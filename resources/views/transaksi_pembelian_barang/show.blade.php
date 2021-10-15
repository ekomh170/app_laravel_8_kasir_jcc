@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Detail Data Transaksi Pembelian Barang
@endsection
@section('content')
<div class="h2 mb-3 text-center">Detail Data Transaksi Pembelian Barang</div>
<hr style="width:75%">
<div class="card mb-4">
    <div class="card-header">
        Detail Data Transaksi Pembelian Barang
    </div>
    <div class="card-body">
        <div class="mb-3">
            <a href="{{ url('pdf-transaksi-pembelian-barang-detail') }}/{{ $tpembelianb->id }}"><button type="button"
                    class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></button></a>
            <a href="{{ url('print-transaksi-pembelian-barang-detail')}}/{{ $tpembelianb->id }}"><button type="button"
                    class="btn btn-outline-warning"><i class="fas fa-print"></i></button></a>
        </div>
        <h4 class="card-text"><b>Nomor Daftar Transaksi Pembelian</b> : {{ $tpembelianb->transaksi_pembelian_id }}</h4>
        <h4 class="card-text"><b>Nama Barang</b> : {{ $tpembelianb->master_barang->nama_barang }}</h4>
        <h4 class="card-text"><b>Jumlah</b> : {{ $tpembelianb->jumlah }}</h4>
        <h4 class="card-text"><b>Harga Satuan</b> : {{ $tpembelianb->harga_satuan }}</h4>
        <h4 class="card-text"><b>Harga Total</b> : {{ $tpembelianb->harga_satuan * $tpembelianb->jumlah }}</h4>
        <h4 class="card-text"><b>Harga Dibuat</b> : {{ $tpembelianb->created_at }}</h4>
        <h4 class="card-text"><b>Waktu Diupdate</b> : {{ $tpembelianb->updated_at }}</h4>
    </div>
</div>
<a href="{{ url('transaksi-pembelian-barang') }}" class="btn btn-danger">Kembali</a>
@endsection
