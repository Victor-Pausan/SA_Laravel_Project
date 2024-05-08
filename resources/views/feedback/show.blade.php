@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="py-3 d-flex justify-content-between">
            <h1>My Feedbacks</h1>
        </div>
        @if (session('success'))
            <x-alert type="success" message="{{ session('success') }}" />
        @endif
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @if ($memberFeedbacks->isEmpty())
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">No feedbacks yet.</p>
                        </div>
                    </div>
                </div>
            @endif
            @foreach ($memberFeedbacks as $memberFeedback)
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            {{ $memberFeedback->member->user->name }}
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>{{ $memberFeedback->class->gymLocation->name }}</p>
                                <p>{{ $memberFeedback->class->name }}</p>
                                <p>{{ $memberFeedback->feedback->comment }}</p>
                                <footer class="footer">
                                    <ul class="list-unstyled d-flex">
                                        @for ($i = 0; $i < $memberFeedback->feedback->rating; $i++)
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </li>
                                        @endfor
                                        @for ($i = 5; $i > $memberFeedback->feedback->rating; $i--)
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                                </svg>
                                            </li>
                                        @endfor
                                    </ul>
                                </footer>
                                <form action="{{ route('feedback.destroy', ['id' => $memberFeedback->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#myModal" class="btn btn-danger" data-bs-toggle="modal">Delete</a>

                                    <div id="myModal" class="modal fade">
                                        <div class="modal-dialog modal-confirm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Are you sureyou want to delete this?</h4>
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
                            </blockquote>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
