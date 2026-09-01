@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="page-header text-white text-center">
    <div class="container">

        <span class="section-eyebrow">About Us</span>

        <h1 class="display-4">
            About Hotel Riverside
        </h1>

        <p class="lead">
            Discover comfort, adventure and authentic hospitality.
        </p>

    </div>
</section>

<!-- ABOUT SECTION -->
<section class="py-5 bg-white section-pad">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->
            <div class="col-lg-6">

                <img
                    src="/images/about-hotel.jpg"
                    alt="Hotel Riverside"
                    class="img-fluid about-img"
                >

            </div>

            <!-- CONTENT -->
            <div class="col-lg-6">

                <h2 class="about-label">Our Story</h2>
                <h3 class="about-title">Welcome to Hotel Riverside</h3>

                <p class="text-muted-grey">
                    Hotel Riverside is a peaceful luxury destination designed
                    for guests who want comfort, nature and unforgettable
                    experiences.
                </p>

                <p class="text-muted-grey">
                    Located near the beautiful riverside and surrounded by
                    natural beauty, our hotel offers modern rooms, exciting
                    jungle adventures and authentic cultural experiences.
                </p>

                <p class="text-muted-grey">
                    Whether you are visiting for relaxation, family vacations
                    or adventure tourism, Hotel Riverside provides everything
                    you need for a memorable stay.
                </p>

            </div>

        </div>

    </div>
</section>

<!-- MISSION & VISION -->
<section class="section-tint py-5 section-pad">

    <div class="container">

        <div class="row g-4">

            <!-- MISSION -->
            <div class="col-md-6">

                <div class="flat-card">

                    <h3>Our Mission</h3>

                    <p>
                        To provide world-class hospitality, comfortable
                        accommodations and unforgettable travel experiences
                        for every guest.
                    </p>

                </div>

            </div>

            <!-- VISION -->
            <div class="col-md-6">

                <div class="flat-card">

                    <h3>Our Vision</h3>

                    <p>
                        To become one of the most loved riverside hotels
                        known for luxury, nature and authentic cultural
                        experiences.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- WHY CHOOSE US -->
<section class="py-5 bg-white section-pad">

    <div class="container">

        <div class="section-head">
            <h2>Why Choose Hotel Riverside?</h2>
            <p>Everything we offer, built around comfort and genuine hospitality.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="flat-card">

                    <h4>Beautiful Location</h4>

                    <p>Enjoy peaceful riverside views and natural beauty.</p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="flat-card">

                    <h4>Adventure Activities</h4>

                    <p>Canoeing, jungle safari, cultural programs and more.</p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="flat-card">

                    <h4>Luxury Hospitality</h4>

                    <p>Comfortable rooms and excellent customer service.</p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection