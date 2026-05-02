@extends('admin.layout')

@section('content')

<h3>Add Room</h3>

<form method="POST" action="{{ route('rooms.store') }}">
@csrf

<input name="room_number" class="form-control mb-2" placeholder="Room Number">

<input name="type" class="form-control mb-2" placeholder="Type (Deluxe, Suite)">

<input name="price" type="number" class="form-control mb-2" placeholder="Price">

<textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

<button class="btn btn-success">Save</button>

</form>

@endsection