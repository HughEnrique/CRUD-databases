@extends('layouts.create')

@section('title','Teachers list')

@section('title1','Teachers list')

@section('content')

	<div class="row">
		@foreach($teachers as $teacher)
		<div class="col-sm">
			<div class="card" style="width: 18rem; margin-top: 70px;">
			<img style="height: 100px; width: 100px; margin: 20px;" class="card-img-top mx-auto d-block" src="images/{{$teacher->avatar}}" alt="">
			  <div class="card-body">
			    <h5 class="card-title text-center">{{$teacher->name}} {{$teacher->lastname}}</h5>
			   	<ul class="list-group list-group-flush">
				  <li class="list-group-item"><strong>Address: </strong>{{$teacher->address}}</li>
				  <li class="list-group-item"><strong>Matter: </strong>{{$teacher->matter}}</li>
				  <li class="list-group-item"><strong>City: </strong>{{$teacher->city}}</li>
				  <li class="list-group-item"><strong>Phone: </strong>{{$teacher->phone}}</li>
				  <li class="list-group-item"><strong>Sex: </strong>{{$teacher->sex}}</li>
				</ul>
			    <a href="/teachers/{{$teacher->slug}}" style="margin: 10px;" class="btn btn-primary mx-auto d-block">Ver más...</a>
			  </div>
			</div>
		</div>
		@endforeach
	</div>

@endsection