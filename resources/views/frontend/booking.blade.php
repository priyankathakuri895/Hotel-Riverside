@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Book Your Stay</h1>
        <p class="lead">
            Reserve your luxury experience at Hotel Riverside.
        </p>
    </div>
</section>

<!-- BOOKING FORM -->
<section class="py-5">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow border-0">

                    <div class="card-body p-5">

                        <h2 class="text-center mb-4 fw-bold">
                            Booking Form
                        </h2>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                               <!-- FORM START -->
                            <form method="POST" action="{{ route('booking.store') }}">
                            @csrf

                            <!-- Full Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter your name">
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Enter your email">
                            </div>

                            <div class="row">

                                <!-- Check In -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Check In</label>
                                    <input name="check_in" type="date" class="form-control">
                                </div>

                                <!-- Check Out -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Check Out</label>
                                    <input name="check_out" type="date" class="form-control">
                                </div>

                            </div>

                            <div class="row">

                                <!-- Guests -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Number of Guests</label>
                                    <input name="guests" type="number" class="form-control" placeholder="Guests">
                                </div>

                                <!-- Room Type -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Room Type</label>
                                    <select name="room_type" class="form-select">
                                        <option>Deluxe Room</option>
                                        <option>Luxury Suite</option>
                                        <option>Family Room</option>
                                        <option>Couple Package</option>
                                    </select>
                                </div>

                            </div>

                            <!-- Special Request -->
                            <div class="mb-3">
                                <label class="form-label">Special Request</label>
                                <textarea name="message" class="form-control" rows="4" placeholder="Write something..."></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-warning btn-lg px-5">
                                    Confirm Booking
                                </button>
                                <a href="{{ route('home') }}" class="btn btn-outline-dark btn-lg px-5">
                                    Cancel
                                </a>
                            </div>

                        </form> 
                            <

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection