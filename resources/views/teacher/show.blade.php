@extends('layouts.create')

@section('title','Teacher')

@section('title1','Teacher')

@section('content')

	<img style="height: 300px; width: 300px; margin: 30px;" class="card-img-top mx-auto d-block" src="/images/{{$teacher->avatar}}" alt="">
	<div class="text-center">
		<h4 class="card-title">{{$teacher->name}} {{$teacher->lastname}}</h4>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><strong>Address: </strong>{{$teacher->address}}</li>
				<li class="list-group-item"><strong>Matter: </strong>{{$teacher->matter}}</li>
				<li class="list-group-item"><strong>City: </strong>{{$teacher->city}}</li>
				<li class="list-group-item"><strong>Phone: </strong>{{$teacher->phone}}</li>
				<li class="list-group-item"><strong>Sex: </strong>{{$teacher->sex}}</li>
			</ul>
		<a href="/teachers/{{$teacher->slug}}/edit" style="margin: 10px;" class="btn btn-primary">Editar</a>
	</div>

@endsection