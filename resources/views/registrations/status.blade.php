@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('status') }}" method="GET">
                <div class="row">

                    <div class="input-group col-sm-12 mb-3">
                        <input type="text" class="form-control" placeholder="Registration Reference Number" name="status">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="Check">Check</button>
                        </div>
                      </div>
                      
                </div>
            </form>
        </div>
    </div>






    <div class="row justify-content-center">
        <div class="col-lg-6">
                @foreach ($registrations as $registration)     
                    <div class="card mb-3">
                        <div class="card-header bg-primary text-white">Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><span class="font-weight-bold badge badge-primary">Full Name:</span> {{ $registration->full_name }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Academic Year:</span> {{ $registration->academic_year->name }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Semester:</span> {{ $registration->semester }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Enrollment Type:</span> {{ $registration->enrollment_type }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Course:</span> {{ $registration->course->name }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Year:</span> {{ $registration->year }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Phone No:</span> {{ $registration->phone_no }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Email:</span> {{ $registration->email }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Address:</span> {{ $registration->address }}</p>
                                    <p><span class="font-weight-bold badge badge-primary">Last School Attended:</span> {{ $registration->last_school }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>

@endsection