@extends('layouts.app')

@section('content')
    <h1>Edit Province</h1>

    <form action="{{ route('provinces.update', $province->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Province Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $province->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Province</button>
    </form>
@endsection
