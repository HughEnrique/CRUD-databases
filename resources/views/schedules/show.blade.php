@extends('layouts.create')

@section('title','Schedules of this Course')

@section('title1','Schedules of this Course')

@section('sh','active')

@section('content')
	<div class="row" style="margin-top: 50px;">
		<table class="table text-center">
			<thead class="thead-dark">
			    <tr>
			      <th scope="col">Hora Inicial</th>
			      <th scope="col">Hora Final</th>
			      <th scope="col">Monday</th>
			      <th scope="col">Tuesday</th>
			      <th scope="col">Wednesday</th>
			      <th scope="col">Thursday</th>
			      <th scope="col">Friday</th>
			    </tr>
			  </thead>
		@foreach($schedules as $schedule)
				@foreach($areas as $area)
					@if(($schedule->course_id == $courses) && ($schedule->area_id == $area->id))
						<tbody>
							<tr>
								<td>{{$schedule->startime}}</td>
								<td>{{$schedule->endtime}}</td>
									@if($schedule->day=='Monday')				      
									      <td>{{$area->name}}</td>
									      <td></td>
									      <td></td>
									      <td></td>
									      <td></td>
									@endif
									@if($schedule->day=='Tuesday')
									      <td></td>
									      <td>{{$area->name}}</td>
									      <td></td>
									      <td></td>
									      <td></td>		 
									@endif
									@if($schedule->day=='Wednesday')  
									      <td></td>
									      <td></td>
									      <td>{{$area->name}}</td>
									      <td></td>
									      <td></td>
									@endif
									@if($schedule->day=='Thursday') 
									      <td></td>
									      <td></td>
									      <td></td>
									      <td>{{$area->name}}</td>
									      <td></td>
									@endif
									@if($schedule->day=='Friday')							
									      <td></td>
									      <td></td>
									      <td></td>
									      <td></td>
									      <td>{{$area->name}}</td>
									@endif
						 	</tr>
						</tbody>
					@endif
				@endforeach
		@endforeach
		</table>
	</div>
	
@endsection