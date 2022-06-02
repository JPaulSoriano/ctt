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
        </tr>
    </thead>
	    @foreach ($academicyears as $academicyear)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $academicyear->name }}</td>
	    </tr>
	    @endforeach
    </table>


    {!! $academicyears->links() !!}


    </div>
</div>
</div>
@endsection