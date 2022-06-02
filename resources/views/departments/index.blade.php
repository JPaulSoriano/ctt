@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row justify-content-center">
<div class="col-lg-8">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">Register</div>
        <div class="card-body">
    <table class="table table-borderless table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
    </thead>
	    @foreach ($departments as $department)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $department->name }}</td>
	    </tr>
	    @endforeach
    </table>
</div>
</div>


    {!! $departments->links() !!}


    </div>
</div>
</div>
@endsection