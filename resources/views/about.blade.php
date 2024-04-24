@extends('layouts.app')

@vite(['resources/css/about.css'])

@section('content')
<div class="container">
    <section class="about-us">
        <h1>Welcome to Iron Anchor Athletics</h1>
        <p>Your premier destination for holistic fitness and personal transformation. Nestled in the heart of the
            community, our gym is more than just a place to work out; it's a sanctuary where strength meets spirit, and
            where every member embarks on a journey toward their best self.</p>
    </section>

    <section class="philosophy">
        <h2>Our Philosophy</h2>
        <p>At Iron Anchor Athletics, we believe that true strength is not just measured by how much you can lift but
            by lifting each other up. Our philosophy centers on the holistic development of the individual—physically,
            mentally, and emotionally.</p>
    </section>

    <section class="facilities">
        <h2>Our Facilities</h2>
        <ul>
            <li><strong>Cutting-Edge Equipment:</strong> From cardio machines with the latest technology to a
                comprehensive selection of free weights and strength training equipment.</li>
            <li><strong>Dynamic Group Classes:</strong> Choose from a variety of options including yoga, spin, HIIT, and
                more.</li>
            <li><strong>Personal Training:</strong> Personalized workout plans with one-on-one coaching to help you
                reach your specific goals.</li>
            <li><strong>Luxury Amenities:</strong> Deluxe locker rooms, sauna, and an in-house nutrition bar.</li>
        </ul>
    </section>

    <section class="community">
        <h2>Our Community</h2>
        <p>What truly sets Iron Anchor Athletics apart is our vibrant community. We are a melting pot of individuals
            united by a common passion for wellness and a shared commitment to supporting one another.</p>
    </section>

    <section class="join-us">
        <h2>Join Us</h2>
        <p>Whether you're looking to embark on your fitness journey, seeking to elevate your existing routine, or
            searching for a community that supports your personal growth, Iron Anchor Athletics is here for you.</p>
    </section>
</div>
@endsection