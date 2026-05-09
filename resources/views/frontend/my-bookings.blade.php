@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h2 class="mb-4 fw-bold">My Bookings</h2>

    @if($bookings->isEmpty())
        <div class="alert alert-info">
            You have no bookings yet.
        </div>
    @else

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Room</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Guests</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->room->type ?? 'N/A' }}</td>
                            <td>{{ $booking->check_in }}</td>
                            <td>{{ $booking->check_out }}</td>
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

                            <!-- CANCEL BUTTON -->
                            <td>
                                @if($booking->status == 'pending')

                                    <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Cancel this booking?')">
                                            Cancel
                                        </button>
                                    </form>

                                @else
                                    <span class="text-muted">Locked</span>
                                @endif
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    @endif

</div>

@endsection