@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="page-header text-white text-center">
    <div class="container">
        <span class="section-eyebrow">Experience</span>

        <h1 class="display-4">Our Facilities &amp; Activities</h1>

        <p class="lead">
            Experience adventure, culture and nature at Hotel Riverside.
        </p>
    </div>
</section>

<!-- FACILITIES -->
<section class="py-5 bg-white section-pad">
    <div class="container">

        <div class="section-head">
            <h2>Facilities &amp; Activities</h2>
            <p>Everything you need for an unforgettable stay in the jungle.</p>
        </div>

        <div class="row g-4">

            <!-- Canoeing -->
            <div class="col-md-4">
                <div class="facility-card h-100">

                    <img
                        src="/images/canoeing.jpg"
                        class="feature-img"
                        alt="Canoeing"
                    >

                    <div class="feature-body text-center">

                        <h3>
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
                <div class="facility-card h-100">

                    <img
                        src="/images/jeep-safari.jpg"
                        class="feature-img"
                        alt="Jeep Safari"
                    >

                    <div class="feature-body text-center">

                        <h3>
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
                <div class="facility-card h-100">

                    <img
                        src="/images/jungle-safari.jpg"
                        class="feature-img"
                        alt="Jungle Walk"
                    >

                    <div class="feature-body text-center">

                        <h3>
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
                <div class="facility-card h-100">

                    <img
                        src="/images/tharu-dance.jpg"
                        class="feature-img"
                        alt="Tharu Dance"
                    >

                    <div class="feature-body text-center">

                        <h3>
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
                <div class="facility-card h-100">

                    <img
                        src="/images/village-tour.jpg"
                        class="feature-img"
                        alt="Village Tour"
                    >

                    <div class="feature-body text-center">

                        <h3>
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
                <div class="facility-card h-100">

                    <img
                        src="/images/riverside.jpg"
                        class="feature-img"
                        alt="Riverside Relax"
                    >

                    <div class="feature-body text-center">

                        <h3>
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

<style>
.facility-card{
    background: #fff;
    border: 1px solid rgba(0,0,0,0.08);
    border-radius: 6px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    color: #222;
}
.facility-card:hover{
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}
.feature-img{
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;
}
.feature-body{
    padding: 20px;
}
.feature-body h3{
    font-size: 1.1rem;
    font-weight: 500;
}
.feature-body p{
    color: var(--grey);
}
</style>

@endsection