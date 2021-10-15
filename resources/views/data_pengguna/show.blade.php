@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Detail Data Pengguna Apps
@endsection
@section('content')
<div class="h2 mb-3 text-center">Detail Data Pengguna Apps</div>
<hr style="width:75%">

<div class="h2 mb-3 text-center">Data Profile</div>
<hr style="width:75%">

<div class="card mb-4">
    <div class="card-header">
        Detail Profile yang Sedang Login
    </div>
    <div class="card-body text-center">
        <img class="img-profile rounded-circle mb-3"
            src="{{ asset('/img') }}/img_storage/profile/{{ $user->profile->profile_foto }}" width="300px"
            height="300px" alt="User profile picture">
        <h4 class="card-text"><b>Nama Profile</b> : {{ $user->profile->user->name }}</h4>
        <h4 class="card-text"><b>Role</b> : {{ $user->role }}</h4>
        <hr style="width:75%">
        <h5 class="card-text text-left"><b>Nama Panggilan</b> : {{ $user->username }}</h5>
        <h5 class="card-text text-left"><b>Email</b> : {{ $user->email }}</h5>
        <h5 class="card-text text-left"><b>Umur</b> : {{ $user->profile->umur }}</h5>
        <h5 class="card-text text-left"><b>Tempat dan Tanggal Lahir</b> : {{ $user->profile->tempat_lahir }},
            {{ $user->profile->tgl_lahir }}</h5>
        <h5 class="card-text text-left"><b>Jenis Kelamin</b> : {{ $user->profile->jenis_kelamin }}</h5>
        <h5 class="card-text text-left"><b>Bio</b> : {!! $user->profile->bio !!}</h5>
        <h5 class="card-text text-left"><b>Alamat</b> : {!! $user->profile->alamat !!}</h5>
        <h5 class="card-text text-left"><b>Alamat</b> : {{ $user->profile->no_telp }}</h5>
        <h5 class="card-text text-left"><b>Akun Dibuat</b> : {{ $user->created_at }}</h5>
        <h5 class="card-text text-left"><b>Akun Diupdate</b> : {{ $user->updated_at }}</h5>
        <hr style="width:75%">
        <a href="{{ $user->profile->user_id }}/edit" class="btn btn-outline-dark">Ubah Akun Pengguna
            Apps</a>
        <a href="{{ url('user') }}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection
