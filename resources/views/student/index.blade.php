@extends('layouts.create')

@section('title', 'Student List')
@section('title1', 'Student List')
@section('content')
	<div class="row" style="margin-top: 50px;">
			<table class="table text-center">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">C.I.</th>
			      <th scope="col">Address</th>
			      <th scope="col">City</th>
			      <th scope="col">Phone</th>
			      <th scope="col">Option</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($students as $student)
			    <tr>
			      <td>{{$student->name}}</td>
			      <td>{{$student->lastname}}</td>
			      <td>{{$student->ci}}</td>
			      <td>{{$student->address}}</td>
			      <td>{{$student->city}}</td>
			      <td>{{$student->phone}}</td>
			      <td><a href="/students/{{$student->slug}}" class="btn btn-primary">Ver</a></td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
	</div>

@endsection