@extends('layouts.app')

@section('content')
<br>
<div class="box1">
	<br>
	<h1>Resultado de la b&uacute;squeda<h1>
</div>

<div class="box2">Resultados de tu b&uacute;squeda</div>

<div class="box3">
	<br>
	<center>

	@if($flag == 1)

		{!! Form::open(array('action' => 'DoctorController@show')) !!}

			@forelse($total_doctors as $doctor)


				<p class="hide">{{ Form::number('doctor_id', $doctor -> id)}}</p>
				
				<p> {{ $doctor->id }}</p>

				<p><h2> {{$doctor -> first_name}} {{$doctor -> last_name}}
				<!-- {{ Form::submit('Ver perfil')}} -->
				<a href=route(["doctor.show", $doctor->id])>Ver perfil</a>
				</p></h2>

			@empty
				<p><h3>No se encontro ningun resultado</h3></p>

			@endforelse

		{{ Form::close() }}

	@elseif($flag == 2)

		{!! Form::open(array('action' => 'HospitalController@show')) !!}

			@forelse($total_hospitals as $hospital)

				<p class="hide">{{ Form::number('hospital_id', $hospital -> id)}}</p>

				<p><h2> {{$hospital -> name}}
				{{ Form::submit('Ver perfil')}}
				</p></h2>
			
			@empty
				<p><h3>No se encontro ningun resultado</h3></p>

			@endforelse

		{{ Form::close() }}

	@endif

	</center>

</div>