@extends('admin.layout')

@section('content')

<h2 class="fw-bold mb-4">🏨 Admin Dashboard</h2>

<!-- STATS CARDS -->
<div class="row g-3">

    <!-- Revenue -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3 text-center">
            <h6>💰 Revenue</h6>
            <h3>Rs {{ $revenue }}</h3>
        </div>
    </div>

    <!-- Total Bookings -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3 text-center">
            <h6>📊 Total Bookings</h6>
            <h3>{{ $totalBookings }}</h3>
        </div>
    </div>

    <!-- Pending -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3 text-center">
            <h6>⏳ Pending</h6>
            <h3>{{ $pendingBookings }}</h3>
        </div>
    </div>

    <!-- Guests -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3 text-center">
            <h6>👥 Total Guests</h6>
            <h3>{{ $totalGuests }}</h3>
        </div>
    </div>

</div>

<!-- SPACE -->
<div class="my-4"></div>

<!-- RECENT BOOKINGS TABLE -->
<div class="card shadow-sm border-0 p-3">

    <h5 class="mb-3">📅 Recent Bookings</h5>

    <table class="table table-hover">

        <thead>
            <tr>
                <th>Name</th>
                <th>Room</th>
                <th>Guests</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->room_type }}</td>
            <td>{{ $booking->guests }}</td>

            <!-- STATUS -->
            <td>
                @if($booking->status == 'pending')
                    <span class="badge bg-warning">Pending</span>
                @elseif($booking->status == 'approved')
                    <span class="badge bg-success">Approved</span>
                @else
                    <span class="badge bg-danger">Rejected</span>
                @endif
            </td>

            <!-- DATE -->
            <td>{{ $booking->created_at->format('d M Y') }}</td>

            <!-- ACTION BUTTONS (ADD HERE) -->
            <td class="d-flex gap-2">

                <!-- APPROVE -->
                <form method="POST" action="/admin/booking/{{ $booking->id }}/approve">
                    @csrf
                    <button class="btn btn-success btn-sm">
                        Approve
                    </button>
                </form>

                <!-- REJECT -->
                <form method="POST" action="/admin/booking/{{ $booking->id }}/reject">
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        Reject
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

</div>

@endsection