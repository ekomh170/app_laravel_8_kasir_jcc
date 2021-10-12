@extends('layouts.master')
@push('style')
<script src="https://cdn.tiny.cloud/1/uf5lkyxtnybuxubv009ys4y6al6h3c4zghyfd2o1lori9hwx/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
@endpush
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Tambah Data Barang
@endsection
@section('content')
<div class="h2 mb-3 text-center">Tambah Data Barang</div>
<hr style="width:75%">
<form action="/film" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="ringkasan">Ringkasan</label>
        <textarea class="form-control" name="ringkasan" id="ringkasan" name="ringkasan" rows="3"
            placeholder="Masukkan Ringkasan"></textarea>
        @error('ringkasan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun">
        @error('tahun')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="poster">Poster Film</label>
        <input type="file" class="form-control-file" id="poster" name="poster">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
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
