@extends('layouts.app')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="container">
    <table class="table table-responsive" id="tracings">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Student No</th>
            <th>Address</th>
            <th>Visitid At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($scanned as $s)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $s->tracing->full_name }}</td>
            <td>{{ $s->tracing->student_no }}</td>
            <td>{{ $s->tracing->full_address }}</td>
            <td>{{ $s->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div> 
   
@endsection