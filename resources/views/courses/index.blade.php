@extends('layouts.create')

@section('title','Courses List')

@section('title1','Courses List')

@section('c','active')

@section('content')

	<div class="row" style="margin-top: 50px">
		
		@foreach($courses as $course)
		
		<div class="col-sm-4 text-center">
			<div class="card border-dark mb-3" style="max-width: 20rem;">
			  <div class="card-header"><strong>Grade: </strong>{{$course->grado}}</div>
			  <div class="card-body text-dark">
			    <p class="card-text"></p>
			    <a href="/courses/{{$course->id}}" style="margin: 10px;" class="btn btn-dark">See students...</a>
			  </div>
			</div>
		</div>	
			
		@endforeach

	</div>

@endsection