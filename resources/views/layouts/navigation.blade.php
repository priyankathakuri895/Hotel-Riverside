<nav id="mainNavbar">

    <div class="container nav-wrapper">

        <!-- LOGO -->
        <a href="/" class="logo d-flex align-items-center gap-3">

            <img src="{{ asset('images/logo.png') }}" alt="Hotel Logo">

            <div class="brand-text">

                <span class="hotel-name">Hotel Riverside</span>

                <span class="brand-line"></span>

                <span class="tagline">Luxury Stay & Riverside Resort</span>

            </div>

        </a>
        <!-- NAV LINKS -->
        <div class="nav-links">

            <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>

            <a href="{{ route('about') }}" class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>

            <a href="{{ route('packages') }}" class="nav-item {{ request()->routeIs('packages') ? 'active' : '' }}">
                Packages
            </a>

            <a href="{{ route('facilities') }}" class="nav-item {{ request()->routeIs('facilities') ? 'active' : '' }}">
                Facilities
            </a>

            <a href="{{ route('booking') }}" class="nav-book-btn">
                Book Now
            </a>
        </div>
    </div>

</nav>
<style>

/* NAV WRAPPER */
.nav-links{
    display: flex;
    align-items: center;
    gap: 30px;
}

/* LINK STYLE */
.nav-item{
    position: relative;
    text-decoration: none;
    color: white;
    font-size: 15px;
    letter-spacing: 1px;
    font-weight: 400;
    transition: 0.3s ease;
    padding: 6px 0;
}

/* HOVER ANIMATION LINE */
.nav-item::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0%;
    height: 2px;
    background: #c9a24a;
    transition: 0.3s ease;
}

/* HOVER EFFECT */
.nav-item:hover{
    color: #c9a24a;
    transform: translateY(-2px);
}

.nav-item:hover::after{
    width: 100%;
}

/* ACTIVE PAGE */
.nav-item.active{
    color: #c9a24a;
}

.nav-item.active::after{
    width: 100%;
}

/* BOOK NOW BUTTON (HOTEL CTA STYLE) */
.book-now-btn{
    padding: 10px 20px;
    background: linear-gradient(135deg, #c9a24a, #b08b35);
    color: #fff;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 500;
    letter-spacing: 1px;
    font-size: 14px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 25px rgba(201,162,74,0.25);
    margin-left: 10px;
}

/* HOVER EFFECT */
.book-now-btn:hover{
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(201,162,74,0.35);
    color: #fff;
}


/* BOOK NOW (MATCH CHECK AVAILABILITY STYLE) */
.nav-book-btn{
    padding: 10px 20px;
    background: linear-gradient(135deg, #c9a24a, #b08b35);
    color: #fff;
    border-radius: 10px;
    font-weight: 600;
    letter-spacing: 1px;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
}

/* HOVER EFFECT SAME FEEL AS FORM BUTTON */
.nav-book-btn:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    background: linear-gradient(135deg, #b08b35, #9a772c);
}
/* ================= NAVBAR BASE ================= */
#mainNavbar{
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;

    padding: 20px 0;
    transition: all 0.4s ease;

    background: rgba(0,0,0,0.15);
    backdrop-filter: blur(12px);
}

/* SCROLLED STATE */
#mainNavbar.scrolled{
    background: rgba(0,0,0,0.85);
    padding: 10px 0;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

/* ================= CONTAINER ================= */
.nav-wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* ================= LOGO ================= */
.logo img{
    height: 60px;
    transition: 0.4s ease;
}

#mainNavbar.scrolled .logo img{
    height: 48px;
}

/* ================= LINKS ================= */
.nav-links{
    display: flex;
    gap: 30px;
    align-items: center;
}

/* NAV ITEMS */
.nav-item{
    position: relative;
    text-decoration: none;
    color: white;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 0.5px;
    transition: 0.3s;
}

/* HOVER COLOR */
.nav-item:hover{
    color: #c9a24a;
}

/* UNDERLINE ANIMATION */
.nav-item::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0%;
    height: 2px;
    background: #c9a24a;
    transition: 0.3s ease;
}

.nav-item:hover::after{
    width: 100%;
}


/* BOOK NOW BUTTON */
.book-now-btn{
    padding: 10px 18px;
    background: linear-gradient(135deg, #c9a24a, #b08b35);
    color: black !important;
    font-weight: 600;
    border-radius: 30px;
    text-decoration: none;
    letter-spacing: 1px;
    transition: 0.3s;
    box-shadow: 0 8px 20px rgba(201,162,74,0.3);
}

/* HOVER EFFECT */
.book-now-btn:hover{
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(201,162,74,0.5);
}

/* NAV ALIGN FIX */
.nav-links{
    display: flex;
    gap: 25px;
    align-items: center;
}

/* ================= MOBILE (simple inline scroll) ================= */
@media(max-width: 768px){
    .nav-links{
        gap: 15px;
        overflow-x: auto;
        white-space: nowrap;
    }

    .nav-item{
        font-size: 13px;
    }
}

/* BRAND CONTAINER */
.logo{
    text-decoration: none;
}

/* LOGO IMAGE */
.logo img{
    height: 62px;
    transition: 0.4s ease;
    filter: drop-shadow(0 5px 10px rgba(0,0,0,0.3));
}

/* TEXT WRAPPER */
.brand-text{
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* HOTEL NAME (MAIN) */
.hotel-name{
    font-size: 22px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #ffffff;
    text-transform: uppercase;
    position: relative;
}

/* GOLD LINE UNDER NAME */
.brand-line{
    width: 60px;
    height: 2px;
    background: linear-gradient(90deg, #c9a24a, transparent);
    margin: 4px 0;
    border-radius: 10px;
}

/* TAGLINE */
.tagline{
    font-size: 12px;
    color: rgba(255,255,255,0.75);
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

/* HOVER EFFECT */
.logo:hover .hotel-name{
    color: #c9a24a;
    transition: 0.3s;
}

.logo:hover .brand-line{
    width: 80px;
    transition: 0.3s;
}

/* SCROLL EFFECT */
#mainNavbar.scrolled .logo img{
    height: 48px;
}

#mainNavbar.scrolled .hotel-name{
    font-size: 20px;
}


</style>
<script>

window.addEventListener('scroll', function () {

    const nav = document.getElementById('mainNavbar');

    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }

});

</script>