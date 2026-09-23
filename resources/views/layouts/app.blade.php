<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="Hotel Riverside & Lodge - a riverside jungle resort in Bharatpur, Chitwan, Nepal offering luxury rooms, packages, canoeing, jeep safari and cultural experiences near Chitwan National Park.">

    <!-- Local business structured data (Schema.org Hotel) -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Hotel",
        "name": "Hotel Riverside & Lodge",
        "image": "{{ asset('images/hotel.jpg') }}",
        "telephone": "+977-984-5088858",
        "priceRange": "$$",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Bharatpur-22, Ghatgain",
            "addressLocality": "Bharatpur",
            "postalCode": "44200",
            "addressRegion": "Bagmati Province",
            "addressCountry": "NP"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": 27.5693638,
            "longitude": 84.3628145
        },
        "url": "{{ url('/') }}",
        "sameAs": [
            "https://www.google.com/maps/place/hotel+Riverside+%26+Lodge/@27.5693125,84.3629943,17z/data=!4m6!3m5!1s0x3994f1489ab5c567:0xf431b348a4ff7ff1!8m2!3d27.5693638!4d84.3628145!16s%2Fg%2F11z8hgwj65"
        ]
    }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=lato:400,500,600,700,900&display=swap"
          rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>

/* ================= BRAND SYSTEM (matches soaltee.com palette) ================= */
:root{
    --brand: #1B4332;
    --brand-dark: #123024;
    --brand-tint: #E7EFE2;
    --accent: #7A9471;
    --accent-dark: #63795C;
    --ink: #1F1F1B;
    --grey: #5C5C5C;
    --footer-bg: #22201B;
}

body{
    font-family: 'Lato', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif !important;
    color: var(--ink);
}

h1, h2, h3, h4, h5, h6{
    font-family: 'Lato', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
}

/* ================= BRAND BUTTON ================= */
.btn-brand{
    display: inline-block;
    background: var(--brand);
    color: #fff;
    border: 2px solid var(--brand);
    border-radius: 4px;
    padding: 10px 26px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: 0.25s ease;
}

.btn-brand:hover{
    background: var(--brand-dark);
    border-color: var(--brand-dark);
    color: #fff;
}

.btn-brand-outline{
    display: inline-block;
    background: transparent;
    color: var(--brand);
    border: 2px solid var(--brand);
    border-radius: 4px;
    padding: 10px 26px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: 0.25s ease;
}

.btn-brand-outline:hover{
    background: var(--brand);
    color: #fff;
}

/* ================= SECTION HEAD (title left / description right) ================= */
.section-head{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-end;
    gap: 20px;
    margin-bottom: 36px;
}

.section-head h2{
    font-size: 30px;
    font-weight: 500;
    color: #000;
    text-transform: capitalize;
    margin: 0;
}

.section-head p{
    color: var(--grey);
    font-size: 14px;
    max-width: 480px;
    margin: 0;
    line-height: 1.6;
}

.section-tint{
    background: var(--brand-tint);
}

.section-pad{
    padding-top: 80px !important;
    padding-bottom: 80px !important;
}

.about-img{
    width: 100%;
    height: 420px;
    object-fit: cover;
    border-radius: 6px;
}

.about-label{
    font-size: 15px;
    font-weight: 700;
    color: var(--brand);
    text-transform: capitalize;
    margin-bottom: 6px;
}

.about-title{
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 18px;
}

.text-muted-grey{
    color: var(--grey);
    line-height: 1.8;
    margin-bottom: 24px;
}

.text-link{
    color: var(--brand);
    font-weight: 700;
    text-decoration: none;
    font-size: 14px;
}

.text-link:hover{
    color: var(--brand-dark);
}

@media(max-width: 768px){
    .section-pad{
        padding-top: 56px !important;
        padding-bottom: 56px !important;
    }
}

/* ================= FLAT CARD (mission/vision/why-choose style) ================= */
.flat-card{
    background: #fff;
    border: 1px solid rgba(0,0,0,0.08);
    border-radius: 6px;
    padding: 32px;
    height: 100%;
}

.flat-card h3, .flat-card h4{
    font-weight: 500;
    margin-bottom: 12px;
}

.flat-card p{
    color: var(--grey);
    margin: 0;
    line-height: 1.7;
}

/* ================= HORIZONTAL SCROLL CARD ROW ================= */
.scroll-row{
    display: flex;
    gap: 16px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    padding-bottom: 10px;
    margin: 0 -4px;
}

.scroll-row::-webkit-scrollbar{
    height: 6px;
}

.scroll-row::-webkit-scrollbar-thumb{
    background: rgba(27,67,50,0.3);
    border-radius: 10px;
}

.scroll-card{
    flex: 0 0 260px;
    scroll-snap-align: start;
    text-decoration: none;
    color: inherit;
    padding: 0 4px;
}

.scroll-card img{
    width: 100%;
    aspect-ratio: 485 / 500;
    object-fit: cover;
    border-radius: 6px;
    display: block;
}

.scroll-card h3, .scroll-card h5{
    margin: 14px 0 4px;
    font-size: 16px;
    font-weight: 700;
    color: #222;
}

.scroll-card .scroll-card-meta{
    font-size: 13px;
    color: var(--brand);
    font-weight: 700;
}

/* COMMON BUTTON STYLE */
.float-btn{
    position: fixed;
    width: 55px;
    height: 55px;
    right: 25px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: white;
    text-decoration: none;
    box-shadow: 0 5px 15px rgba(0,0,0,0.25);
    z-index: 9999;
    transition: 0.3s;
}

/* POSITION STACK */
.whatsapp{ bottom: 30px; background:#25D366; }
.call{ bottom: 100px; background:#0d6efd; }
.email{ bottom: 170px; background:#dc3545; }

/* HOVER EFFECT */
.float-btn:hover{
    transform: scale(1.1);
}

/* TOOLTIP STYLE FEEL (optional enhancement later) */
.float-btn::after{
    content: '';
}

/* ================= SHARED PAGE HEADER (INNER PAGES) ================= */
.page-header{
    padding: 160px 0 50px;
    background:
        linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)),
        url('/images/hotel.jpg');
    background-size: cover;
    background-position: center;
}

.page-header h1{
    font-weight: 500;
    text-transform: capitalize;
}

.page-header .section-eyebrow{
    display: inline-block;
    text-transform: capitalize;
    font-size: 14px;
    color: #fff;
    background: var(--brand);
    padding: 4px 14px;
    border-radius: 4px;
    font-weight: 700;
    margin-bottom: 16px;
}

</style>
</head>
<!-- ================= FLOATING CONTACT BUTTONS ================= -->

<!-- WHATSAPP -->
<a href="https://wa.me/9779845088858?text=Hello%20Hotel%20Riverside%2C%20I%20want%20to%20book%20a%20room"
   class="float-btn whatsapp"
   target="_blank">
    💬
</a>

<!-- CALL -->
<a href="tel:+9779845088858"
   class="float-btn call">
    📞
</a>

<!-- EMAIL -->
<a href="mailto:info@hotelriverside.com?subject=Room%20Booking%20Inquiry"
   class="float-btn email">
    ✉
</a>
<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">

        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)

            <header class="bg-white shadow">

                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    {{ $header }}

                </div>

            </header>

        @endisset

        <!-- Page Content -->
        <main>

            @yield('content')

        </main>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('layouts.footer')
</body>
</html>