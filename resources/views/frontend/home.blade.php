@extends('layouts.app')

@section('content')

<!-- ================= HERO SECTION ================= -->
<section class="hero-section">

    <div class="hero-media" style="background-image: url('/images/hotel.jpg');"></div>
    <div class="hero-overlay"></div>

    <div class="container hero-content">
        <p class="hero-title">Hotel Riverside</p>
    </div>

</section>

<!-- FLOATING AVAILABILITY BAR (normal flow, pulled up over the hero seam) -->
<div class="container availability-wrap">

    <div class="availability-outer">

        <form action="{{ route('booking') }}" method="GET" class="availability-bar">

            <div class="avail-field">
                <label class="avail-label">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg>
                    Check In
                </label>
                <input type="date" class="avail-input" name="check_in">
            </div>

            <div class="avail-field">
                <label class="avail-label">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg>
                    Check Out
                </label>
                <input type="date" class="avail-input" name="check_out">
            </div>

            <div class="avail-field">
                <label class="avail-label">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 4-6 8-6s8 2 8 6"></path></svg>
                    Guests
                </label>
                <input type="number" min="1" value="2" class="avail-input" name="guests">
            </div>

            <button type="submit" class="btn-brand avail-btn">
                Check Availability
            </button>

        </form>

    </div>

</div>

<!-- ================= ABOUT US ================= -->
<section class="py-5 bg-white section-pad">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <img
                    src="/images/about-hotel.jpg"
                    alt="Hotel Riverside"
                    class="img-fluid about-img"
                >
            </div>

            <div class="col-lg-6">

                <h2 class="about-label">About Us</h2>
                <h3 class="about-title">Hotel Riverside</h3>

                <p class="text-muted-grey">
                    Hotel Riverside is a peaceful luxury destination designed
                    for guests who want comfort, nature and unforgettable
                    experiences. Located near the beautiful riverside and
                    surrounded by natural beauty, our hotel offers modern
                    rooms, exciting jungle adventures and authentic cultural
                    experiences.
                </p>

                <a href="{{ route('about') }}" class="btn-brand mt-2">
                    Explore
                </a>

            </div>

        </div>

    </div>
</section>

<!-- ================= STAY ================= -->
<section class="py-5 section-tint section-pad">
    <div class="container">

        <div class="section-head">
            <h2>Stay</h2>
            <p>Refined comfort and genuine hospitality at Hotel Riverside &mdash; choose the package that fits your trip.</p>
        </div>

        <div class="scroll-row">

            <a href="{{ route('packages') }}" class="scroll-card">
                <img src="/images/room2.jpg" alt="Deluxe Package">
                <h3>Deluxe Package</h3>
                <span class="scroll-card-meta">$120 / Night</span>
            </a>

            <a href="{{ route('packages') }}" class="scroll-card">
                <img src="/images/riverside.jpg" alt="Couple Package">
                <h3>Couple Package</h3>
                <span class="scroll-card-meta">$180 / Night</span>
            </a>

            <a href="{{ route('packages') }}" class="scroll-card">
                <img src="/images/rhino.jpg" alt="Family Package">
                <h3>Family Package</h3>
                <span class="scroll-card-meta">$250 / Night</span>
            </a>

        </div>

        <div class="mt-4">
            <a href="{{ route('packages') }}" class="text-link">View All Packages &rarr;</a>
        </div>

    </div>
</section>

