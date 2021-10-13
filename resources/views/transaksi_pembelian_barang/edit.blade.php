@extends('layouts.master')
@push('style')
<script src="https://cdn.tiny.cloud/1/uf5lkyxtnybuxubv009ys4y6al6h3c4zghyfd2o1lori9hwx/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
@endpush
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Edit Data Transaksi Pembelian Barang
@endsection
@section('content')
<div class="h2 mb-3 text-center">Edit Data Transaksi Pembelian Barang</div>
<hr style="width:75%">
<form action="/transaksi-pembelian-barang/{{ $barang->id }}\" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Data Barang
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">-- Pilih Data Barang --</a></li>
            </ul>
        </div>
        @error('nama_barang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Data Transaksi Pembelian
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">-- Pilih Data Transaksi Pembelian --</a></li>
            </ul>
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
    <button type="submit" class="btn btn-primary">Edit</button>
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
