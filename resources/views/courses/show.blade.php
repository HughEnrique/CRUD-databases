@extends('layouts.create')

@section('title','Students of this Course')

@section('title1','Students of this Course')

@section('c','active')

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
			    </tr>
			  </thead>
		@foreach($coursestudents as $coursestudent)
				@foreach($students as $student)
					@if(($coursestudent->course_id == $courses) && ($coursestudent->student_id == $student->id))
						<tbody>
						    <tr>
						      <td>{{$student->name}}</td>
						      <td>{{$student->lastname}}</td>
						      <td>{{$student->ci}}</td>
						      <td>{{$student->address}}</td>
						      <td>{{$student->city}}</td>
						      <td>{{$student->phone}}</td>
						    </tr>
						  </tbody>
					@endif
				@endforeach
		@endforeach
		</table>
	</div>
	
@endsection