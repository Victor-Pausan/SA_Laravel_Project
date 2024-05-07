@extends('layouts.app')

@vite(['resources/css/classes-manager.css', 'resources/css/feedback-add.css'])

@section('content')
<section class="classes-form">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="title">
                    <h1>ADD FEEDBACK TO</h1>
                    <h1>{{ strtoupper($class->name) }} CLASS</h1>
                </div>
                
                @if(session('success'))
                <x-alert type="success" message="{{session('success')}}"/>
                @endif
            </div>
            <div class="col-5">
                <form class="form" action="{{ route('feedback.store', ['classId' => $class->id]) }}" method="POST">
                    @csrf
                    <div class="form-floating">
                        <textarea id="comment" name="comment" class="form-control @error('comment') is-invalid @enderror">{{ old('comment') }}</textarea>
                        @error('comment')
                        <div id="comment-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="comment" id="comment-label">Comment:</label>
                    </div>
                    <div class="rate mb-4">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                    <button class="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection