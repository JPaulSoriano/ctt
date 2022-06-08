@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @can('isAdmin')
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                            <label>Select Department</label>
                            <select class="form-control" name="department_id">
                            @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                            </select>
                </div>
            </div>
            <div class="col-sm-12 ">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @endcan
    </div>
</div>
@endsection