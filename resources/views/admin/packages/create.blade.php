@extends('admin.layout')

@section('content')

<h3>Add Package</h3>

<form method="POST" action="{{ route('packages.store') }}">
@csrf

<input name="name" class="form-control mb-2" placeholder="Package Name">

<textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

<input name="price" type="number" class="form-control mb-2" placeholder="Price">

<button class="btn btn-success">Save</button>

</form>

@endsection