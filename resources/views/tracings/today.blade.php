@extends('layouts.app')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="container">
    <table class="table table-borderless table-responsive" id="tracings">
    <thead class="bg-primary text-white">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Student No</th>
            <th>Address</th>
            <th>Visitid At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($today as $t)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $t->tracing->full_name }}</td>
            <td>{{ $t->tracing->student_no }}</td>
            <td>{{ $t->tracing->full_address }}</td>
            <td>{{ $t->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div> 
   
@endsection