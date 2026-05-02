@extends('admin.layout')

@section('content')

<h3>Edit Facility</h3>

<form method="POST" action="{{ route('facilities.update', $facility->id) }}">
@csrf
@method('PUT')

<input name="name" value="{{ $facility->name }}" class="form-control mb-2">

<input name="icon" value="{{ $facility->icon }}" class="form-control mb-2">

<textarea name="description" class="form-control mb-2">{{ $facility->description }}</textarea>

<button class="btn btn-primary">Update</button>

</form>

@endsection