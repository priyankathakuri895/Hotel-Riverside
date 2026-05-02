@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section
    class="hero-section d-flex align-items-center text-white text-center"
    style="
        height: 90vh;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('/images/hotel.jpg');
        background-size: cover;
        background-position: center;
    "
>
    <div class="container">
        <h1 class="display-2 fw-bold">
            Welcome to Hotel Riverside
        </h1>

        <p class="lead mt-4">
            Experience luxury, comfort and unforgettable memories.
        </p>

        <a href="/booking" class="btn btn-warning btn-lg mt-3 px-5">
            Book Your Stay
        </a>
    </div>
</section>

<!-- FEATURES -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose Us?</h2>
            <p>Luxury hospitality with premium facilities.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <h3>Luxury Rooms</h3>
                        <p>
                            Beautiful modern rooms with comfortable interiors.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <h3>Premium Facilities</h3>
                        <p>
                            Swimming pool, spa, free WiFi and restaurant.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <h3>Affordable Packages</h3>
                        <p>
                            Best packages for couples and families.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- BOOKING CTA -->
<section class="bg-dark text-white py-5 text-center">
    <div class="container">
        <h2 class="fw-bold">Book Your Dream Vacation Today</h2>

        <p class="mt-3">
            Enjoy luxury experience with Hotel Riverside.
        </p>

        <a href="/booking" class="btn btn-warning btn-lg mt-2">
            Reserve Now
        </a>
    </div>
</section>

@endsection