@extends('layouts.app')

@section('content')
    <h1>Add Household</h1>

    <form action="{{ route('households.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Household Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="union_council_id">Select Union Council</label>
            <select class="form-control" id="union_council_id" name="union_council_id" required>
                @foreach($unionCouncils as $unionCouncil)
                    <option value="{{ $unionCouncil->id }}">{{ $unionCouncil->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
