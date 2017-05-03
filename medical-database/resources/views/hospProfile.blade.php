@extends('layouts.app')
@section('title')
Perfil del hospital
@stop

	@section('content')
		<br>
		<div class="titleBox">
			<br>
			<h1>{{ $hospital->name }}</h1>
			<br>
			<br>
		</div>

		<div class="boxed">
			<br>
			<table style="width:50%">
				<tr>
					<td class="titleTable">Nombre</td>
					<td class="infoTable">{{ $hospital->name }}</td>
				</tr>
				<tr>
					<td class="titleTable">Ubicaci&oacute;n</td>
					<td class="infoTable">Calle {{ $address->street}} #{{ $address->number}} Col. {{ $address->suburb}}</td>
				</tr>

			</table>

			<br>
			<br>
			<br>
			<br>
			<h2>Doctores</h2>

			@forelse($total_doctors as $doctor)

				{!! Form::open(array('action' => 'DoctorController@show')) !!}

					<p class="hide">{{ Form::number('doctor_id', $doctor -> id)}}</p>
					
					<p><h2> {{$doctor -> first_name}} {{$doctor -> last_name}} ({{ $doctor -> name}})
					{{ Form::submit('Ver perfil')}}
					</p></h2>

				{{ Form::close() }}

			@empty
				<p><h3>No hay doctores registrados en este hospital</h3></p>

			@endforelse

		</div>

		<center><button class="button1">Iniciar sesi&oacute;n</button></center>
	@stop
</html>