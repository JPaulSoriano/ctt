@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
<div class="row">
    <div class="col-sm-7">
            @canany(['isSao', 'isAdmin']) 
            <div class="row my-2">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Admission</div>
                <div class="card-body">
            <table class="table table-borderless table-responsive">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>A.Y.</th>
                    <th>Semester</th>
                    <th>Type</th>
                </tr>
            </thead>
                @foreach ($tempids as $registration)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $registration->full_name }}</td>
                    <td>{{ $registration->address }}</td>
                    <td>{{ $registration->academic_year->name }}</td>
                    <td>{{ $registration->semester }}</td>
                    <td>{{ $registration->enrollment_type }}</td>

                    <td>
                        @if($registration->temp_id == null)
                        <form action="{{ route('tempid', $registration) }}" method="POST">
                            @csrf
                            <input type="text" name="temp_id" class="form-control" placeholder="Temp ID">
                            <button type="submit" class="btn btn-sm btn-success btn-block my-2">Save</button>
                            <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modal-{{ $registration->id }}">View</button>
                        </form>
                        @else
                        @endif
                    </td>


                </tr>
            </tbody>
                @endforeach
            </table>
            {!! $tempids->links() !!}
            </div>
            </div>
            </div>
            </div>
            @endcanany

            @canany(['isCashier', 'isAdmin'])
            <div class="row my-2">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Payment</div>
                <div class="card-body">
            <table class="table table-borderless table-responsive">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>A.Y.</th>
                    <th>Semester</th>
                    <th>Type</th>
                </tr>
            </thead>
                @foreach ($ornos as $registration)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $registration->full_name }}</td>
                    <td>{{ $registration->address }}</td>
                    <td>{{ $registration->academic_year->name }}</td>
                    <td>{{ $registration->semester }}</td>
                    <td>{{ $registration->enrollment_type }}</td>

                    <td>
                        @if($registration->or_no == null)
                        <form action="{{ route('orno', $registration) }}" method="POST">
                            @csrf
                            <input type="text" name="or_no" class="form-control" placeholder="Or Number">
                            <button type="submit" class="btn btn-sm btn-success btn-block my-2">Save</button>
                            <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modal-{{ $registration->id }}">View</button>
                        </form>
                        @else
                        @endif
                    </td>


                </tr>
            </tbody>
                @endforeach
            </table>
            {!! $ornos->links() !!}
            </div>
            </div>
            </div>
            </div>
            @endcanany


            @canany(['isDean', 'isAdmin'])
            <div class="row my-2">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Encoding and Printing</div>
                <div class="card-body">
            <table class="table table-borderless table-responsive">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>A.Y.</th>
                    <th>Semester</th>
                    <th>Type</th>
                </tr>
            </thead>
                @foreach ($permaids as $registration)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $registration->full_name }}</td>
                    <td>{{ $registration->address }}</td>
                    <td>{{ $registration->academic_year->name }}</td>
                    <td>{{ $registration->semester }}</td>
                    <td>{{ $registration->enrollment_type }}</td>

                    <td>
                        @if($registration->perma_id == null)
                        <form action="{{ route('permaid', $registration) }}" method="POST">
                            @csrf
                            <input type="text" name="perma_id" class="form-control" placeholder="Permanent ID">
                            <button type="submit" class="btn btn-sm btn-success btn-block my-2">Save</button>
                            <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modal-{{ $registration->id }}">View</button>
                        </form>
                        @else
                        @endif
                    </td>


                </tr>
            </tbody>
                @endforeach
            </table>
            {!! $permaids->links() !!}
            </div>
            </div>
            </div>
            </div>
            @endcanany
    </div>
    <div class="col-sm-5">
            <div class="row my-2">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Registered Students</div>
                <div class="card-body">
            <table class="table table-borderless table-responsive">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>A.Y.</th>
                    <th>Semester</th>
                    <th>Type</th>
                </tr>
            </thead>
                @foreach ($completed as $complete)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $complete->full_name }}</td>
                    <td>{{ $complete->academic_year->name }}</td>
                    <td>{{ $complete->semester }}</td>
                    <td>{{ $complete->enrollment_type }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modal-{{ $complete->id }}">View</button>
                    </td>
                </tr>
            </tbody>
                @endforeach
            </table>
            {!! $completed->links() !!}
            </div>
            </div>
            </div>
            </div>
    </div>
</div>

@foreach ($registrations as $registration)
    <div class="modal fade" id="modal-{{ $registration->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Academic Year</label>
                            <input type="text" class="form-control" value="{{ $registration->academic_year->name }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Semester</label>
                            <input type="text" class="form-control" value="{{ $registration->semester }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" value="{{ $registration->enrollment_type }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" class="form-control" value="{{ $registration->course->name }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Year</label>
                            <input type="text" class="form-control" value="{{ $registration->year }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="{{ $registration->last_name }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="{{ $registration->first_name }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" value="{{ $registration->middle_name }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" value="{{ $registration->gender }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Religion</label>
                            <input type="text" class="form-control" value="{{ $registration->religion }}"readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Nationality</label>
                            <input type="text" class="form-control" value="{{ $registration->nationality }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Civil Status</label>
                            <input type="text" class="form-control" value="{{ $registration->civil_status }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" class="form-control" value="{{ $registration->phone_no }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="{{ $registration->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" value="{{ $registration->address }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Last School Attended</label>
                            <input type="text" class="form-control" value="{{ $registration->last_school }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Temp ID</label>
                            <input type="text" class="form-control" value="{{ $registration->temp_id }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>ID Number</label>
                            <input type="text" class="form-control" value="{{ $registration->perma_id }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Father</label>
                            <input type="text" class="form-control" value="{{ $registration->father }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Occupation</label>
                            <input type="text" class="form-control" value="{{ $registration->father_occupation }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" class="form-control" value="{{ $registration->father_phone }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Mother</label>
                            <input type="text" class="form-control" value="{{ $registration->mother }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Occupation</label>
                            <input type="text" class="form-control" value="{{ $registration->mother_occupation }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" class="form-control" value="{{ $registration->mother_phone }}" readonly>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        @endforeach
@endsection
