@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Households</h1>
        <a href="{{ route('households.create') }}" class="btn btn-primary">Add Household</a>
    </div>

    @if($households->isEmpty())
        <p>No households available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Union Council</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($households as $household)
                    <tr>
                        <td>{{ $household->id }}</td>
                        <td>{{ $household->name }}</td>
                        <td>{{ $household->unionCouncil->name }}</td>
                        <td>
                            <a href="{{ route('households.edit', $household->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('households.destroy', $household->id) }}" method="POST" style="display: inline-block;">
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
