@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
@can('isAdmin')
<div class="my-2">
<a class="btn btn-primary" href="{{ route('courses.create') }}">Create</a>
</div>
<div class="card">
<div class="card-header bg-primary text-white">Courses</div>
<div class="card-body">
    <table class="table table-borderless table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Department</th>
        </tr>
    </thead>
	    @foreach ($courses as $course)
        <tbody>
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $course->name }}</td>
            <td>{{ $course->department->name }}</td>
	    </tr>
    </tbody>
	    @endforeach
    </table>
    {!! $courses->links() !!}
</div>
</div>
@endcan
@endsection