@extends('layouts.app')

@section('content')

<div class="box1">
    <br>
    <h1>Registrarse</h1>
    <br>
</div>

<div class="box2">
Paciente
</div>

<div class="box3"><center>

	{!! Form::open(array('action' => 'PatientRegisterController@create')) !!}
		<br>
		<h2>Usuario</h2>
		{{ Form::text('username','',array('id'=>'1','class'=>'')) }}

		<br>
		<br>
		<br>
		<h2>Nombre</h2>

		{{ Form::text('name','',array('id'=>'2','class'=>'')) }}

		<br>
		<br>
		<br>
		<h2>Apellido</h2>

		{{ Form::text('lastname','',array('id'=>'3','class'=>'')) }}

		<br>
		<br>
		<br>
		<h2>Fecha de nacimiento</h2>

		{{ Form::date('birthdate','',array('id'=>'4','class'=>'')) }}

		<br>
		<br>
		<br>
		<h2>Contrase&ntilde;a</h2>

		{{ Form::password('password','',array('id'=>'6','class'=>'')) }}

		<br>
		<br>
		<br>
		{{ Form::submit('Registrar') }}

	{{ Form::close() }}

</center></div>
