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

<div class="card mb-4">
    <div class="card-header">
        Detail Data Pengguna Apps
    </div>
    <div class="card-body">
        <img class="profile-user-img img-fluid img-circle"
            src="{{ asset('/img') }}/img_storage/profile/{{ $user->profile->profile_foto }}" width="300px"
            height="300px" alt="User profile picture">
        <h4 class="card-text"><b>ID User</b> : {{ $user->id }}</h4>
        <hr style="width:75%">
        <h6 class="card-text text-left"><b>Nama Lengkap</b> : {{ $user->name }}</h6>
        <h6 class="card-text text-left"><b>Email</b> : {{ $user->email }}</h6>
        <h6 class="card-text text-left"><b>Umur</b> : {{ $user->profile->umur }}</h6>
        <h6 class="card-text text-left"><b>Bio</b> : {{ $user->profile->bio }}</h6>
        <h6 class="card-text text-left"><b>Akun Dibuat</b> : {{ $user->created_at }}</h6>
        <h6 class="card-text text-left"><b>Akun Diupdate</b> : {{ $user->updated_at }}</h6>
        <a href="../profile" class="btn btn-outline-dark">Ubah Profile</a>
    </div>
</div>
<a href="{{ url('user') }}" class="btn btn-danger">Kembali</a>
@endsection
