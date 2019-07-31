@extends('layouts.temp')

@section('title','Patients Data')

@section('content')


<div class="container" align="center">
<div><h2>Patients Data</h2></div></br>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </nav>


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
        <td>{{date('M d, Y', strtotime($patient->dob))}}</td>
        <td>{{ $patient->division->name}}</td>
        <td>{{ $patient->treatments->first()->created_at}}</td>
        <td>{{ $patient->treatments->first()->name}}</td>
        <td></td>
    </tr>

  @endforeach

  </tbody> 
</table>
</div>
    <div class="pagination justify-content-center">
    {{ $patients -> links()}}
    </div>

@endsection