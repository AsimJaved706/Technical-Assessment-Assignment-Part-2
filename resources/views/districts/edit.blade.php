@extends('layouts.app')

@section('content')
    <h1>Edit District</h1>

    <form action="{{ route('districts.update', $district->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">District Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $district->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="division_id" class="form-label">Division</label>
            <select name="division_id" id="division_id" class="form-select">
                @foreach($divisions as $division)
                    <option value="{{ $division->id }}" {{ $district->division_id == $division->id ? 'selected' : '' }}>{{ $division->name }}</option>
                @endforeach
            </select>
            @error('division_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update District</button>
    </form>
@endsection
