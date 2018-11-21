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
  
    	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}

  	{!! Form::close() !!}	

@endsection