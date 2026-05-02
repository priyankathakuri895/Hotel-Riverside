@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Rooms</h3>

    <a href="{{ route('rooms.create') }}" class="btn btn-primary">
        + Add Room
    </a>
</div>

<table class="table table-bordered bg-white">

    <tr>
        <th>ID</th>
        <th>Room No</th>
        <th>Type</th>
        <th>Price</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($rooms as $room)

    <tr>
        <td>{{ $room->id }}</td>
        <td>{{ $room->room_number }}</td>
        <td>{{ $room->type }}</td>
        <td>Rs {{ $room->price }}</td>

        <td>
            @if($room->is_available)
                <span class="badge bg-success">Available</span>
            @else
                <span class="badge bg-danger">Booked</span>
            @endif
        </td>

        <td class="d-flex gap-2">

            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form method="POST" action="{{ route('rooms.destroy', $room->id) }}">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-sm">
                    Delete
                </button>
            </form>

        </td>
    </tr>

    @endforeach

</table>

@endsection