<!-- ================= FACILITIES & ACTIVITIES ================= -->
<section class="py-5 bg-white section-pad">
    <div class="container">

        <div class="section-head">
            <h2>Facilities &amp; Activities</h2>
            <p>Adventure, culture and nature at Hotel Riverside.</p>
        </div>

        <div class="scroll-row">

            <a href="{{ route('facilities') }}" class="scroll-card">
                <img src="/images/canoeing.jpg" alt="Canoeing">
                <h3>Canoeing</h3>
            </a>

            <a href="{{ route('facilities') }}" class="scroll-card">
                <img src="/images/jeep-safari.jpg" alt="Jeep Safari">
                <h3>Jeep Safari</h3>
            </a>

            <a href="{{ route('facilities') }}" class="scroll-card">
                <img src="/images/jungle-safari.jpg" alt="Jungle Walk">
                <h3>Jungle Walk</h3>
            </a>

            <a href="{{ route('facilities') }}" class="scroll-card">
                <img src="/images/tharu-dance.jpg" alt="Tharu Cultural Dance">
                <h3>Tharu Cultural Dance</h3>
            </a>

            <a href="{{ route('facilities') }}" class="scroll-card">
                <img src="/images/village-tour.jpg" alt="Village Tour">
                <h3>Village Tour</h3>
            </a>

        </div>

        <div class="mt-4">
            <a href="{{ route('facilities') }}" class="text-link">View All Facilities &rarr;</a>
        </div>

    </div>
</section>

<!-- ================= GALLERY ================= -->
<section id="gallery" class="py-5 section-tint section-pad">
    <div class="container">

        <div class="section-head">
            <h2>Gallery</h2>
            <p>Moments at Hotel Riverside.</p>
        </div>

        <div class="gallery-grid">

            <img src="/images/hotel.jpg" alt="Hotel Riverside">
            <img src="/images/about-hotel.jpg" alt="Hotel Riverside">
            <img src="/images/riverside.jpg" alt="Riverside">
            <img src="/images/canoeing.jpg" alt="Canoeing">
            <img src="/images/jeep-safari.jpg" alt="Jeep Safari">
            <img src="/images/jungle-safari.jpg" alt="Jungle Safari">
            <img src="/images/rhino.jpg" alt="Rhino">
            <img src="/images/tharu-dance.jpg" alt="Tharu Dance">
            <img src="/images/village-tour.jpg" alt="Village Tour">
            <img src="/images/room2.jpg" alt="Room">

        </div>

    </div>
</section>

<style>

/* ================= HERO ================= */
.hero-section{
    position: relative;
    height: 88vh;
    min-height: 600px;
    overflow: hidden;
}

.hero-media{
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
}

.hero-overlay{
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.2);
}

.hero-content{
    position: absolute;
    left: 0;
    right: 0;
    bottom: 110px;
    z-index: 2;
}

.hero-title{
    color: #fff;
    font-size: 30px;
    font-weight: 500;
    margin: 0;
}

/* ================= AVAILABILITY BAR ================= */
.availability-wrap{
    position: relative;
    z-index: 3;
    margin-top: -70px;
    margin-bottom: 40px;
}

.availability-outer{
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 20px 45px rgba(0,0,0,0.2);
    padding: 12px;
}

.availability-bar{
    background: var(--brand-tint);
    border-radius: 4px;
    padding: 20px 24px;
    display: flex;
    align-items: flex-end;
    gap: 24px;
    flex-wrap: wrap;
}

.avail-field{
    display: flex;
    flex-direction: column;
    flex: 1;
    min-width: 140px;
}

.avail-label{
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 11px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: var(--grey);
    margin-bottom: 6px;
}

.avail-input{
    border: none;
    outline: none;
    background: transparent;
    font-size: 15px;
    color: #222;
    font-weight: 700;
}

.avail-btn{
    white-space: nowrap;
}

/* ================= GALLERY GRID ================= */
.gallery-grid{
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 12px;
}

.gallery-grid img{
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 6px;
    transition: transform 0.4s ease;
}

.gallery-grid img:hover{
    transform: scale(1.03);
}

@media(max-width: 768px){

    .hero-content{
        bottom: 150px;
    }

    .hero-title{
        font-size: 22px;
    }

    .availability-outer{
        padding: 10px;
    }

    .availability-bar{
        flex-direction: column;
        align-items: stretch;
        gap: 14px;
        padding: 16px;
    }

    .avail-field{
        min-width: 0;
        width: 100%;
    }

    .avail-btn{
        width: 100%;
        text-align: center;
    }

    .gallery-grid{
        grid-template-columns: repeat(2, 1fr);
    }

    .scroll-card{
        flex: 0 0 200px;
    }

    .section-pad{
        padding-top: 56px !important;
        padding-bottom: 56px !important;
    }
}

</style>

@endsection
