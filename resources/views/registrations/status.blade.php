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
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
                @foreach ($registrations as $registration)
                <form action="{{ route('registrations.update', $registration->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card mb-3">
                        <div class="card-header bg-primary text-white">Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="{{ $registration->last_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" value="{{ $registration->first_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="middle_name" class="form-control" value="{{ $registration->middle_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Course</label>
                                        <input type="text"  class="form-control" value="{{ $registration->course->name }}" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="text" name="gender" class="form-control" value="{{ $registration->gender }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="text" name="religion" class="form-control" value="{{ $registration->religion }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" name="nationality" class="form-control" value="{{ $registration->nationality }}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Civil Status</label>
                                        <input type="text" name="civil_status" class="form-control" value="{{ $registration->civil_status }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile No</label>
                                        <input type="text" name="phone_no" class="form-control" value="{{ $registration->phone_no }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email"  name="email" class="form-control" value="{{ $registration->email }}">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" value="{{ $registration->address }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Last School Attended</label>
                                        <input type="text" name="last_school" class="form-control" value="{{ $registration->last_school }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Father</label>
                                        <input type="text" name="father" class="form-control" value="{{ $registration->father }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Father's Occupation</label>
                                        <input type="text" name="father_occupation" class="form-control" value="{{ $registration->father_occupation }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Father's Mobile No</label>
                                        <input type="text" name="father_phone" class="form-control" value="{{ $registration->father_phone }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Mother</label>
                                        <input type="text" name="mother" class="form-control" value="{{ $registration->mother }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Mother's Occupation</label>
                                        <input type="text" name="mother_occupation" class="form-control" value="{{ $registration->mother_occupation }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Mother's Mobile No</label>
                                        <input type="text" name="mother_phone" class="form-control" value="{{ $registration->mother_phone }}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Save Edits</button>
                        </form>
                            <hr size="4", color=black>  
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Admission</label>
                                    @if($registration->temp_id == null)
                                    <form action="{{ route('tempid', $registration) }}" method="POST">
                                        @csrf
                                        <input type="text" name="temp_id" class="form-control" placeholder="Temp ID">
                                        <button type="submit" class="btn btn-sm btn-success btn-block my-2">Save</button>
                                    </form>
                                    @else
                                    <label>Temporary ID</label>
                                    <input type="text" class="form-control" value="{{ $registration->temp_id }}" readonly>
                                    @endif
                                </div>
                                <div class="col-sm-4">
                                    <label>Payment</label>
                                    @if($registration->or_no == null)
                                    <form action="{{ route('orno', $registration) }}" method="POST">
                                        @csrf
                                        <input type="text" name="or_no" class="form-control" placeholder="Or Number" {{ $registration->temp_id == null ? 'readonly' : '' }}>
                                        <button type="submit" class="btn btn-sm btn-success btn-block my-2">Save</button>
                                    </form>
                                    @else
                                    <label>OR Number</label>
                                    <input type="text" class="form-control" value="{{ $registration->or_no }}" readonly>
                                    @endif
                                </div>
                                <div class="col-sm-4">
                                    <label>Endcoding and Printing</label>
                                    @if($registration->perma_id == null)
                                    <form action="{{ route('permaid', $registration) }}" method="POST">
                                        @csrf
                                        <input type="text" name="perma_id" class="form-control" placeholder="Permanent ID" {{ $registration->or_no == null ? 'readonly' : '' }}>
                                        <button type="submit" class="btn btn-sm btn-success btn-block my-2">Save</button>
                                    </form>
                                    @else
                                    <label>Permanent ID</label>
                                    <input type="text" class="form-control" value="{{ $registration->perma_id }}" readonly>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>

@endsection