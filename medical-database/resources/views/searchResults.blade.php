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

			@forelse($total_doctors as $doctor)

				{!! Form::open(array('action' => 'DoctorController@show')) !!}

					<p class="hide">{{ Form::number('doctor_id', $doctor -> id)}}</p>
					
					<p><h2> {{$doctor -> first_name}} {{$doctor -> last_name}}
					{{ Form::submit('Ver perfil')}}
					</p></h2>

				{{ Form::close() }}

			@empty
				<p><h3>No se encontro ningun resultado</h3></p>

			@endforelse

	@elseif($flag == 2)

			@forelse($total_hospitals as $hospital)

				{!! Form::open(array('action' => 'HospitalController@show')) !!}

				<p class="hide">{{ Form::number('hospital_id', $hospital -> id)}}</p>

				<p><h2> {{$hospital -> name}}
				{{ Form::submit('Ver perfil')}}
				</p></h2>

				{{ Form::close() }}
			
			@empty
				<p><h3>No se encontro ningun resultado</h3></p>

			@endforelse

	@endif

	</center>

</div>