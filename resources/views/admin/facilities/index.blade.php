@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Facilities</h3>

    <a href="{{ route('facilities.create') }}" class="btn btn-primary">
        + Add Facility
    </a>
</div>

<table class="table table-bordered bg-white">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Icon</th>
        <th>Action</th>
    </tr>

    @foreach($facilities as $facility)

    <tr>
        <td>{{ $facility->id }}</td>
        <td>{{ $facility->name }}</td>
        <td>{{ $facility->icon }}</td>

        <td class="d-flex gap-2">

            <a href="{{ route('facilities.edit', $facility->id) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form method="POST" action="{{ route('facilities.destroy', $facility->id) }}">
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