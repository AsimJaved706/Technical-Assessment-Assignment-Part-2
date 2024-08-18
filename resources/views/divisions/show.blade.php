@extends('layouts.app')

@section('content')
    <h1>Division Details</h1>

    <div class="mb-3">
        <label class="form-label">Name:</label>
        <p>{{ $division->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Province:</label>
        <p>{{ $division->province->name }}</p>
    </div>

    <a href="{{ route('divisions.index') }}" class="btn btn-secondary">Back</a>
@endsection
