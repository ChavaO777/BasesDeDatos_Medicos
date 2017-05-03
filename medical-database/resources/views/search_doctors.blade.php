@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <title>Busca Doctores</title>

    </head>

    <body>
        <br>
        <br>

        <div class="boxed">
            <h1><center>Busca doctores</h1></center>

            <br>

        </div>

        <br>
        <br>
            <center><h2>Buscar por:</h2></center>

            <center>
            {!! Form::open(array('action' => 'SearchController@searchDoctors')) !!}
               
                {{ Form::select('option', array('first_name' => 'Nombre',
                                                'last_name' => 'Apellido',
                                                'specialty' => 'Especialidad',
                                                'medical_id' => 'Cédula')) }}  
                <br>
                <br>
               
                {{ Form::text('search_text','Ingrese su búsqueda',array('id'=>'3','class'=>'placeholder')) }}
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                {{ Form::submit('Buscar') }}
                <br>
                <br>            

            {{ Form::close() }}
            </center>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </body>

</html>