@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Districts</h1>
        <a href="{{ route('districts.create') }}" class="btn btn-primary">Add District</a>
    </div>

    @if($districts->isEmpty())
        <p>No districts available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Division</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($districts as $district)
                    <tr>
                        <td>{{ $district->id }}</td>
                        <td>{{ $district->name }}</td>
                        <td>{{ $district->division->name }}</td>
                        <td>
                            <a href="{{ route('districts.edit', $district->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('districts.destroy', $district->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
