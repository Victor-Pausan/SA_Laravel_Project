<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/login-page.css'])
</head>

<body>
    <div id="app">
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5 text-black">

                        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                            <form method="POST" action="{{ route('register') }}" style="width: 23rem;">
                                @csrf
                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h3>

                                <div class="name form-floating mb-3">
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                        <div id="name-error" class="error-message">{{ $message }}</div>
                                    @enderror

                                    <label for="name" id="email-label">Name:</label>
                                </div>

                                <div class="email form-floating mb-3">
                                    <input type="text" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" autocomplete="email">
                                    @error('email')
                                        <div id="email-error" class="error-message">{{ $message }}</div>
                                    @enderror

                                    <label for="email" id="email-label">Email Address:</label>
                                </div>

                                <div class="password form-floating mb-3">
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        autocomplete="current-password">
                                    @error('password')
                                        <div id="password-error" class="error-message">{{ $message }}</div>
                                    @enderror

                                    <label for="email" id="email-label">Password</label>
                                </div>

                                <div class="password-confirm form-floating mb-3">
                                    <input type="password" id="password-confirm" name="password_confirmation"
                                        class="form-control"
                                        autocomplete="new-password">
                                    <label for="password-confirm" id="email-label">Confirm Password</label>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                                </div>

                                <p>Already have an account? <a href="{{ route('login') }}" class="link-info">Log In here</a></p>

                            </form>
                        </div>
                    </div>
                    <div class="col-sm-7 px-0 d-none d-sm-block">
                        <img src="{{ asset('storage/images/section-pic-medium.png') }}" alt="Login image"
                            class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
{{-- @extends('layouts/app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
