<nav id="mainNavbar">

    <div class="container nav-wrapper">

        <!-- LOGO -->
        <a href="/" class="logo d-flex align-items-center gap-2">

            <img src="{{ asset('images/logo.png') }}" alt="Hotel Logo">

            <span class="hotel-name">Hotel Riverside</span>

        </a>

        <!-- NAV LINKS -->
        <div class="nav-links">

            <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>

            <a href="{{ route('about') }}" class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                About Us
            </a>

            <a href="{{ route('packages') }}" class="nav-item {{ request()->routeIs('packages') ? 'active' : '' }}">
                Stay
            </a>

            <a href="{{ route('facilities') }}" class="nav-item {{ request()->routeIs('facilities') ? 'active' : '' }}">
                Facilities
            </a>

            <a href="{{ route('home') }}#gallery" class="nav-item">
                Gallery
            </a>

            <a href="{{ route('contact') }}" class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                Contact
            </a>

        </div>

        <!-- ACCOUNT + CTA -->
        <div class="nav-right">

            @auth
                <div class="dropdown nav-account">
                    <a
                        href="#"
                        class="nav-item dropdown-toggle"
                        data-bs-toggle="dropdown"
                    >
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('my.bookings') }}">
                                My Bookings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                Profile
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    Sign Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-account">
                    Sign In / Join
                </a>
            @endauth

            <a href="{{ route('booking') }}" class="nav-book-btn">
                Book Now
            </a>

        </div>

    </div>

</nav>
<style>

/* ================= NAVBAR BASE ================= */
#mainNavbar{
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;

    padding: 18px 0;
    transition: all 0.4s ease;

    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(12px);
}

/* SCROLLED STATE */
#mainNavbar.scrolled{
    background: rgba(27,67,50,0.92);
    padding: 12px 0;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

/* ================= CONTAINER ================= */
.nav-wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

/* ================= LOGO ================= */
.logo{
    text-decoration: none;
    flex-shrink: 0;
}

.logo img{
    height: 46px;
    transition: 0.4s ease;
}

#mainNavbar.scrolled .logo img{
    height: 38px;
}

.hotel-name{
    font-size: 19px;
    font-weight: 700;
    letter-spacing: 0.5px;
    color: #fff;
    text-transform: capitalize;
}

/* ================= LINKS ================= */
.nav-links{
    display: flex;
    gap: 26px;
    align-items: center;
    flex: 1;
    justify-content: center;
}

.nav-item{
    position: relative;
    text-decoration: none;
    color: #F3F4F2;
    font-size: 14px;
    font-weight: 400;
    text-transform: capitalize;
    transition: 0.25s ease;
    padding: 4px 0;
}

.nav-item:hover{
    color: var(--accent);
}

.nav-item::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0%;
    height: 2px;
    background: var(--accent);
    transition: 0.25s ease;
}

.nav-item:hover::after,
.nav-item.active::after{
    width: 100%;
}

.nav-item.active{
    color: var(--accent);
}

/* ================= RIGHT SIDE ================= */
.nav-right{
    display: flex;
    align-items: center;
    gap: 20px;
    flex-shrink: 0;
}

.nav-account{
    font-size: 13px;
    white-space: nowrap;
}

.nav-account .dropdown-menu{
    background: #22201B;
    border: 1px solid rgba(122,148,113,0.3);
    border-radius: 8px;
    padding: 6px;
    margin-top: 12px;
}

.nav-account .dropdown-item{
    color: rgba(255,255,255,0.8);
    font-size: 14px;
    border-radius: 6px;
    padding: 8px 12px;
}

.nav-account .dropdown-item:hover{
    background: rgba(103,146,137,0.25);
    color: #fff;
}

/* BOOK NOW BUTTON */
.nav-book-btn{
    padding: 9px 20px;
    background: var(--brand);
    color: #fff;
    border: 2px solid var(--brand);
    border-radius: 4px;
    font-weight: 700;
    font-size: 14px;
    text-decoration: none;
    white-space: nowrap;
    transition: 0.25s ease;
}

.nav-book-btn:hover{
    background: var(--brand-dark);
    border-color: var(--brand-dark);
    color: #fff;
}

/* ================= MOBILE ================= */
@media(max-width: 991px){

    .nav-wrapper{
        flex-wrap: nowrap;
    }

    .hotel-name{
        font-size: 15px;
    }

    .logo img{
        height: 36px;
    }

    .nav-links{
        justify-content: flex-start;
        flex: 1;
        gap: 15px;
        overflow-x: auto;
        white-space: nowrap;
        min-width: 0;
        margin: 0 10px;
    }

    .nav-account{
        display: none;
    }

    .nav-book-btn{
        padding: 8px 14px;
        font-size: 13px;
    }
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
