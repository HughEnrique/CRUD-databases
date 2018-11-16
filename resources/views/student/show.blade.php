@extends('layouts.create')

@section('title','Student')

@section('title1','Student')

@section('content')

	<div class="card border-dark text-center mb-3 mx-auto d-block" style="max-width: 30rem; margin-top: 100px;">
		<div class="card-body">
			<h4 class="card-title text-dark">{{$student->name}} {{$student->lastname}}</h4>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><strong>C. I.: </strong>{{$student->ci}}</li>
					<li class="list-group-item"><strong>Address: </strong>{{$student->address}}</li>
					<li class="list-group-item"><strong>City: </strong>{{$student->city}}</li>
					<li class="list-group-item"><strong>Phone: </strong>{{$student->phone}}</li>
				</ul>
			<a href="/students/{{$student->slug}}/edit" style="margin: 10px;" class="btn btn-dark">Editar</a>
		</div>		
	</div>

@endsection