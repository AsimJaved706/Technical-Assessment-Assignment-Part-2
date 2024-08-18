@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Divisions</h1>
        <a href="{{ route('divisions.create') }}" class="btn btn-primary">Add Division</a>
    </div>

    @if($divisions->isEmpty())
        <p>No divisions available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Province</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($divisions as $division)
                    <tr>
                        <td>{{ $division->id }}</td>
                        <td>{{ $division->name }}</td>
                        <td>{{ $division->province->name }}</td>
                        <td>
                            <a href="{{ route('divisions.edit', $division->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('divisions.destroy', $division->id) }}" method="POST" style="display: inline-block;">
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
