@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>{{ isset($province) ? 'Edit Province' : 'Add Province' }}</h1>
    </div>

    <form action="{{ isset($province) ? route('provinces.update', $province->id) : route('provinces.store') }}" method="POST">
        @csrf
        @if(isset($province))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Province Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $province->name ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($province) ? 'Update Province' : 'Add Province' }}</button>
    </form>
@endsection
