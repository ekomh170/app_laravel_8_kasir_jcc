@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Lupa Password</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Email Address..." value="{{ old('email') }}"
                                                required autocomplete="email" autofocus>
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Masukan Password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <a href="#" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="#" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                    <hr>
                                    @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">Lupa Password?</a>
                                    </div>
                                    @endif
                                    <div class="text-center">
                                        <a class="small" href="{{ url('register') }}">Daftar Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
{{--
<div>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign In</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
@csrf
<div class="form-group">
    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
        aria-describedby="emailHelp" placeholder="Masukan Email Address..." value="{{ old('email') }}" required
        autocomplete="email" autofocus>
</div>
@error('email')
<div class="alert alert-danger" role="alert">
    <strong>{{ $message }}</strong>
</div>
@enderror
<div class="form-group">
    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
        placeholder="Masukan Password" required autocomplete="current-password">
</div>
@error('password')
<div class="alert alert-danger" role="alert">
    <strong>{{ $message }}</strong>
</div>
@enderror
<button type="submit" class="btn btn-primary btn-user btn-block">
    Login
</button>
</form>
<hr>
<a href="#" class="btn btn-google btn-user btn-block">
    <i class="fab fa-google fa-fw"></i> Login with Google
</a>
<a href="#" class="btn btn-facebook btn-user btn-block">
    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
</a>
<hr>
@if (Route::has('password.request'))
<div class="text-center">
    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
</div>
@endif
<div class="text-center">
    <a class="small" href="{{ route('password.request') }}">Create an Account!</a>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

</div>
</div> --}}

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}
</div>

<div class="card-body">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
@endsection
