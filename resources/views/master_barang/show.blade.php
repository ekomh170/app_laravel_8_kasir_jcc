@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Data Lengkap Barang
@endsection
@section('content')
<div class="h2 mb-3 text-center">Data Lengkap Barang</div>
<hr style="width:75%">
<div class="card mb-4">
    <div class="card-header">
        Detail Data Lengkap Barang
    </div>
    <div class="card-body">
        <div class="mb-3">
            <a href="{{ url('pdf-master-barang-detail') }}/{{ $barang->id }}"><button type="button"
                    class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></button></a>
            <a href="{{ url('print-master-barang-detail')}}/{{ $barang->id }}"><button type="button"
                    class="btn btn-outline-warning"><i class="fas fa-print"></i></button></a>
        </div>
        <h4 class="card-text"><b>ID Barang</b> : {{ $barang->id }}</h4>
        <h4 class="card-text"><b>Nama Barang</b> : {{ $barang->nama_barang }}</h4>
        <h4 class="card-text"><b>Harga Satuan</b> : {{ $barang->harga_satuan }}</h4>
    </div>
</div>
<a href="{{ url('master-barang') }}" class="btn btn-danger">Kembali</a>
@endsection