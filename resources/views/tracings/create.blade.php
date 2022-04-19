@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-10">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <label>Whoops!</label> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-primary text-white">Details</div>
                <div class="card-body">
                    <form action="{{ route('tracings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="row">
                            <div class="col-xs-5 col-sm-5 col-md-5">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5">
                                <div class="form-group">
                                    <label>First Name:</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <label>MI:</label>
                                    <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <label>Student No:</label>
                                    <input type="text" name="student_no" class="form-control" placeholder="Student No">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label>Phone:</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label>Street | Barangay:</label>
                                    <input type="text" name="street" class="form-control" placeholder="Street">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label>City | Town:</label>
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label>Province | State:</label>
                                    <input type="text" name="province" class="form-control" placeholder="Province">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection