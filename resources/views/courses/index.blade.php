@extends('layouts.create')

@section('title','Courses List')

@section('title1','Courses List')

@section('content')

	<div class="row" style="margin-top: 50px">
		
		@foreach($courses as $course)

			<div class="card border-dark mb-3" style="max-width: 18rem;">
			  <div class="card-header"><strong>Grade: </strong>{{$course->grado}}</div>
			  <div class="card-body text-dark">
			    <h5 class="card-title"><strong>Teacher: </strong>{{$course->teacher_id}}</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			</div>

		@endforeach

	</div>

@endsection