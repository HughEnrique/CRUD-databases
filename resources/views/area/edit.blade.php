@extends('layouts.create')

@section('title','Areas Edit')

@section('title1','Area Edit')

@section('content')

  {!! Form::model($area, ['route' => ['areas.update', $area], 'method' => 'PUT', 'files' => true]) !!}

     @include('area.form') 
      
    {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
  
  {!! Form::close() !!}

@endsection