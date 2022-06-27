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
                        <select class="form-control" name="year" required>
                          <option>First Year</option>
                          <option>Second Year</option>
                          <option>Third Year</option>
                          <option>Fourth Year</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" name="last_name" class="form-control"required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Middle Name:</label>
                        <input type="text" name="middle_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Gender:</label>
                        <select class="form-control" name="gender" required>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Religion:</label>
                        <input type="text" name="religion" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Birthdate:</label>
                        <input type="date" name="birthdate" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Birthplace:</label>
                        <input type="text" name="birthplace" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Nationality:</label>
                        <input type="text" name="nationality" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Phone No.:</label>
                        <input type="number" name="phone_no" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Civil Status:</label>
                        <input type="text" name="civil_status" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Last School Attended:</label>
                        <input type="text" name="last_school" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Father:</label>
                        <input type="text" name="father" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Occupation:</label>
                        <input type="text" name="father_occupation" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="number" name="father_phone" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Mother:</label>
                        <input type="text" name="mother" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Occupation:</label>
                        <input type="text" name="mother_occupation" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="number" name="mother_phone" class="form-control" required>
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