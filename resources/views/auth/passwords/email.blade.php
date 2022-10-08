@extends('layouts.plantillalogin')

@section('bodystyle')
login-page
@endsection

@section('boxstyle')
login-box
@endsection

@section('content')
<!-- /.login-logo -->
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="{{ route('login') }}" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">{{ __('Reset Password') }}</p>

        <form method="POST" action="{{ route('password.email') }}" autocomplete="off" class="row">
            @csrf
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autofocus>

                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="social-auth-links text-center mt-2 mb-3">
                <button type="submit" class="btn btn-block btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>

        </form>
        
        <div class="social-auth-links text-center mt-2 mb-3">
            <p class="mb-0">
                <a class="btn btn-link" href="{{ route('login') }}">
                    Ya tengo Usuario Registrado
                </a>
            </p>
            <p class="mb-0"></p>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
