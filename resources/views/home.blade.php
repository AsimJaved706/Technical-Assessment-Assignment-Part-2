@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <hr>

                    <!-- Dynamic Tabs Based on User Roles and Permissions -->
                    <ul class="nav nav-tabs">
                        <!-- Example: Always show a "Home" tab -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>

                        @php
                            // Decode the permissions JSON string
                            $permissions = auth()->user()->permissions;
                        @endphp
@if(auth()->user()->role === 'polio_worker')
<li class="nav-item">
    <a class="nav-link" href="{{ route('assign-household-view') }}">Assign Household</a>
</li>
@endif
                        @if(in_array('manage_provinces', $permissions))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('provinces.index') }}">Manage Provinces</a>
                            </li>
                        @endif

                        @if(in_array('manage_divisions', $permissions))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('divisions.index') }}">Manage Divisions</a>
                            </li>
                        @endif

                        @if(in_array('manage_districts', $permissions))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('districts.index') }}">Manage Districts</a>
                            </li>
                        @endif

                        @if(in_array('manage_tehsils', $permissions))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tehsils.index') }}">Manage Tehsils</a>
                            </li>
                        @endif

                        @if(in_array('manage_union_councils', $permissions))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('union-councils.index') }}">Manage Union Councils</a>
                            </li>
                        @endif

                        @if(in_array('manage_households', $permissions))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('households.index') }}">Manage Households</a>
                            </li>
                        @endif

                        @if(in_array('assign_polio_workers', $permissions))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.assignWorkerForm') }}">Assign Polio Workers</a>
                            </li>
                        @endif

                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
