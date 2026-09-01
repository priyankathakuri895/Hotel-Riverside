@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="page-header text-white text-center">
    <div class="container">
        <span class="section-eyebrow">Stay</span>

        <h1 class="display-4">Our Packages</h1>

        <p class="lead">
            Choose the perfect package for your stay.
        </p>
    </div>
</section>

<!-- PACKAGES -->
<section class="py-5 bg-white section-pad">
    <div class="container">

        <div class="section-head">
            <h2>Choose Your Package</h2>
            <p>Refined comfort and genuine hospitality, crafted for every kind of traveller.</p>
        </div>

        <div class="row g-4">

            <!-- PACKAGE 1 -->
            <div class="col-md-4">
                <div class="package-card h-100">

                    <img
                        src="/images/room2.jpg"
                        class="feature-img"
                        alt="Luxury Package"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="feature-body text-center">

                        <h3>
                            Deluxe Package
                        </h3>

                        <h4 class="price-tag mt-3">
                            $120 / Night
                        </h4>

                        <ul class="list-unstyled mt-4">
                            <li>Luxury Room</li>
                            <li>Free Breakfast</li>
                            <li>Swimming Pool</li>
                            <li>Free WiFi</li>
                        </ul>

                        <a href="/booking" class="btn-brand mt-3">
                            Book Now
                        </a>

                    </div>

                </div>
            </div>

            <!-- PACKAGE 2 -->
            <div class="col-md-4">
                <div class="package-card h-100">

                    <img
                        src="/images/riverside.jpg"
                        class="feature-img"
                        alt="Couple Package"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="feature-body text-center">

                        <h3>
                            Couple Package
                        </h3>

                        <h4 class="price-tag mt-3">
                            $180 / Night
                        </h4>

                        <ul class="list-unstyled mt-4">
                            <li>Luxury Suite</li>
                            <li>Candle Light Dinner</li>
                            <li>Spa Access</li>
                            <li>Free Drinks</li>
                        </ul>

                        <a href="/booking" class="btn-brand mt-3">
                            Book Now
                        </a>

                    </div>

                </div>
            </div>

            <!-- PACKAGE 3 -->
            <div class="col-md-4">
                <div class="package-card h-100">

                    <img
                        src="/images/rhino.jpg"
                        class="feature-img"
                        alt="Family Package"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="feature-body text-center">

                        <h3>
                            Family Package
                        </h3>

                        <h4 class="price-tag mt-3">
                            $250 / Night
                        </h4>

                        <ul class="list-unstyled mt-4">
                            <li>Family Room</li>
                            <li>Kids Activities</li>
                            <li>Free Lunch</li>
                            <li>Swimming Pool</li>
                        </ul>

                        <a href="/booking" class="btn-brand mt-3">
                            Book Now
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<style>
.package-card{
    background: #fff;
    border: 1px solid rgba(0,0,0,0.08);
    border-radius: 6px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    color: #222;
}
.package-card:hover{
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}
.feature-img{
    width: 100%;
    display: block;
}
.feature-body{
    padding: 24px;
}
.feature-body h3{
    font-weight: 500;
}
.price-tag{
    color: var(--brand);
    font-weight: 700;
}
.feature-body ul li{
    color: var(--grey);
    padding: 3px 0;
}
</style>

@endsection