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

                        <div
                            class="d-flex align-items-center justify-content-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                            <h3 class="fw-normal" style="letter-spacing: 1px;">Thank you for getting a membership!</h3>
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
    <script>
        window.setTimeout(function() {
            window.location.href = "/account";
        }, 1500);
    </script>
</body>

</html>
