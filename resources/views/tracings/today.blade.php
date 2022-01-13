@extends('layouts.app')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="container">
    <table class="table table-responsive" id="tracings">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Visitid At</th>
        </tr>
        @foreach ($today as $t)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $t->tracing->full_name }}</td>
            <td>{{ $t->tracing->full_address }}</td>
            <td>{{ $t->created_at }}</td>
        </tr>
        @endforeach
    </table>
</div> 
   
@endsection