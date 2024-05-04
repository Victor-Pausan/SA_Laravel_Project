@extends('layouts.app')

@vite(['resources/css/classes-page.css'])

@section('content')
<section class="container my-5">
    <h1 class="text-left mb-5">CHOOSE A CLASS</h1>
    <form class="form-inline justify-content-center" style="max-width: 450px;" method="GET">
        <select name="location" class="form-select mb-3 form-select-lg" aria-label="Default select example" onchange="this.form.submit();">
            <option value="0">All locations</option>
            @foreach ($locations as $location)
                <option @if($location->id == $locationId) selected @endif value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>
    </form>
</section>
<section class="container my-5">
    @foreach ($classes as $class)
        <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ route('classes.show', ['id' => $class->id]) }}">
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
                                <p class="card-text"><small class="text-muted">{{ $class->date }}</small></p>
                                <p class="card-text"><small class="text-muted">{{ $class->time.' - '.$class->duration }}</small></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $class->gymLocation->name }}</h5>
                            </div>
                        </div>
                    </div>      
                </div> 
            </a>
    @endforeach
</section>
@endsection