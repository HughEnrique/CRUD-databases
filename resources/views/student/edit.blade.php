@extends('layouts.create')

@section('title','Students Edit')

@section('title1','Student Edit')

@section('content')

	<div style="margin-top: 50px;">
		
		{!! Form::model($student, ['route' => ['students.update', $student], 'method' => 'PUT']) !!}

	     @include('student.form') 
	      
	    {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}

	</div>

  {!! Form::close() !!}

@endsection