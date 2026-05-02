<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
          rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>

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

</style>
</head>
<!-- ================= FLOATING CONTACT BUTTONS ================= -->

<!-- WHATSAPP -->
<a href="https://wa.me/9779800000000?text=Hello%20Hotel%20Riverside%2C%20I%20want%20to%20book%20a%20room"
   class="float-btn whatsapp"
   target="_blank">
    💬
</a>

<!-- CALL -->
<a href="tel:+9779800000000"
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