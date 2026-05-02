<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:
            linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url('/images/hotel.jpg');
            background-size:cover;
            background-position:center;
        }

        .register-card{
            width:430px;
            padding:40px;
            border-radius:20px;
            background:rgba(255,255,255,0.12);
            backdrop-filter:blur(10px);
            color:white;
        }

        .form-control{
            height:50px;
            background:rgba(255,255,255,0.15);
            border:none;
            color:white;
        }

        .form-control::placeholder{
            color:#ddd;
        }

        .form-control:focus{
            background:rgba(255,255,255,0.2);
            color:white;
            box-shadow:none;
        }
    </style>
</head>

<body>

<div class="register-card">

    <h2 class="text-center mb-4">🏨 Hotel Riverside</h2>

    <!-- ERRORS -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <input type="text"
                   name="name"
                   class="form-control"
                   placeholder="Full Name"
                   value="{{ old('name') }}"
                   required>
        </div>

        <div class="mb-3">
            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="Email Address"
                   value="{{ old('email') }}"
                   required>
        </div>

        <div class="mb-3">
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Password"
                   required>
        </div>

        <div class="mb-3">
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   placeholder="Confirm Password"
                   required>
        </div>

        <button class="btn btn-warning w-100 py-2">
            Register
        </button>

    </form>

    <div class="text-center mt-3">
        <a href="{{ route('login') }}" class="text-white">
            Already have account? Login
        </a>
    </div>

</div>

</body>
</html>