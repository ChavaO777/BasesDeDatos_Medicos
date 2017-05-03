@extends('layouts.app')
<html>

    @section('view_title')
        Busca doctores
    @stop

    @section('content')

        <br>
        <br>

        <div>
            <h1>Busca doctores</h1>
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
               
                {{ Form::text('search_text','',array('placeholder'=>'Ingrese su búsqueda')) }}
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

    @stop

</html>