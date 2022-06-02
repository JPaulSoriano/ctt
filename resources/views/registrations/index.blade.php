@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($registrations as $registration)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $registration->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('registrations.show',$product->id) }}">Show</a>
        </td>
    </tr>
    @endforeach
</table>

{!! $registrations->links() !!}

@endsection
