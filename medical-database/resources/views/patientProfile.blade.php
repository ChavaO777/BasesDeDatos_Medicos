@extends('layouts.app')

@section('content')

<div class="box1">
	<!-- Nombre del paciente: usuario -->
	<h1>Nombre</h1>
	<br>
</div>

<div class="box2">
	<br>
	{{ Form::submit('Ver mi perfil') }}
    {{ Form::submit('Escribir reseña') }}
    {{ Form::submit('Buscar') }}
    {{ Form::submit('Configuraciones') }}
    <br>
    <br>
</div>

<div class="box3">

</div>