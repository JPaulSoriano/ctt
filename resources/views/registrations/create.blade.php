@extends('layouts.app')

@section('content')
   
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
<div class="card">
    <div class="card-header bg-primary text-white">Register</div>
    <div class="card-body">
        <form action="{{ route('registrations.store') }}" method="POST">
            @csrf
        
            <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Semester:</label>
                        <select class="form-control" name="semester">
                          <option>First Semester</option>
                          <option>Second Semester</option>
                          <option>Summer</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Enrollment Type:</label>
                        <select class="form-control" name="enrollment_type">
                          <option>New</option>
                          <option>Transferee</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                                <label>Course</label>
                                <select class="form-control" name="course_id">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Year:</label>
                        <select class="form-control" name="year">
                          <option>First Year</option>
                          <option>Second Year</option>
                          <option>Third Year</option>
                          <option>Fourth Year</option>
                          <option>Fift Year</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Middle Name:</label>
                        <input type="text" name="middle_name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Phone No.:</label>
                        <input type="text" name="phone_no" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Last School:</label>
                        <input type="text" name="last_school" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection