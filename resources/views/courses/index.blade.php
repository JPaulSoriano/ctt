@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
                @can('course-create')
                <a class="btn btn-primary" href="{{ route('courses.create') }}"><i class="bi bi-plus-lg"></i></a>
                @endcan
        </div>
    </div>

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
            <th>Department</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
	    @foreach ($courses as $course)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $course->name }}</td>
            <td>{{ $course->department->name }}</td>
	    </tr>
	    @endforeach
    </table>


    {!! $courses->links() !!}


    </div>
</div>
</div>
@endsection