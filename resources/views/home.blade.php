@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    {{ __('You are logged in!') }}
                    <br>
                    <a href="{{ url('/profile') }}" class="mt-3 btn btn-danger">Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
