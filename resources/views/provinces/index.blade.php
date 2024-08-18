@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Provinces</h1>
        <a href="{{ route('provinces.create') }}" class="btn btn-primary">Add Province</a>
    </div>

    @if($provinces->isEmpty())
        <p>No provinces available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($provinces as $province)
                    <tr>
                        <td>{{ $province->id }}</td>
                        <td>{{ $province->name }}</td>
                        <td>
                            <a href="{{ route('provinces.edit', $province->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('provinces.destroy', $province->id) }}" method="POST" style="display: inline-block;">
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
