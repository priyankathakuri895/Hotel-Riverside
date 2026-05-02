@extends('admin.layout')

@section('content')

<h3>Add Facility</h3>

<form method="POST" action="{{ route('facilities.store') }}">
@csrf

<input name="name" class="form-control mb-2" placeholder="Facility Name">

<input name="icon" class="form-control mb-2" placeholder="Icon (e.g. 🌿 🚙 💃)">

<textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

<button class="btn btn-success">Save</button>

</form>

@endsection