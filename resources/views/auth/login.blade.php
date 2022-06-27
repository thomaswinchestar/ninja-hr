@extends('layouts.app_plain')
@section('title','Login')
@section('extra_css')
    <style>

    </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Login</h5>
                    <p class="text-muted">Please fill the login form.</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                            <label for="email" class="form-label">Email Address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            <label for="password" class="form-label">Password</label>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Remember
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                {{ __('Login') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
