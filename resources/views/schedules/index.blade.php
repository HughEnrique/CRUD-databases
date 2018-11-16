@extends('layouts.create')

@section('title','Schedules list')

@section('title1','Schedules list')

@section('content')

	<div class="row">
		@foreach($courses as $course)
		<div class="col-sm">
			<div class="card" style="width: 18rem; margin-top: 70px;">
			  <div class="card-body text-center">
			    <h5 class="card-title">{{$course->grado}}</h5>
			   
			    <a href="" style="margin: 10px;" class="btn btn-dark ">Ver más...</a>
			  </div>
			</div>
		</div>
		@endforeach
	</div>

@endsection