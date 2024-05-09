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
                <div class="row d-flex flex-wrap">
                    <div class="col-sm-6 text-black d-flex align-items-center justify-content-center">

                        <div class="d-flex align-items-center justify-content-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                            <form method="POST" action="{{ route('login') }}" style="width: 23rem;">
                                @csrf
                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{__('Log In')}}</h3>

                                <div class="email form-floating mb-3">
                                    <input type="text" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <div id="email-error" class="error-message">{{ $message }}</div>
                                    @enderror

                                    <label for="email" id="email-label">{{__('Email Address')}}:</label>
                                </div>

                                <div class="password form-floating mb-3">
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        autocomplete="current-password">
                                    @error('password')
                                        <div id="password-error" class="error-message">{{ $message }}</div>
                                    @enderror

                                    <label for="email" id="email-label">{{__('Password')}}</label>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">{{__('Login')}}</button>
                                </div>

                                @if (Route::has('password.request'))
                                    <p class="small mb-5 pb-lg-2"><a class="text-muted"
                                            href="{{ route('password.request') }}">{{__('Forgot password?')}}</a></p>
                                @endif

                                <p>Don't have an account? <a href="{{ route('register') }}" class="link-info">{{__('Register here')}}</a></p>

                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img src="{{ asset('storage/images/section-pic-medium.png') }}" alt="Login image"
                            class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>