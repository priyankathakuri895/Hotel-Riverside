@extends('layouts.app')

@section('content')

<!-- ================= HERO SLIDER ================= -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <div class="carousel-item active hero-slide"
             style="background:url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4') center/cover; height:100vh;">

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <h1>HOTEL RIVERSIDE</h1>

                <p>Luxury Stay • Nature Escape • Premium Comfort</p>

                <a href="/booking" class="btn btn-warning btn-lg px-4 mt-3">
                    Book Now
                </a>

            </div>

        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item hero-slide"
             style="background:url('https://images.unsplash.com/photo-1566073771259-6a8506099945') center/cover; height:100vh;">

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <h1>PREMIUM ROOMS</h1>

                <p>Comfort Designed for Your Perfect Stay</p>

                <a href="#rooms" class="btn btn-warning btn-lg px-4 mt-3">
                    Explore Rooms
                </a>

            </div>

        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item hero-slide"
             style="background:url('https://images.unsplash.com/photo-1445019980597-93fa8acb246c') center/cover; height:100vh;">

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <h1>RELAX & ENJOY</h1>

                <p>Where Luxury Meets Nature</p>

                <a href="#about" class="btn btn-warning btn-lg px-4 mt-3">
                    Learn More
                </a>

            </div>

        </div>

    </div>

</div>

<!-- ================= BOOKING BAR ================= -->
<div class="container booking-wrapper">

    <div class="booking-bar">

        <form action="/booking" method="GET" class="row g-3 align-items-end">

            <div class="col-md-3">
                <label class="small text-muted">Check In</label>
                <input type="date" name="checkin" class="form-control">
            </div>

            <div class="col-md-3">
                <label class="small text-muted">Check Out</label>
                <input type="date" name="checkout" class="form-control">
            </div>

            <div class="col-md-3">
                <label class="small text-muted">Room Type</label>
                <select name="room_type" class="form-select">
                    <option>Deluxe Room</option>
                    <option>Suite</option>
                    <option>Family Room</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="small text-muted">Action</label>
                <button class="btn btn-warning w-100 text-white">
                    Check Availability
                </button>
            </div>

        </form>

    </div>

</div>

<!-- ================= ABOUT ================= -->
<section id="about" class="container text-center py-5">

    <h2 class="fw-light">A Luxury Escape in Nature</h2>

    <p class="text-muted mt-3 mx-auto" style="max-width:700px;">
        Experience premium comfort, peaceful surroundings, and world-class hospitality
        designed for unforgettable stays.
    </p>

</section>

<!-- ================= ROOMS ================= -->
<section id="rooms" class="container py-5">

    <h2 class="text-center fw-light mb-4">Our Rooms</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="shadow rounded overflow-hidden">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
                     class="w-100" style="height:280px; object-fit:cover;">
                <div class="p-3">
                    <h5>Deluxe Room</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="shadow rounded overflow-hidden">
                <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32"
                     class="w-100" style="height:280px; object-fit:cover;">
                <div class="p-3">
                    <h5>Luxury Suite</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="shadow rounded overflow-hidden">
                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427"
                     class="w-100" style="height:280px; object-fit:cover;">
                <div class="p-3">
                    <h5>Family Room</h5>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- ================= FACILITIES ================= -->
<section id="facilities" class="bg-light py-5 text-center">

    <h2 class="fw-light mb-4">Facilities</h2>

    <div class="container">

        <div class="row">

            <div class="col-md-3">🍽 Restaurant</div>
            <div class="col-md-3">🏊 Pool</div>
            <div class="col-md-3">🌿 Garden</div>
            <div class="col-md-3">🛎 24/7 Service</div>

        </div>

    </div>

</section>

<!-- ================= CTA ================= -->
<section class="text-center py-5 text-white" style="background:#111;">

    <h2>Ready for Your Luxury Stay?</h2>

    <a href="/booking" class="btn btn-warning mt-3 px-4">
        Reserve Now
    </a>

</section>

<!-- ================= STYLES ================= -->
<style>

/* HERO */
.hero-slide{
    position: relative;
}

.hero-overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.55);
}

.hero-content{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    color:white;
}

.hero-content h1{
    font-size:70px;
    letter-spacing:5px;
    font-weight:300;
}

.hero-content p{
    font-size:18px;
    opacity:0.85;
}


/* PUSH BELOW HERO */
.booking-wrapper{
    margin-top: -80px;
    position: relative;
    z-index: 100;
}

/* LUXURY CARD STYLE */
.booking-bar{
    background: rgba(255,255,255,0.98);
    backdrop-filter: blur(15px);
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    border: 1px solid rgba(0,0,0,0.05);
}

/* INPUT STYLE */
.booking-bar input,
.booking-bar select{
    height: 48px;
    border-radius: 10px;
}

/* BUTTON STYLE */
.booking-bar button{
    height: 48px;
    background: linear-gradient(135deg, #c9a24a, #b08b35);
    border: none;
    font-weight: 600;
    letter-spacing: 1px;
}

.booking-bar button:hover{
    transform: translateY(-2px);
}

</style>

@endsection