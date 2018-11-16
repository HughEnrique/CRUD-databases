@extends('layouts.create')

@section('title','Areas List')

@section('title1','Areas List')

@section('content')

	<div class="row" style="margin-top: 50px">
		
		@foreach($areas as $area)
			<div class="col-sm">

				<div class="card border-dark mb-3" style="max-width: 18rem; margin-top: 70px;">
				  <img style="height: 100px; width: 100px; margin: 20px;" class="card-img-top mx-auto d-block" src="imgarea/{{$area->avatar}}" alt="">
				  <div class="card-header"><strong>Name: </strong>{{$area->name}}</div>
				  <div class="card-body text-dark">
				    <h5 class="card-title">Description:</h5>
				    <p class="card-text">{{$area->description}}</p>
				    <a href="/areas/{{$area->slug}}" style="margin: 10px;" class="btn btn-primary mx-auto d-block">Ver más...</a>
				  </div>
				</div>
				
			</div>	

		@endforeach

	</div> 

@endsection