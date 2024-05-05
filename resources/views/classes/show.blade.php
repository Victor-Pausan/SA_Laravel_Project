@extends('layouts.app')

@vite(['resources/css/memberships.css', 'resources/css/class-display.css'])

@section('content')
    <section class="main-section">
        <picture class="picture">
            <source media="(min-width: 1080px)" srcset="{{ asset('storage/images/' . $class->picture_path) }}">
            <source media="(min-width: 790px)" srcset="{{ asset('storage/images/2' . $class->picture_path) }}">
            <img src="{{ asset('storage/images/3' . $class->picture_path) }}">
        </picture>
        <span class="card-body text-start main-card">
            <h1 class="card-title main-title">{{ $class->name }}</h1>
            <h1 class="card-title main-title">{{ $class->gymLocation->name }}</h1>
            <p class="card-text main-text">{{ $class->description }}</p>
        </span>
    </section>

    <section class="fourth-section container" id="clubs">
        <div class="explore-text">
            <h2 class="explore-title">Trainer: {{ $class->trainer_name }}</h2>
            <p class="explore-content">Date: {{ $class->date }}</p>
            <p class="explore-content">From: {{ $class->time }}</p>
            <p class="explore-content">To: {{ $class->duration }}</p>
            <p class="explore-content">Location: {{ $class->gymLocation->name }}</p>
            <a href="#memberships" class="btn btn-primary btn-lg">Try {{ $class->name }} Class</a>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide explore-slideshow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('storage/images/3car' . $class->picture_path) }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('storage/images/2car' . $class->picture_path) }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('storage/images/1car' . $class->picture_path) }}" class="d-block w-100"
                        alt="...">
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="py-3 d-flex justify-content-between">
                    <h1>Members Feedback</h1>
                    @if(auth()->user()->member != null)
                        <a href="{{ route('feedback.create').'?class='.$class->id }}" class="btn btn-primary btn-lg">Add your feedback!</a>
                    @else
                        <a href="{{ route('memberships').'?class='.$class->id }}" class="btn btn-primary btn-lg">Become a member to add feedback</a>
                    @endif
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Name
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>comment</p>
                                    <footer class="blockquote-footer">rating</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
