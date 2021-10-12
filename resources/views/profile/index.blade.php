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
    <div class="card-body">
        <img class="profile-user-img img-fluid img-circle"
            src="{{ asset('/img') }}/img_storage/profile/{{ $profile->profile_foto }}" width="300px" height="300px"
            alt="User profile picture">
        <h4 class="card-text"><b>ID Profile</b> : {{ $profile->user->id }}</h4>
        <hr style="width:75%">
        <h6 class="card-text text-left"><b>Nama profile</b> : {{ $profile->user->name }}</h6>
        <h6 class="card-text text-left"><b>Email</b> : {{ $profile->user->email }}</h6>
        <h6 class="card-text text-left"><b>Umur</b> : {{ $profile->umur }}</h6>
        <h6 class="card-text text-left"><b>Bio</b> : {{ $profile->bio }}</h6>
        <h6 class="card-text text-left"><b>Akun Dibuat</b> : {{ $profile->user->created_at }}</h6>
        <h6 class="card-text text-left"><b>Akun Diupdate</b> : {{ $profile->user->updated_at }}</h6>
        <a href="../profile" class="btn btn-outline-dark">Ubah Profile</a>
    </div>
</div>
@endsection
