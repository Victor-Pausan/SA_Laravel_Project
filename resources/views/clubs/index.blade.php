@extends('layouts.app')

@vite(['resources/css/clubs-card.css'])

@section('content')
    <section class="container my-5">
        <h1 class="text-left mb-5">FIND A CLUB NEAR YOU</h1>
        <div class="form-inline justify-content-center" style="max-width: 450px;">
            <form method="GET">
                <select name="state" class="form-select mb-3 form-select-lg" aria-label="Default select example"
                    onchange="this.form.submit();">
                    <option value="0" selected>All states</option>
                    @foreach ($states as $state)
                        <option name="state" value="{{ $state->id }}">{{ $state->name }} </option>
                    @endforeach
                </select>
            </form>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-left mb-5">Featured Clubs</h2>
        <div class="row">
            @foreach ($states as $state)
                <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ route('clubs.show', ['id' => $state->id]) }}">
                    <div class="card text-bg-light mb-4 p-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h5 class="card-title">{{ $state->name }}</h5>
                                    <p class="card-text">{{ $state->info }}</p>
                                    <p class="card-text"><small class="text-muted">View all clubs</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('storage/images/' . $state->picture_path) }}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
