@extends('layouts.app')

@section('content')
    <h1>Tehsil Details</h1>

    <div class="mb-3">
        <label class="form-label">Name:</label>
        <p>{{ $tehsil->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">District:</label>
        <p>{{ $tehsil->district->name }}</p>
    </div>

    <a href="{{ route('tehsils.index') }}" class="btn btn-secondary">Back</a>
@endsection
