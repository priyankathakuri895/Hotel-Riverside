<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Riverside Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            margin:0;
            padding:0;
            height:100vh;
            background:
                linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                url('/images/hotel.jpg');
            background-size: cover;
            background-position: center;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family: Arial, sans-serif;
        }

        .login-card{
            width:400px;
            padding:40px;
            border-radius:20px;
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            color:white;
        }

        .login-card h2{
            text-align:center;
            margin-bottom:10px;
            font-weight:bold;
        }

        .login-card p{
            text-align:center;
            color:#ddd;
            margin-bottom:30px;
        }

        .form-control{
            background: rgba(255,255,255,0.15);
            border:none;
            color:white;
            height:50px;
            border-radius:10px;
        }

        .form-control::placeholder{
            color:#ddd;
        }

        .form-control:focus{
            background: rgba(255,255,255,0.2);
            color:white;
            box-shadow:none;
        }

        .btn-login{
            background:#f59e0b;
            border:none;
            height:50px;
            border-radius:10px;
            font-weight:bold;
            color:white;
        }

        .btn-login:hover{
            background:#d97706;
        }

        a{
            color:#facc15;
            text-decoration:none;
        }
    </style>
</head>

<body>

<div class="login-card">

    <h2>🏨 Hotel Riverside</h2>
    <p>Luxury Hotel Management</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="Email Address"
                   required>
        </div>

        <div class="mb-3">
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Password"
                   required>
        </div>

        <div class="d-flex justify-content-between mb-3">

            <div>
                <input type="checkbox" name="remember">
                <small> Remember me</small>
            </div>

            <a href="#">Forgot?</a>

        </div>

        <button class="btn btn-login w-100">
            Login
        </button>

    </form>

    <div class="text-center mt-4">
        <small>
            Don't have an account?
            <a href="{{ route('register') }}">Register</a>
        </small>
    </div>

</div>

</body>
</html>