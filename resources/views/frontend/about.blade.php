@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-dark text-white text-center py-5">
    <div class="container">

        <h1 class="display-4 fw-bold">
            About Hotel Riverside
        </h1>

        <p class="lead">
            Discover comfort, adventure and authentic hospitality.
        </p>

    </div>
</section>

<!-- ABOUT SECTION -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-lg-6 mb-4">

                <img
                    src="/images/about-hotel.jpg"
                    alt="Hotel Riverside"
                    class="img-fluid rounded shadow"
                >

            </div>

            <!-- CONTENT -->
            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    Welcome to Hotel Riverside
                </h2>

                <p class="lead">
                    Hotel Riverside is a peaceful luxury destination designed
                    for guests who want comfort, nature and unforgettable
                    experiences.
                </p>

                <p>
                    Located near the beautiful riverside and surrounded by
                    natural beauty, our hotel offers modern rooms, exciting
                    jungle adventures and authentic cultural experiences.
                </p>

                <p>
                    Whether you are visiting for relaxation, family vacations
                    or adventure tourism, Hotel Riverside provides everything
                    you need for a memorable stay.
                </p>

            </div>

        </div>

    </div>
</section>

<!-- MISSION & VISION -->
<section class="bg-light py-5">

    <div class="container">

        <div class="row g-4">

            <!-- MISSION -->
            <div class="col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4 text-center">

                        <h3 class="fw-bold mb-3">
                            Our Mission
                        </h3>

                        <p>
                            To provide world-class hospitality, comfortable
                            accommodations and unforgettable travel experiences
                            for every guest.
                        </p>

                    </div>

                </div>

            </div>

            <!-- VISION -->
            <div class="col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4 text-center">

                        <h3 class="fw-bold mb-3">
                            Our Vision
                        </h3>

                        <p>
                            To become one of the most loved riverside hotels
                            known for luxury, nature and authentic cultural
                            experiences.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- WHY CHOOSE US -->
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Why Choose Hotel Riverside?
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center p-4">

                        <h4 class="fw-bold">
                            Beautiful Location
                        </h4>

                        <p class="mt-3">
                            Enjoy peaceful riverside views and natural beauty.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center p-4">

                        <h4 class="fw-bold">
                            Adventure Activities
                        </h4>

                        <p class="mt-3">
                            Canoeing, jungle safari, cultural programs and more.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center p-4">

                        <h4 class="fw-bold">
                            Luxury Hospitality
                        </h4>

                        <p class="mt-3">
                            Comfortable rooms and excellent customer service.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection