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
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide explore-slideshow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('storage/images/3car' . $class->picture_path) }}" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('storage/images/2car' . $class->picture_path) }}" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('storage/images/1car' . $class->picture_path) }}" class="d-block w-100">
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
                @if(session('success'))
                    <x-alert type="success" message="{{session('success')}}"/>
                    @endif
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($class->memberFeedbacks as $memberFeedback)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                {{$memberFeedback->member->user->name}}
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>{{$memberFeedback->feedback->comment}}</p>
                                    <footer class="footer">
                                        <ul class="list-unstyled d-flex">
                                            @for($i = 0; $i < $memberFeedback->feedback->rating; $i++)
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                      </svg>
                                                </li>
                                            @endfor
                                            @for($i = 5; $i > $memberFeedback->feedback->rating; $i--)
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                                                      </svg> 
                                                </li>
                                            @endfor
                                        </ul>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
