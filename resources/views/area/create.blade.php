@extends('layouts.create')

@section('title','Areas')
@section('title1','Add new Area')
@section('a','active')
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

	{!! Form::open(['route' => 'areas.store','method' => 'POST','files'=>true]) !!}
    
    	@include('area.form')    
  
    	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}

  	{!! Form::close() !!}	

@endsection