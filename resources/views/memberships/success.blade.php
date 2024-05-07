@extends('layouts.app')

@vite(['resources/css/login-page.css'])

@section('content')
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

            // Move to a new location or you can do something else
            window.location.href = "/account";

        }, 1500);
    </script>
@endsection
