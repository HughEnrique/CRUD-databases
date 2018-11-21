@extends('layouts.create')

@section('title','New Schedule')

@section('title1','New Schedule')

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

{!! Form::open(['route' => 'schedules.store','method' => 'POST']) !!}
    
    	@include('schedules.form')

    	     <div class="form-row" style="margin-bottom: 20px">
			    <div class="form-group col-md-6">
			      <label for="inputCity">Course</label>
			      <select name="courses" class="form-control">
			      	@foreach($courses as $course)
						<option value="{{$course->id}}">{{$course->grado}}</option>
					@endforeach
			      </select>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputState">Area</label>
			      <select name="areas" class="form-control">
			        @foreach($areas as $area)
						<option value="{{$area->id}}">{{$area->name}}</option>
					@endforeach
			      </select>
			    </div>
			    <div class="form-group">
			    <div class="form-check form-check-inline">
				  <input class="form-check-input" name="check-box" type="checkbox" value="1" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Monday
				  </label>
				</div>
				  <div class="form-check form-check-inline">
				  <input class="form-check-input" name="check-box" type="checkbox" value="2" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Tuesday
				  </label>
				  </div>
				  <div class="form-check form-check-inline">
				  	
				  <input class="form-check-input" name="check-box" type="checkbox" value="3" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Wednesday
				  </label>
				  </div>
				  <div class="form-check form-check-inline">
				  	
				  <input class="form-check-input" name="check-box" type="checkbox" value="4" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Thursday
				  </label>
				  </div>
				  <div class="form-check form-check-inline">
				  <input class="form-check-input" name="check-box" type="checkbox" value="5" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Friday
				  </label>
				  </div>
			  </div>
			  </div>
  
    	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}

@endsection