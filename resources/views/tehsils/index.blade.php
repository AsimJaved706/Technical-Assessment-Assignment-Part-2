@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tehsils</h1>
        <a href="{{ route('tehsils.create') }}" class="btn btn-primary">Add Tehsil</a>
    </div>

    @if($tehsils->isEmpty())
        <p>No tehsils available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>District</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tehsils as $tehsil)
                    <tr>
                        <td>{{ $tehsil->id }}</td>
                        <td>{{ $tehsil->name }}</td>
                        <td>{{ $tehsil->district->name }}</td>
                        <td>
                            <a href="{{ route('tehsils.edit', $tehsil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tehsils.destroy', $tehsil->id) }}" method="POST" style="display: inline-block;">
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
