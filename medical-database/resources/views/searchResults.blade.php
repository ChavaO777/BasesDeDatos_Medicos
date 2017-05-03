@extends('layouts.app')

@section('content')
<br>
<div class="box1">
	<br>
	<h1>Resultado de la b&uacute;squeda<h1>
</div>

<div class="box2">Resultados de tu b&uacute;squeda</div>

<div class="box3">
	<center>

	@if($flag == 1)

		{!! Form::open(array('action' => 'DoctorController@show')) !!}

			@forelse($total_doctors as $doctor)


				<p class="hide">{{ Form::number('doctor_id', $doctor -> id)}}</p>
				
				<p> {{ $doctor->id }}</p>

				<p> {{$doctor -> first_name}} {{$doctor -> last_name}}
				{{ Form::submit('Ver perfil')}}
				</p>

			@empty
				<p>No se encontro ningun resultado</p>

			@endforelse

		{{ Form::close() }}

	@elseif($flag == 2)

		{!! Form::open(array('action' => 'HospitalController@show')) !!}

			@forelse($total_hospitals as $hospital)

				<p class="hide">{{ Form::number('hospital_id', $hospital -> id)}}</p>

				<p> {{$hospital -> name}}
				{{ Form::submit('Ver perfil')}}
				</p>
			
			@empty
				<p>No se encontro ningun resultado</p>

			@endforelse

		{{ Form::close() }}

	@endif

	</center>

</div>