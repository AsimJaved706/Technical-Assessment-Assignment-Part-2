@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>{{ isset($tehsil) ? 'Edit Tehsil' : 'Add Tehsil' }}</h1>
    </div>

    <form action="{{ isset($tehsil) ? route('tehsils.update', $tehsil->id) : route('tehsils.store') }}" method="POST">
        @csrf
        @if(isset($tehsil))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Tehsil Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $tehsil->name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="district_id">District</label>
            <select name="district_id" class="form-control" required>
                @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ (isset($tehsil) && $tehsil->district_id == $district->id) ? 'selected' : '' }}>
                        {{ $district->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($tehsil) ? 'Update Tehsil' : 'Add Tehsil' }}</button>
    </form>
@endsection
