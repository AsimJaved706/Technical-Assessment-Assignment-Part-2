@extends('layouts.app')

@section('content')
    <h1>Household Details</h1>

    <div class="mb-3">
        <label class="form-label">Name:</label>
        <p>{{ $household->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Union Council:</label>
        <p>{{ $household->unionCouncil->name }}</p>
    </div>

    <a href="{{ route('households.index') }}" class="btn btn-secondary">Back</a>
@endsection
