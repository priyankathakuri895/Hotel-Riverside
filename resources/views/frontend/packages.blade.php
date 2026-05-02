@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Packages</h1>

        <p class="lead">
            Choose the perfect package for your stay.
        </p>
    </div>
</section>

<!-- PACKAGES -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- PACKAGE 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/package1.jpg"
                        class="card-img-top"
                        alt="Luxury Package"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Deluxe Package
                        </h3>

                        <h4 class="text-warning mt-3">
                            $120 / Night
                        </h4>

                        <ul class="list-unstyled mt-4">
                            <li>Luxury Room</li>
                            <li>Free Breakfast</li>
                            <li>Swimming Pool</li>
                            <li>Free WiFi</li>
                        </ul>

                        <a href="/booking" class="btn btn-warning mt-3">
                            Book Now
                        </a>

                    </div>

                </div>
            </div>

            <!-- PACKAGE 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/package2.jpg"
                        class="card-img-top"
                        alt="Couple Package"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Couple Package
                        </h3>

                        <h4 class="text-warning mt-3">
                            $180 / Night
                        </h4>

                        <ul class="list-unstyled mt-4">
                            <li>Luxury Suite</li>
                            <li>Candle Light Dinner</li>
                            <li>Spa Access</li>
                            <li>Free Drinks</li>
                        </ul>

                        <a href="/booking" class="btn btn-warning mt-3">
                            Book Now
                        </a>

                    </div>

                </div>
            </div>

            <!-- PACKAGE 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/package3.jpg"
                        class="card-img-top"
                        alt="Family Package"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Family Package
                        </h3>

                        <h4 class="text-warning mt-3">
                            $250 / Night
                        </h4>

                        <ul class="list-unstyled mt-4">
                            <li>Family Room</li>
                            <li>Kids Activities</li>
                            <li>Free Lunch</li>
                            <li>Swimming Pool</li>
                        </ul>

                        <a href="/booking" class="btn btn-warning mt-3">
                            Book Now
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection