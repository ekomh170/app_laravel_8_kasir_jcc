@extends('layouts.master')
@push('style')
<script src="https://cdn.tiny.cloud/1/uf5lkyxtnybuxubv009ys4y6al6h3c4zghyfd2o1lori9hwx/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
@endpush
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Mencatat Data Transaksi Pembelian Barang
@endsection
@section('content')
<div class="h2 mb-3 text-center">Mencatat Data Transaksi Pembelian Barang</div>
<hr style="width:75%">
<form action="/transaksi-pembelian-barang" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="dropdown mb-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            ID Transaksi Barang
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach ($tpembelian as $item)
            <a class="dropdown-item" name="{{ $item->id }}">{{ $item->total_harga }}</a>
            @endforeach
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Master Barang
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($barang as $item2)
                <a class="dropdown-item" name="{{ $item2->id }}">{{ $item2->nama_barang }}</a>
                @endforeach
            </div>
        </div>
        @error('nama_barang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan Harga Satuan">
        @error('jumlah')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="harga_satuan">Harga Satuan</label>
        <input type="number" class="form-control" name="harga_satuan" id="harga_satuan"
            placeholder="Masukkan Harga Satuan">
        @error('harga_satuan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="{{ url('transaksi-pembelian-barang') }}" class="btn btn-danger">Kembali</a>
</form>
@push('scripts')
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
</script>
@endpush
@endsection
