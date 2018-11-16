@extends('layouts.create')

@section('title','Students')
@section('title1','Add new Students')
@section('s','active')
@section('content')

@if ($errors->any())
	<div class="alert alert-danger" style="margin-top: 20px;">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

	{!! Form::open(['route' => 'students.store','method' => 'POST']) !!}
    
    	@include('student.form') 

		<div class="form-row" style="margin-bottom: 25px;">
    	 	<div class="col-sm-3">
				<label>Grade: </label>
				<select class="form-control" name="courses">
					@foreach($courses as $course)
						<option value="{{$course->id}}">{{$course->grado}}</option>
					@endforeach
				</select>
			</div>  
		</div>
  
    	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}

  	{!! Form::close() !!}	

@endsection