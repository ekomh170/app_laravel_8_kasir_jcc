@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Data Profile
@endsection
@section('content')
<div class="h2 mb-3 text-center">Data Profile</div>
<hr style="width:75%">

<div class="card mb-4">
    <div class="card-header">
        Detail Profile yang Sedang Login
    </div>
    <div class="card-body text-center">
        <img class="img-profile rounded-circle mb-3"
            src="{{ asset('/img') }}/img_storage/profile/{{ $profile->profile_foto }}" width="300px" height="300px"
            alt="User profile picture">
        <h4 class="card-text"><b>Nama Profile</b> : {{ $profile->user->name }}</h4>
        <h4 class="card-text"><b>Role</b> : {{ $profile->user->role }}</h4>
        <hr style="width:75%">
        <h5 class="card-text text-left"><b>Nama Panggilan</b> : {{ $profile->user->username }}</h5>
        <h5 class="card-text text-left"><b>Email</b> : {{ $profile->user->email }}</h5>
        <h5 class="card-text text-left"><b>Umur</b> : {{ $profile->umur }}</h5>
        <h5 class="card-text text-left"><b>Tempat dan Tanggal Lahir</b> : {{ $profile->tempat_lahir }},
            {{ $profile->tgl_lahir }}</h5>
        <h5 class="card-text text-left"><b>Jenis Kelamin</b> : {{ $profile->jenis_kelamin }}</h5>
        <h5 class="card-text text-left"><b>Bio</b> : {!! $profile->bio !!}</h5>
        <h5 class="card-text text-left"><b>Alamat</b> : {!! $profile->alamat !!}</h5>
        <h5 class="card-text text-left"><b>Nomor Telepon</b> : {!! $profile->no_telp !!}</h5>
        <h5 class="card-text text-left"><b>Akun Dibuat</b> : {{ $profile->user->created_at }}</h5>
        <h5 class="card-text text-left"><b>Akun Diupdate</b> : {{ $profile->user->updated_at }}</h5>
        <hr style="width:75%">
        <a href="{{ url('profile/show') }}" class="btn btn-outline-dark">Ubah Profile</a>
    </div>
</div>
@endsection