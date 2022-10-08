@extends('layouts.plantillalogin')

@section('bodystyle')
register-page
@endsection

@section('boxstyle')
register-box
@endsection

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="{{ route('login') }}" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Registrar un nuevo usuario</p>

        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
            <div class="row input-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>
                
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row input-group mb-3">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="{{ __('Username') }}" required autofocus>

                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row input-group mb-3">
                <select id="usertype_id" aria-label="Default select example" class="form-control @error('usertype_id') is-invalid @enderror" name="usertype_id" required autofocus>
                    <option value="">SELECCIONE</option>
                    @foreach($usertype as $usert)
                        <option value="{{ $usert->id }}" @if(old('usertype_id') == $usert->id) selected @endif>{{ $usert->type }}</option>
                    @endforeach
                </select>

                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-users"></span>
                    </div>
                </div>

                @error('usertype_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autofocus>
            
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

            <div class="row input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            
            <div class="social-auth-links text-center mt-2 mb-3">
                <button type="submit" class="btn btn-block btn-primary"><strong>{{ __('Register') }}</strong></button>
            </div>
        </form>

        <div class="social-auth-links text-center mt-2 mb-3">
            <p class="mb-1">
                <a class="btn btn-link" href="{{ route('login') }}">
                    Ya tengo Usuario Registrado
                </a>
            </p>
        </div>

    </div>
    <!-- /.form-box -->
</div><!-- /.card -->
@endsection