@extends('layouts.app')

@section('content')
    <h1>Assign Polio Worker</h1>

    <form action="{{ route('admin.assignWorker') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Polio Worker</label>
            <select name="user_id" id="user_id" class="form-select">
                <option value="">Select Worker</option>
                @foreach($workers as $worker)
                    <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                @endforeach
            </select>
            @error('user_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="union_council_id" class="form-label">Union Council</label>
            <select name="union_council_id" id="union_council_id" class="form-select">
                <option value="">Select Union Council</option>
                @foreach($unionCouncils as $unionCouncil)
                    <option value="{{ $unionCouncil->id }}">{{ $unionCouncil->name }}</option>
                @endforeach
            </select>
            @error('union_council_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Assign Worker</button>
    </form>
@endsection
