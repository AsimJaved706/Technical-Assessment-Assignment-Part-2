@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('assignments.store') }}">
    @csrf
    <div class="mb-3">
        <label for="province" class="form-label">Province</label>
        <select id="province" name="province_id" class="form-select">
            <option value="">Select Province</option>
            @foreach($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="division" class="form-label">Division</label>
        <select id="division" name="division_id" class="form-select">
            <option value="">Select Division</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('scripts')
<script>
    $('#province').change(function () {
        var provinceId = $(this).val();
        $.ajax({
            url: '/get-divisions/' + provinceId,
            type: 'GET',
            success: function (data) {
                $('#division').html(data);
            }
        });
    });
</script>
@endsection
