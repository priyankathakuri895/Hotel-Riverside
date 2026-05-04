<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Riverside Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #0f172a;
            color: white;
            padding-top: 20px;
        }

        .sidebar h3 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #cbd5e1;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #1e293b;
            color: white;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .active {
            background: #2563eb;
            color: white !important;
            border-radius: 6px;
        }

        /* MAIN */
        .main {
            margin-left: 250px;
            padding: 20px;
        }

        /* TOPBAR */
        .topbar {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-box {
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <h3>🏨 Riverside</h3>

    <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class="fas fa-chart-line"></i> Dashboard
    </a>
    <a href="/admin/packages">
    📦 Packages
    </a>
    <a href="/admin/facilities">
    🌿 Facilities
    </a>
    <a href="/admin/rooms">
    🛏 Rooms
    </a>

    <a href="/admin/bookings">
         <i class="fas fa-calendar-check"></i> Bookings 
    </a>

    <a href="#">
        <i class="fas fa-users"></i> Users
    </a>

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>

    <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
        @csrf
    </form>

</div>

<!-- MAIN CONTENT -->
<div class="main">

    <div class="topbar">
        <h4>@yield('title', 'Dashboard')</h4>
        <span>Admin Panel</span>
    </div>

    @yield('content')

</div>

</body>
</html>