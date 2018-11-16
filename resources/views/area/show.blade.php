@extends('layouts.create')

@section('title','Area')

@section('title1','Area')

@section('content')

			<div class="card border-dark mb-3 mx-auto d-block text-center" style="max-width: 25rem; margin-top: 70px;">

			<img style="height: 100px; width: 100px; margin: 20px;" class="rounded card-img-top mx-auto d-block" src="/imgarea/{{$area->avatar}}" alt="">

			<div class="card-header"><strong>Name: </strong>{{$area->name}}</div>

			  <div class="card-body text-dark">

			    <h5 class="card-title">Description:</h5>
			    <p class="card-text">{{$area->description}}</p>
			    <a href="/areas/{{$area->slug}}/edit" style="margin: 10px;" class="btn btn-primary">Editar</a>

			  </div>

			</div>

@endsection