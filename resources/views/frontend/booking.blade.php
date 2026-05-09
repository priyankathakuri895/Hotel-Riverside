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

                        <!-- SUCCESS MESSAGE -->
                        @if(session('success'))

                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>

                        @endif

                        <!-- ERROR MESSAGE -->
                        @if(session('error'))

                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>

                        @endif

                        <!-- VALIDATION ERRORS -->
                        @if($errors->any())

                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        <!-- FORM START -->
                        <form method="POST" action="{{ route('booking.store') }}">

                            @csrf

                            <!-- FULL NAME -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Full Name
                                </label>

                                <input
                                    name="name"
                                    type="text"
                                    class="form-control"
                                    value="{{ old('name', auth()->user()->name ?? '') }}"
                                    required
                                >

                            </div>

                            <!-- EMAIL -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    value="{{ old('email', auth()->user()->email ?? '') }}"
                                    required
                                >

                            </div>

                            <!-- DATES -->
                            <div class="row">

                                <!-- CHECK IN -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Check In
                                    </label>

                                    <input
                                        name="check_in"
                                        type="date"
                                        class="form-control"
                                        value="{{ old('check_in') }}"
                                        required
                                    >

                                </div>

                                <!-- CHECK OUT -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Check Out
                                    </label>

                                    <input
                                        name="check_out"
                                        type="date"
                                        class="form-control"
                                        value="{{ old('check_out') }}"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- GUESTS + ROOM -->
                            <div class="row">

                                <!-- GUESTS -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Guests
                                    </label>

                                    <input
                                        name="guests"
                                        type="number"
                                        class="form-control"
                                        value="{{ old('guests') }}"
                                        min="1"
                                        required
                                    >

                                </div>

                                <!-- ROOM -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Select Room
                                    </label>

                                    <select
                                        name="room_id"
                                        class="form-select"
                                        required
                                    >

                                        <option value="">
                                            -- Select Room --
                                        </option>

                                        @foreach($rooms as $room)

                                            <option
                                                value="{{ $room->id }}"
                                                {{ old('room_id') == $room->id ? 'selected' : '' }}
                                            >

                                                {{ $room->room_number }}
                                                - {{ $room->type }}
                                                (Rs {{ $room->price }})

                                            </option>

                                        @endforeach

                                    </select>

                                </div>

                            </div>

                            <!-- MESSAGE -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Special Request
                                </label>

                                <textarea
                                    name="message"
                                    class="form-control"
                                    rows="4"
                                >{{ old('message') }}</textarea>

                            </div>

                            <!-- BUTTONS -->
                            <div class="text-center mt-4">

                                <!-- SUBMIT -->
                                <button
                                    type="submit"
                                    class="btn btn-warning btn-lg px-5"
                                >
                                    Confirm Booking
                                </button>

                                <!-- CANCEL -->
                                <a
                                    href="{{ route('home') }}"
                                    class="btn btn-outline-dark btn-lg px-5"
                                >
                                    Cancel
                                </a>

                            </div>

                        </form>
                        <!-- FORM END -->

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection