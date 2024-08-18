@extends('layouts.app')

@section('content')
    <h1>Add Division</h1>

    <form action="{{ route('divisions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Division Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="province_id">Select Province</label>
            <select class="form-control" id="province_id" name="province_id" required>
                @foreach($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
