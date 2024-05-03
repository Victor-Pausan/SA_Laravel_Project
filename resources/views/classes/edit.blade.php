@extends('layouts.app')

@vite(['resources/css/classes-manager.css'])

@section('content')
<section class="classes-form">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="title">
                    <h1>EDIT THE CLASS</h1>
                </div>
            </div>
            <div class="col">
                <form class="form" action="{{ route('admin.update', ['id' => $class->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input name="class-name" id="class-name" type="text" class="form-control @error('class-name') is-invalid @enderror" value="{{ $class->name}}">
                        @error('class-name')
                        <div id="class-name-error" class="error-message">{{ $message }}</div>
                        @enderror
                        <label for="class-name">Class Name:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="location" class="form-select @error('location') is-invalid @enderror" aria-label="Default select example">
                            <option>Choose a location</option>
                            @foreach ($locations as $location) 
                               <option @if($class->gymLocation->id == $location->id) selected @endif value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error('location')
                        <div id="location-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="location">Location:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="date" id="date" type="date" class="form-control @error('date') is-invalid @enderror" value="{{ $class->date }}">
                        @error('date')
                        <div id="date-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="date">Date:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="time" id="time" type="time" class="form-control @error('time') is-invalid @enderror" value="{{ $class->time }}">
                        @error('time')
                        <div id="time-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="time">From:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="duration" id="duration" type="time" class="form-control @error('duration') is-invalid @enderror" value="{{ $class->duration }}">
                        @error('duration')
                        <div id="duration-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="duration">Until:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $class->trainer_name }}">
                        @error('name')
                        <div id="name-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="name">Trainer:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ $class->description }}</textarea>
                        @error('description')
                        <div id="description-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="description" id="description-label">Description:</label>
                    </div>
                    <button class="submit" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection