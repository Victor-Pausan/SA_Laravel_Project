@extends('layouts.app')

@vite(['resources/css/clubs-card.css'])

@section('content')
<section class="container my-5">
    <h1 class="text-left mb-5">{{ strtoupper($state->name) }} CLUBS</h1>
</section>

<section class="container my-5">
    <h2 class="text-left mb-5">Featured Clubs</h2>
    <div class="row">
        @foreach($locations as $location)
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="https://www.google.com/maps/search/?api=1&query={{-- adjustAddress($location->address) --}}" target="_blank">
                <div class="card text-bg-light mb-4 p-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h5 class="card-title">{{ $location->name }}</h5>
                                <p class="card-text">{{ $location->address }}</p>
                                <p class="card-text"><small class="text-muted">View on map</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('storage/images/'.$location->picture_path) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>
            </a>
        @endforeach                    
    </div>
</section>
@endsection