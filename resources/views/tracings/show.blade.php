@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-primary mb-3">
                <div class="card-header border-0 bg-primary"><div class="text-white mb-0 text-uppercase h2 font-weight-bold text-center">{{$tracing->full_name}}</div></div>
                <div class="card-body text-primary">
                    <div class="text-primary"><i class="bi bi-person-fill"></i> {{$tracing->age}}</div>
                    <div class="text-primary"><i class="bi bi-envelope-fill"></i> {{$tracing->email}}</div>
                    <div class="text-primary"><i class="bi bi-telephone-fill"></i> {{$tracing->phone}}</div>
                    <div class="text-primary"><i class="bi bi-geo-alt-fill"></i> {{$tracing->street}} {{$tracing->city}} {{$tracing->province}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
