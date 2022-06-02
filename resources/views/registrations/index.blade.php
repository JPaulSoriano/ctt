@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<div class="card">
    <div class="card-header bg-primary text-white">Registrations</div>
    <div class="card-body">
<table class="table table-borderless table-responsive">
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Ref No</th>
        <th>A.Y.</th>
        <th>Semester</th>
        <th>Type</th>
    </tr>
</thead>
    @foreach ($registrations as $registration)
<tbody>
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $registration->full_name }}</td>
        <td>{{ $registration->address }}</td>
        <td>{{ $registration->email }}</td>
        <td>{{ $registration->phone_no }}</td>
        <td>{{ $registration->reg_ref }}</td>
        <td>{{ $registration->academic_year->name }}</td>
        <td>{{ $registration->semester }}</td>
        <td>{{ $registration->enrollment_type }}</td>
    </tr>
</tbody>
    @endforeach
</table>
</div>
</div>
{!! $registrations->links() !!}

@endsection
