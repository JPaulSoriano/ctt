@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form action="{{ route('status') }}" method="GET">
                <div class="row">

                    <div class="input-group col-sm-12 mb-3">
                        <input type="text" class="form-control" placeholder="Registration Reference Number" name="status">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="Check">Search</button>
                        </div>
                      </div>
                      
                </div>
            </form>
        </div>
    </div>






    <div class="row justify-content-center">
        <div class="col-lg-8">
                @foreach ($registrations as $registration)     
                    <div class="card mb-3">
                        <div class="card-header bg-primary text-white">Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="email" class="form-control" value="{{ $registration->last_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="email" class="form-control" value="{{ $registration->first_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="email" class="form-control" value="{{ $registration->middle_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="email" class="form-control" value="{{ $registration->gender }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="email" class="form-control" value="{{ $registration->religion }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="email" class="form-control" value="{{ $registration->nationality }}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Civil Status</label>
                                        <input type="email" class="form-control" value="{{ $registration->civil_status }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile No</label>
                                        <input type="email" class="form-control" value="{{ $registration->phone_no }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $registration->email }}">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="email" class="form-control" value="{{ $registration->address }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Last School Attended</label>
                                        <input type="email" class="form-control" value="{{ $registration->last_school }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>ID Number</label>
                                        <input type="email" class="form-control" value="{{ $registration->perma_id }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Father</label>
                                        <input type="email" class="form-control" value="{{ $registration->father }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Father's Occupation</label>
                                        <input type="email" class="form-control" value="{{ $registration->father_occupation }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Father's Mobile No</label>
                                        <input type="email" class="form-control" value="{{ $registration->father_phone }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Mother</label>
                                        <input type="email" class="form-control" value="{{ $registration->mother }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Mother's Occupation</label>
                                        <input type="email" class="form-control" value="{{ $registration->mother_occupation }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Mother's Mobile No</label>
                                        <input type="email" class="form-control" value="{{ $registration->mother_phone }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>

@endsection