@extends('layouts.create')

@section('title','Teachers')
@section('title1','Add new teacher')
@section('t','active')
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

	{!! Form::open(['route' => 'teachers.store','method' => 'POST','files' => true]) !!}
    
    	@include('teacher.form')    
  
    	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}

  	{!! Form::close() !!}	

@endsection