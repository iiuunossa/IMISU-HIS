@extends('layouts.temp')

@section('title','Patients Data')

@section('content')


<div class="container" align="center">
<div><h2>Patients Data</h2></div></br>

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search "> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>


<table class="table">
  <thead>
    <tr>
        <th scope="col">Patient Name</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Division Name</th>
        <th scope="col">Last Treatement Date</th>
        <th scope="col">Last Treatement Name</th>
  </thead>
  <tbody>
  @foreach($patients as $patient)
    <tr>
        <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
        <td>{{ $patient->dob }}</td>
        <td>{{ $patient->division_name }}</td>
        <td>{{ $patient->latest_treatment}}</td>
        <td>{{ $patient->subname}}</td>
        <td></td>
    </tr>

  @endforeach

  </tbody> 
</table>

</div>

@endsection