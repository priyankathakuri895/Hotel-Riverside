@extends('admin.layout')

@section('content')

<h3>Edit Room</h3>

<form method="POST" action="{{ route('rooms.update', $room->id) }}">
@csrf
@method('PUT')

<!-- Room Number -->
<input 
    name="room_number" 
    class="form-control mb-2" 
    value="{{ $room->room_number }}"
    placeholder="Room Number">

<!-- Type -->
<input 
    name="type" 
    class="form-control mb-2" 
    value="{{ $room->type }}"
    placeholder="Type (Deluxe, Suite)">

<!-- Price -->
<input 
    name="price" 
    type="number" 
    class="form-control mb-2" 
    value="{{ $room->price }}"
    placeholder="Price">

<!-- Description -->
<textarea 
    name="description" 
    class="form-control mb-2"
    placeholder="Description">{{ $room->description }}</textarea>

<button class="btn btn-primary">Update</button>

</form>

@endsection