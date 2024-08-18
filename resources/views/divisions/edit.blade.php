@extends('layouts.app')

@section('content')
    <h1>Edit Division</h1>

    <form action="{{ route('divisions.update', $division->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Division Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $division->name }}" required>
        </div>

        <div class="form-group">
            <label for="province_id">Select Province</label>
            <select class="form-control" id="province_id" name="province_id" required>
                @foreach($provinces as $province)
                    <option value="{{ $province->id }}" {{ $division->province_id == $province->id ? 'selected' : '' }}>
                        {{ $province->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
