@extends('layouts.create')

@section('title1','Teachers list')

@section('content')

	<div class="form-group">

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Teachers: </label>
				<select class="form-control" name="teachers">
					@foreach($teachers as $teacher)
						<option value="{{$teacher->id}}">{{$teacher->name}}</option>
					@endforeach
				</select>
			</div>
			
			<div class="form-group col-md-6">
				<label>Students: </label>
				<select class="form-control" name="students">
					@foreach($students as $student)
						<option value="{{$student->id}}">{{$student->name}}</option>
					@endforeach
				</select>
			</div>
		</div>

	</div>

@endsection