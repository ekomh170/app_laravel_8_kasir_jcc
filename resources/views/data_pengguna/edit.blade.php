@extends('layouts.master')
@push('style')
<script src="https://cdn.tiny.cloud/1/uf5lkyxtnybuxubv009ys4y6al6h3c4zghyfd2o1lori9hwx/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
@endpush
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Edit Data Pengguna Apps
@endsection
@section('content')
<div class="h2 mb-3 text-center">Edit Data Pengguna Apps</div>
<hr style="width:75%">
<form action="/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" email="email" value="{{$user->email}}" id="email"
            placeholder="Masukkan email" disabled>
        @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}" id="name"
            placeholder="Masukkan name" disabled>
        @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="username">Nama Panggilan</label>
        <input type="text" class="form-control" name="username" value="{{$user->username}}" id="username"
            placeholder="Masukkan Nama Panggilan" disabled>
        @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" class="form-control" name="role" value="{{$user->role}}" id="role"
            placeholder="Masukkan Role" disabled>
        @error('role')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur"
            value="{{ $user->profile->umur }}">
        @error('umur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jenis_kelamin" class="col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
        <div class="col-md-6">
            <div class="form-check">
                @if ($user->profile->jenis_kelamin )
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Pria"
                    checked>
                @else
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Pria">
                @endif
                <label class="form-check-label" for="exampleRadios1">
                    Pria
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="Perempuan">
                <label class="form-check-label" for="exampleRadios2">
                    Perempuan
                </label>
            </div>
            @error('jenis_kelamin')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
            placeholder="Masukkan Harga Satuan" value="{{ $user->profile->tempat_lahir }}">
        @error('tempat_lahir')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir"
            value="{{ $user->profile->tgl_lahir }}">
        @error('tgl_lahir')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="Masukkan Bio">{{$user->bio}}</textarea>
        @error('bio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3"
            placeholder="Masukkan Alamat">{{$user->profile->alamat}}</textarea>

        @error('alamat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="no_telp">Nomor Telepon</label>
        <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon"
            value="{{ $user->profile->no_telp }}">
        @error('no_telp')
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
