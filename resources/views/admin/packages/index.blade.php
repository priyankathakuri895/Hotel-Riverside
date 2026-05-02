@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Packages</h3>

    <a href="{{ route('packages.create') }}" class="btn btn-primary">
        + Add Package
    </a>
</div>

<table class="table table-bordered bg-white">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach($packages as $package)

    <tr>
        <td>{{ $package->id }}</td>
        <td>{{ $package->name }}</td>
        <td>Rs {{ $package->price }}</td>

        <td class="d-flex gap-2">

            <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form method="POST" action="{{ route('packages.destroy', $package->id) }}">
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