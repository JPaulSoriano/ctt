@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2 my-1">
            <div class="card">
                <div class="card-header bg-primary text-white">Scanned Today</div>
                    <div class="card-body text-center">
                        <h2 class="font-weight-bold">{{ $today}}</h2>
                        <a href="{{ route('today') }}">Show</a>
                    </div>
            </div>
        </div>
        <div class="col-md-2 my-1">
            <div class="card">
                <div class="card-header bg-primary text-white">Scanned</div>
                    <div class="card-body text-center">
                        <h2 class="font-weight-bold">{{ $scanned}}</h2>
                        <a href="{{ route('scanned') }}">Show</a>
                    </div>
            </div>
        </div>
        <div class="col-md-2 my-1">
            <div class="card">
                <div class="card-header bg-primary text-white">Registered</div>
                    <div class="card-body text-center">
                        <h2 class="font-weight-bold">{{ $registrations}}</h2>
                        <a href="{{ route('tracings.index') }}">Show</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
