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
            <th>Registered at</th>
            <th>Name</th>
            <th>Student No</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($registrations as $registration)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $registration->created_at }}</td>
            <td>{{ $registration->full_name }}</td>
            <td>{{ $registration->student_no }}</td>
            <td>{{ $registration->email }}</td>
            <td>{{ $registration->phone }}</td>
            <td>{{ $registration->full_address }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
</div>   



@endsection