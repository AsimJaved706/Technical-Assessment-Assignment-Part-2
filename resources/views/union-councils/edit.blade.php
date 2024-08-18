@extends('layouts.app')

@section('content')
    <h1>Edit Union Council</h1>

    <form action="{{ route('union-councils.update', $unionCouncil->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Union Council Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $unionCouncil->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tehsil_id" class="form-label">Tehsil</label>
            <select name="tehsil_id" id="tehsil_id" class="form-select">
                @foreach($tehsils as $tehsil)
                    <option value="{{ $tehsil->id }}" {{ $unionCouncil->tehsil_id == $tehsil->id ? 'selected' : '' }}>{{ $tehsil->name }}</option>
                @endforeach
            </select>
            @error('tehsil_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Union Council</button>
    </form>
@endsection
