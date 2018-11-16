@extends('layouts.create')

@section('title','Teachers Edit')

@section('title1','Teacher Edit')

@section('content')

  {!! Form::model($teacher, ['route' => ['teachers.update', $teacher], 'method' => 'PUT', 'files' => true]) !!}
     @include('teacher.form') 
      
    {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
  
  {!! Form::close() !!}

@endsection