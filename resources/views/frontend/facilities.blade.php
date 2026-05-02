@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Facilities & Activities</h1>

        <p class="lead">
            Experience adventure, culture and nature at Hotel Riverside.
        </p>
    </div>
</section>

<!-- FACILITIES -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- Canoeing -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/canoeing.jpg"
                        class="card-img-top"
                        alt="Canoeing"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Canoeing
                        </h3>

                        <p class="mt-3">
                            Enjoy peaceful canoe rides along the beautiful river.
                        </p>

                    </div>

                </div>
            </div>

            <!-- Jeep Safari -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/jeep-safari.jpg"
                        class="card-img-top"
                        alt="Jeep Safari"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Jeep Safari
                        </h3>

                        <p class="mt-3">
                            Explore wildlife and jungle adventures with jeep safari.
                        </p>

                    </div>

                </div>
            </div>

            <!-- Jungle Walk -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/jungle-walk.jpg"
                        class="card-img-top"
                        alt="Jungle Walk"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Jungle Walk
                        </h3>

                        <p class="mt-3">
                            Discover nature closely with guided jungle walks.
                        </p>

                    </div>

                </div>
            </div>

            <!-- Tharu Dance -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/tharu-dance.jpg"
                        class="card-img-top"
                        alt="Tharu Dance"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Tharu Cultural Dance
                        </h3>

                        <p class="mt-3">
                            Experience traditional Tharu music and cultural performances.
                        </p>

                    </div>

                </div>
            </div>

            <!-- Village Tour -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/village-tour.jpg"
                        class="card-img-top"
                        alt="Village Tour"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Village Tour
                        </h3>

                        <p class="mt-3">
                            Explore local villages and discover authentic traditions.
                        </p>

                    </div>

                </div>
            </div>

            <!-- Riverside Relax -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <img
                        src="/images/riverside.jpg"
                        class="card-img-top"
                        alt="Riverside Relax"
                        style="height: 250px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <h3 class="fw-bold">
                            Riverside Relaxation
                        </h3>

                        <p class="mt-3">
                            Relax beside the peaceful riverside environment.
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection