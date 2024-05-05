@extends('layouts/app')

@vite(['resources/css/memberships.css'])

@section('content')
<section class="main-section">
    <picture class="picture">
        <source media="(min-width: 1080px)" srcset="{{ asset('storage/images/memberships-picture.jpg') }}">
        <source media="(min-width: 790px)" srcset="{{ asset('storage/images/memberships-picture2.jpg') }}">
        <img src="{{ asset('storage/images/memberships-picture3.jpg') }}">
    </picture>
    <span class="card-body text-start main-card">
        <h1 class="card-title main-title">MEMBERSHIP</h1>
        <h1 class="card-title main-title">WITH BENEFITS.</h1>
        <p class="card-text main-text">Iron Anchor is available however, whenever, and wherever you want it. Explore the benefits you get with an Iron Anchor membership below.</p>
        <a href="#memberships" class="btn btn-light">View Memberships.</a>
    </span>
</section>

<section id="memberships" class="my-5 p-5">
    <div class="container">
        <div class="row d-flex justify-content-center gap-5">
            <div class="card text-bg-light text-center mb-3" style="width: 18rem;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Basic Membership:</h5>
                    <h5 class="card-title">$59/month</h5>
                    <ul class="list">
                        <li><i class="fas fa-check text-success mr-2"></i>Access to basic gym facilities</li>
                        <li><i class="fas fa-check text-success mr-2"></i>Limited access to group fitness classes</li>
                        <li><i class="fas fa-check text-success mr-2"></i>No additional perks or services included</li>
                    </ul>
                    @auth
                        <a href="{{ route('membership.create', ['id' => 1]) }}" class="btn btn-dark">Choose</a>
                    @else
                        @if(Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-dark">Choose</a>
                        @endif
                    @endauth
                    
                </div>
            </div>
            <div class="card text-bg-light text-center mb-3" style="width: 18rem;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Premium Membership:</h5>
                    <h5 class="card-title">$89/month</h5>
                    <ul class="list">
                        <li><i class="fas fa-check text-success mr-2"></i>Full access to all gym facilities</li>
                        <li><i class="fas fa-check text-success mr-2"></i>Unlimited access to group fitness classes</li>
                        <li><i class="fas fa-check text-success mr-2"></i>Discounts on personal training sessions or other services</li>
                        <li><i class="fas fa-check text-success mr-2"></i>Access to exclusive member events or workshops</li>
                    </ul>
                    @auth
                        <a href="{{ route('membership.create', ['id' => 2]) }}" class="btn btn-dark">Choose</a>
                    @else
                        @if(Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-dark">Choose</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
</section>
@endsection