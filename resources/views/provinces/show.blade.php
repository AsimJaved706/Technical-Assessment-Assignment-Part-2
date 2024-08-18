@extends('layouts.app')

@section('content')
    <h1>Province Details</h1>

    <div class="mb-3">
        <label class="form-label">Name:</label>
        <p>{{ $province->name }}</p>
    </div>

    <a href="{{ route('provinces.index') }}" class="btn btn-secondary">Back</a>
@endsection
