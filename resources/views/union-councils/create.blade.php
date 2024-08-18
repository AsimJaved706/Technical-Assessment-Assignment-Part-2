@extends('layouts.app')

@section('content')
    <h1>Add Union Council</h1>

    <form action="{{ route('union-councils.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Union Council Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="tehsil_id">Select Tehsil</label>
            <select class="form-control" id="tehsil_id" name="tehsil_id" required>
                @foreach($tehsils as $tehsil)
                    <option value="{{ $tehsil->id }}">{{ $tehsil->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
