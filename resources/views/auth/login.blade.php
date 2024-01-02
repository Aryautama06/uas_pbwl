@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background: linear-gradient(to right, #fd79a8, #0984e3);
        color: #ffffff;
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    .form-control {
        border-radius: 5px;
        background: linear-gradient(to right, #ff6b81, #74b9ff);
        color: #ffffff;
        border: 1px solid #ffffff;
    }

    .form-control:focus {
        border-color: #fd79a8;
        box-shadow: 0 0 0 0.2rem rgba(253, 121, 168, 0.25);
    }

    .btn-primary {
        background: linear-gradient(to right, #fd79a8, #0984e3);
        border: none;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, #ff6b81, #74b9ff);
    }

    .form-check-input {
        border-radius: 5px;
    }

    .btn-link {
        color: #000;
    }

    .btn-link:hover {
        text-decoration: underline;
    }
</style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    <img src="{{ asset('donat.png') }}" alt="donat Logo" class="img-fluid mr-2" style="height: 30px;">
                        {{ __('Login') }}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link"
                                        href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection