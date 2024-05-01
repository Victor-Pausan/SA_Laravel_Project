@extends('layouts.app')

@vite(['resources/css/style.css'])

@section('content')
<section class="main-section">
    <picture class="picture">
        <source media="(min-width: 1080px)" srcset={{ asset('storage/images/secondary_picture.png') }}>
        <source media="(min-width: 790px)" srcset={{ asset('storage/images/secondary_picture3.png') }}>
        <img src={{ asset('storage/images/secondary_picture2.png') }}>
    </picture>
    <span class="card-body">
        <h1 class="card-title">ELITE TRAINING.</h1>
        <h1 class="card-title">UNBEATABLE RESULTS.</h1>
        <p class="card-text">Join now or stay average.</p>
        <button type="button" class="btn btn-light btn-lg">
            <a href="{{ route('register') }}" class="link-dark link-offset-2 link-underline link-underline-opacity-0">Get started.</a>
        </button>
    </span>
</section>
<section class="secondary-section">
    <picture class="picture">
        <source media="(min-width: 1080px)" srcset={{ asset('storage/images/main_picture.jpg') }}>
        <source media="(min-width: 790px)" srcset={{ asset('storage/images/main_picture3.png') }}>
        <source media="(min-width: 690px)" srcset={{ asset('storage/images/main_picture4.png') }}>
        <img src={{ asset('storage/images/main_picture2.png') }} >
    </picture>
    <div class="square">
        <h2 class="square-title">Membership with benefits</h2>
        <p class="square-p">Unrivaled Group Fitness classes. Unparalleled Personal Training. Studios that
            inspire you to perform and luxury amenities that keep you feeling your best.</p>
        <a href="{{ route('memberships') }}" title="Comming soon">
            <p class="square-p">View membership plans</p>
        </a>
    </div>
</section>
<section class="third-section">
    <picture class="picture">
        <source media="(min-width: 1080px)" srcset={{ asset('storage/images/section-pic-big.png') }}>
        <source media="(min-width: 790px)" srcset={{ asset('storage/images/section-pic-medium.png') }}>
        <img src={{ asset('storage/images/section-pic-small.png') }}>
    </picture>
    <div class="square">
        <h2 class="square-title">Where Luxury and Fitness Meet</h2>
        <p class="square-p">Clubs that deliver an unrivaled experience to maximize your potential, and
            luxury amenities that keep you performing at your best.</p>
        <a href="{{ route('clubs') }}" title="Comming soon">
            <p class="square-p">View clubs</p>
        </a>
    </div>
</section>
<section class="fourth-section container" id="clubs">
    <div class="explore-text">
        <h2 class="explore-title">Explore A Club Near You</h2>
        <p class="explore-content">Unrivaled Group Fitness classes. Unparalleled Personal Training. Studios
            that inspire you to perform and luxury amenities that keep you feeling your best.</p>
    </div>
    <div id="carouselExampleInterval" class="carousel slide explore-slideshow" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src={{ asset('storage/images/nyc-gym.png') }} class="d-block w-100" alt="...">
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h2>Tribeca</h2>
                  </div>
                  <div class="col-md-6 text-md-end">
                      <h2 class="temperature" id="10007">60°F</h2>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <p>54 Murray Street
                        New York, NY 10007</p>
                  </div>
              </div>
          </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src={{ asset('storage/images/florida-image.png') }} class="d-block w-100" alt="...">
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h2>Brickell Heights</h2>
                  </div>
                  <div class="col-md-6 text-md-end">
                      <h2 class="temperature" id="33131">60°F</h2>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <p>25 SW 9th Street
                        Miami, FL 33131</p>
                  </div>
              </div>
          </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src={{ asset('storage/images/la-gym.png') }} class="d-block w-100" alt="...">
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h2>West Hollywood</h2>
                  </div>
                  <div class="col-md-6 text-md-end">
                      <h2 class="temperature" id="90069">60°F</h2>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <p>8590 Sunset Blvd<br>West Hollywood, CA 90069</p>
                  </div>
              </div>
          </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src={{ asset('storage/images/south-beach.png') }} class="d-block w-100" alt="...">
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h2>South Beach</h2>
                  </div>
                  <div class="col-md-6 text-md-end">
                      <h2 class="temperature" id="33139">60°F</h2>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <p>Collins Avenue
                        Miami Beach, FL 33139</p>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>
@endsection