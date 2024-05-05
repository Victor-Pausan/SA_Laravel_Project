@extends('layouts.app')

@vite(['resources/css/login-page.css'])

@section('content')
<div id="app">
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row d-flex flex-wrap">
                <div class="col-sm-6 text-black d-flex align-items-center justify-content-center">

                    <div class="d-flex align-items-center justify-content-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form method="POST" action="{{ route('membership.success') }}" style="width: 23rem;">
                            @csrf
                            <h3 class="fw-normal" style="letter-spacing: 1px;">Get {{$subscription->type}}</h3>
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">For only ${{$subscription->price}}/month</h3>

                            <div class="form-floating mb-3">
                                <select name="location" class="form-select @error('location') is-invalid @enderror" aria-label="Default select example">
                                    @foreach ($locations as $location) 
                                       <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                                @error('location')
                                <div id="location-error" class="error-message">{{$message}}</div>
                                @enderror
                                <label for="location">Location:</label>
                            </div>

                            <input type="hidden" name="subscription" value="{{ $subscription->id }}">

                            <div class="pt-1 mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Go to payment</button>
                            </div>

                            <div class="pt-1">
                                <small class="text-muted">Membership starts on {{ date('M').'-'.date('d').'-'.date('y') }}</small>
                            </div>
                            <div class="pt-1 mb-4">
                                <small class="text-muted">And is available for 30 days.</small>
                            </div>
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
@endsection