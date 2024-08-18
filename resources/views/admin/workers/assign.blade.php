@extends('layouts.app')

@section('content')
    <h1>Assign Polio Worker to Union Council</h1>

    <form action="{{ route('admin.assignWorker') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">Polio Worker</label>
            <select name="user_id" id="user_id" class="form-control">
                <option value="">Select Worker</option>
                @foreach($workers as $worker)
                    <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="union_council_id">Union Council</label>
            <select name="union_council_id" id="union_council_id" class="form-control">
                <option value="">Select Union Council</option>
                @foreach($unionCouncils as $unionCouncil)
                    <option value="{{ $unionCouncil->id }}">{{ $unionCouncil->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Assign Worker</button>
    </form>
@endsection
