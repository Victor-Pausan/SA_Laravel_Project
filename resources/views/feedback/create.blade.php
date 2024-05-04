@extends('layouts.app')

@vite(['resources/css/classes-manager.css'])

@section('content')
<section class="classes-form">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="title">
                    <h1>ADD FEEDBACK TO {{ strtoupper($class->name) }} CLASS</h1>
                </div>
                @if(session('success'))
                <x-alert type="success" message="{{session('success')}}"/>
                @endif

                @if(session('danger'))
                <x-alert type="danger" message="{{session('danger')}}"/>
                @endif
                
                @if(session('warning'))
                <x-alert type="warning" message="{{session('warning')}}"/>
                @endif
            </div>
            <div class="col">
                <form class="form" action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="rating" id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating') }}">
                        @error('rating')
                        <div id="rating-error" class="error-message">{{ $message }}</div>
                        @enderror
                        <label for="rating">Rating:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="comment" name="comment" class="form-control @error('comment') is-invalid @enderror">{{ old('comment') }}</textarea>
                        @error('comment')
                        <div id="comment-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="comment" id="comment-label">Comment:</label>
                    </div>
                    <button class="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection