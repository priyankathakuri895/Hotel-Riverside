@extends('admin.layout')

@section('content')

<h3>Edit Package</h3>

<form method="POST" action="{{ route('packages.update', $package->id) }}">
@csrf
@method('PUT')

<input name="name" value="{{ $package->name }}" class="form-control mb-2">

<textarea name="description" class="form-control mb-2">{{ $package->description }}</textarea>

<input name="price" value="{{ $package->price }}" class="form-control mb-2">

<button class="btn btn-primary">Update</button>

</form>

@endsection