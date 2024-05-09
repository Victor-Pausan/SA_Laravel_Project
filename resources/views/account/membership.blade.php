@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Member Info</h4>
            </div>
            @if (session('success'))
                <x-alert type="success" message="{{ session('success') }}" />
            @endif
            <form method="POST", action="{{ route('account.membership.update') }}">
                @csrf
                @method('PUT')
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name</label><input name="name" type="text"
                            class="form-control" placeholder="{{ $member->user->name }}" value="{{ $member->user->name }}">
                    </div>
                    <div class="col-md-12"><label class="labels">Email</label><input name="email" type="text"
                            class="form-control" placeholder="{{ $member->user->email }}"
                            value="{{ $member->user->email }}"></div>
                    <div class="col-md-12"><label class="labels">Membership type</label><input name="name" type="text"
                            class="form-control" placeholder="{{ $member->subscription->type }}" value="{{ $member->subscription->type }}" disabled readonly>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Gym location</label><input type="text"
                            class="form-control" placeholder="{{ $member->gymLocation->name }}"
                            value="{{ $member->gymLocation->name }}" disabled readonly></div>
                    <div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control"
                            value="{{ $state->name }}" placeholder="{{ $state->name }}" disabled readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Membership start date</label><input type="text"
                            class="form-control" placeholder="{{ $member->membership_start_date }}"
                            value="{{ $member->membership_start_date }}" disabled readonly></div>
                    <div class="col-md-6"><label class="labels">Membership end date</label><input type="text"
                            class="form-control" value="{{ $member->membership_end_date }}"
                            placeholder="{{ $member->membership_end_date }}" disabled readonly></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                        Profile</button></div>
            </form>
            <form method="POST", action="{{ route('account.membership.destroy') }}">
                @csrf
                @method('DELETE')
                <div class="mt-3 text-center">
                    <a href="#myModal" class="btn btn-danger" data-bs-toggle="modal">Cancel membership</a>

                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Are you sure you want to cancel your membership?</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>This process cannot be
                                        undone.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Cancel membership</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>
@endsection
