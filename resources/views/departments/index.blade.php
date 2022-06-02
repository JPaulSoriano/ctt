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


    <table class="table table-borderless table-sm">
    <thead class="bg-primary text-white text-center">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
	    @foreach ($departments as $department)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $department->name }}</td>
	    </tr>
	    @endforeach
    </table>


    {!! $departments->links() !!}


    </div>
</div>
</div>
@endsection