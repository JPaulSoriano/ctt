@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif
<div class="my-2">
<a class="btn btn-primary" href="{{ route('academicyears.create') }}">Create</a>
</div>
<div class="card">
<div class="card-header bg-primary text-white">Courses</div>
<div class="card-body">
    <table class="table table-borderless ">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
    </thead>
	    @foreach ($academicyears as $academicyear)
        <tbody>
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $academicyear->name }}</td>
	    </tr>
    </tbody>
	    @endforeach
    </table>
    {!! $academicyears->links() !!}
</div>
</div>
@endsection