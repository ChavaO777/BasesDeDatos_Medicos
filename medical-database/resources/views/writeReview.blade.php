@extends('layouts.app')

@section('content')

<div class="box1">
    <h1>Base de datos de servicios m&eacute;dicos</h1>
    <br>
    <h3><center>ESCRIBE UNA RESEÑA
    </h3></center>

    <br>
    </center>
    <br>
</div>

<div class="box3"><center>

    {!! Form::open(array('action' => 'ReviewsController@create')) !!}
        <br>
        <h2>Nombre del doctor</h2>
        {{ Form::text('first_name','',array('id'=>'1','class'=>'')) }}

        <br>
        <br>
        <br>
        <br>
        <h2>Apellido del doctor</h2>
        {{ Form::text('last_name','',array('id'=>'2','class'=>'')) }}

        <br>
        <br>
        <br>
        <h2>Calificación</h2>
        {{ Form::select('rating', array('1' => '  1  ',
                                         '2' => '  2  ',
                                         '3' => '  3  ', 
                                         '4' => '  4  ', 
                                         '5' => '  5  '))   
                                        }}

        <br>
        <br>
        <br>
        <br>
        <h2>Comentario</h2>
        {{ Form::text('text','',array('id'=>'3','class'=>'')) }}

        <br>
        <br>
        <br>
        <br>
        <h2>Costo de la consulta</h2>
        {{ Form::text('consultation_cost','',array('id'=>'4','class'=>'')) }}
        <br>
        <br>
        <br>
        {{ Form::submit('Enviar Reseña') }}

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    {{ Form::close() }}

</center></div>
