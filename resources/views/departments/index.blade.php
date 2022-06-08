@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-6">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        @can('isAdmin')
        <div class="my-2">
        <a class="btn btn-primary" href="{{ route('departments.create') }}">Create</a>
        </div>
        <div class="card">
        <div class="card-header bg-primary text-white">Departments</div>
        <div class="card-body">
            <table class="table table-borderless table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                </tr>
            </thead>
                @foreach ($departments as $department)
                <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $department->name }}</td>
                </tr>
            </tbody>
                @endforeach
            </table>
            {!! $departments->links() !!}
        </div>
        </div>
        @endcan
    </div>
</div>
@endsection