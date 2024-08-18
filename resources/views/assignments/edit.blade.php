@extends('layouts.app')

@section('content')
    <h1>Edit Assignment</h1>

    <form action="{{ route('assignments.update', $assignment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" id="user_id" class="form-select">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $assignment->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
            @error('user_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="union_council_id" class="form-label">Union Council</label>
            <select name="union_council_id" id="union_council_id" class="form-select">
                @foreach($unionCouncils as $unionCouncil)
                    <option value="{{ $unionCouncil->id }}" {{ $assignment->union_council_id == $unionCouncil->id ? 'selected' : '' }}>{{ $unionCouncil->name }}</option>
                @endforeach
            </select>
            @error('union_council_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Assignment</button>
    </form>
@endsection
