@extends('layouts.create')

@section('title','New Schedule')
@section('title1','New Schedule')

@section('content')

{!! Form::open(['route' => 'schedules.store','method' => 'POST']) !!}
    
    	@include('schedules.form')

    	     <div class="form-row">
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
			  </div>
  
    	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}

@endsection