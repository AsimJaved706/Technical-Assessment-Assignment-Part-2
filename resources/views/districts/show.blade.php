@extends('layouts.app')

@section('content')
    <h1>District Details</h1>

    <div class="mb-3">
        <label class="form-label">Name:</label>
        <p>{{ $district->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Division:</label>
        <p>{{ $district->division->name }}</p>
    </div>

    <a href="{{ route('districts.index') }}" class="btn btn-secondary">Back</a>
@endsection
