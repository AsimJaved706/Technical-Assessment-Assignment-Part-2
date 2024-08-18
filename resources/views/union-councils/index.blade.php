@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Union Councils</h1>
        <a href="{{ route('union-councils.create') }}" class="btn btn-primary">Add Union Council</a>
    </div>

    @if($unionCouncils->isEmpty())
        <p>No union councils available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tehsil</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unionCouncils as $unionCouncil)
                    <tr>
                        <td>{{ $unionCouncil->id }}</td>
                        <td>{{ $unionCouncil->name }}</td>
                        <td>{{ $unionCouncil->tehsil->name }}</td>
                        <td>
                            <a href="{{ route('union-councils.edit', $unionCouncil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('union-councils.destroy', $unionCouncil->id) }}" method="POST" style="display: inline-block;">
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
