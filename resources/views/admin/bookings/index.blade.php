@extends('admin.layout')

@section('title', 'Bookings')

@section('content')

<h2 class="mb-4">All Bookings</h2>

<table class="table table-bordered table-hover bg-white">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Guests</th>
            <th>Room</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach($bookings as $booking)

        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->check_in }}</td>
            <td>{{ $booking->check_out }}</td>
            <td>{{ $booking->guests }}</td>
            <td>{{ $booking->room_type }}</td>

            <td>
                <span class="badge bg-warning">
                    {{ $booking->status }}
                </span>
            </td>

            <td class="d-flex gap-1">

                <!-- APPROVE -->
                <form action="/admin/booking/{{ $booking->id }}/approve" method="POST">
                    @csrf
                    <button class="btn btn-success btn-sm">
                        Approve
                    </button>
                </form>

                <!-- DELETE -->
                <form action="/admin/booking/{{ $booking->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection