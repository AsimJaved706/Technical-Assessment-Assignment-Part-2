@extends('layouts.app')

@section('content')
    <h1>Assignment Details</h1>

    <div class="mb-3">
        <label class="form-label">User:</label>
        <p>{{ $assignment->user->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Union Council:</label>
        <p>{{ $assignment->unionCouncil->name }}</p>
    </div>

    <a href="{{ route('assignments.index') }}" class="btn btn-secondary">Back</a>
@endsection
