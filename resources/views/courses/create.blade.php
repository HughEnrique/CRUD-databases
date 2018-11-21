@extends('layouts.create')

@section('title','Create Course')

@section('title1','Create Course')

@section('content')

	{!! Form::open(['route' => 'courses.store','method' => 'POST']) !!}
    	<div class="form-group" style="margin-top: 100px">

			<div class="form-group">
				<div class="form-group">
					<label>Students: </label>
					<select class="form-control" name="students">
						@foreach($students as $student)
							<option value="{{$student->id}}">{{$student->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Courses: </label>
					<select class="form-control" name="courses">
						@foreach($courses as $course)
							<option value="{{$course->id}}">{{$course->grado}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
    	 
    	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}

  	{!! Form::close() !!}


@endsection