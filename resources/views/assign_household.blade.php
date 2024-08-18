@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Assign Household</h1>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="householdForm" method="POST" action="{{ route('assign-household') }}">
            @csrf

            <div class="form-group">
                <label for="union_council">Union Council</label>
                <select id="union_council" name="union_council_id" class="form-control">
                    <option value="">Select Union Council</option>
                    @foreach($unionCouncils as $unionCouncil)
                        <option value="{{ $unionCouncil->id }}">{{ $unionCouncil->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="household">Household</label>
                <select id="household" name="household_id" class="form-control" disabled>
                    <option value="">Select Household</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Assign Household</button>
        </form>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#union_council').on('change', function() {
            var unionCouncilId = $(this).val();
            if (unionCouncilId) {
                $.ajax({
                    url: '/get-households/' + unionCouncilId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#household').empty().prop('disabled', false);
                        $('#household').append('<option value="">Select Household</option>');
                        $.each(data, function(key, value) {
                            $('#household').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function() {
                        $('#household').empty().prop('disabled', true);
                    }
                });
            } else {
                $('#household').empty().prop('disabled', true);
            }
        });
    });
</script>
@endsection
