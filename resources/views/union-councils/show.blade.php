@extends('layouts.app')

@section('content')
    <h1>Union Council Details</h1>

    <div class="mb-3">
        <label class="form-label">Name:</label>
        <p>{{ $unionCouncil->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Tehsil:</label>
        <p>{{ $unionCouncil->tehsil->name }}</p>
    </div>

    <a href="{{ route('union-councils.index') }}" class="btn btn-secondary">Back</a>
@endsection
