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
<form action="/transaksi-pembelian-barang/{{ $tpembelianb->id }}" method="POST">
    @csrf
    @method('PUT')
    {{-- <div class="form-group">
        <label for="exampleFormControlSelect1">Nomer Transaksi Barang</label>
        <select class="form-control" id="exampleFormControlSelect1" name="transaksi_pembelian_id" disabled>
            <option>-- Pilih Nomer Transaksi --</option>
            @foreach ($tpembelian as $item)
            @if ($item->id === $tpembelianb->transaksi_pembelian_id )
            <option value="{{ $item->id }}" selected>{{ $item->id }}</option>
    @else
    <option value="{{ $item->id }}">{{ $item->id }}</option>
    @endif
    @endforeach
    @error('transaksi_pembelian_id')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    </select>
    </div> --}}
    <div class="form-group">
        <input type="number" class="form-control" name="transaksi_pembelian_id" id="transaksi_pembelian_id"
            value="{{ $tpembelianb->id }}" placeholder="Masukkan Transaksi Pembelian ID" hidden>
        <label for="exampleFormControlSelect1">Nama Barang</label>
        <select class="form-control" id="exampleFormControlSelect1" name="master_barang_id">
            <option selected>-- Pilih Menu Barang --</option>
            @foreach ($barang as $item)
            @if ($item->id === $tpembelianb->master_barang_id )
            <option value="{{ $item->id }}" selected>{{ $item->nama_barang }} / {{ $item->harga_satuan }}</option>
            @else
            <option value="{{ $item->id }}">{{ $item->nama_barang }} / {{ $item->harga_satuan }}</option>
            @endif
            @endforeach
            @error('master_barang_id')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan Harga Satuan"
            value="{{ $tpembelianb->jumlah }}">
        @error('jumlah')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="harga_satuan">Harga Satuan</label>
        <input type="number" class="form-control" name="harga_satuan" id="harga_satuan"
            placeholder="Masukkan Harga Satuan" value="{{ $tpembelianb->harga_satuan }}">
        @error('harga_satuan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
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
