@extends('layouts.app')

@vite(['resources/css/classes-manager.css'])

@section('content')
<section class="classes-form">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="title">
                    <h1>SCHEDULE A CLASS</h1>
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
                        <input name="class-name" id="class-name" type="text" class="form-control @error('class-name') is-invalid @enderror" value="{{ old('class-name') }}">
                        @error('class-name')
                        <div id="class-name-error" class="error-message">{{ $message }}</div>
                        @enderror
                        <label for="class-name">Class Name:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="location" class="form-select @error('location') is-invalid @enderror" aria-label="Default select example">
                            <option selected>Choose a location</option>
                            @foreach ($locations as $location) 
                               <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error('location')
                        <div id="location-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="location">Location:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="date" id="date" type="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                        @error('date')
                        <div id="date-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="date">Date:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="time" id="time" type="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}">
                        @error('time')
                        <div id="time-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="time">From:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="duration" id="duration" type="time" class="form-control @error('duration') is-invalid @enderror" value="{{ old('duration') }}">
                        @error('duration')
                        <div id="duration-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="duration">Until:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                        <div id="name-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="name">Trainer:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                        @error('description')
                        <div id="description-error" class="error-message">{{$message}}</div>
                        @enderror
                        <label for="description" id="description-label">Description:</label>
                    </div>
                    <button class="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="appointments">
    <div class="container">
        <div class="row">
            <section id="schedule" class="schedule">
                @foreach ($classes as $class) 
                    <div class="card mb-3 p-3">
                        <div class="d-flex flex-row justify-content-between g-0">
                            <div class="col-md-3 d-flex align-items-center">
                                <img src="{{ asset('storage/images/class-pictures/'.$class->picture_path) }}" class="img-fluid rounded-start mx-5" alt="..." style="width: 130px">
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $class->name }}</h5>
                                    <p class="card-text">{{ $class->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $class->trainer_name }}</h5>
                                    <p class="card-text">{{ $class->time.' - '.$class->duration }}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $class->gymLocation->name }}</h5>
                                    <form class="mb-3" action="{{route('admin.destroy', ['id' => $class->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#myModal" class="btn btn-danger" data-bs-toggle="modal">Delete</a>

                                        <div id="myModal" class="modal fade">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Are you sure you want to delete this?</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>This process cannot be
                                                            undone.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form method="GET" action="{{ route('admin.edit', ['id' => $class->id]) }}">
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</section>
@endsection