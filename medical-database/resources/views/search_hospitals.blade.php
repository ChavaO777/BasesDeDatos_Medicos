@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <title>Buscando hospitales</title>

    </head>

    <body>
        <br>
        <br>

        <div class="boxed">
            <h1><center>Buscando hospitales</h1></center>

            <br>


        </div>

        <br>
        <br>
            <center><h2>Buscar por:</h2></center>

            <center>
            {!! Form::open(array('action' => 'SearchController@searchHospitals')) !!}
                
                

               
                {{ Form::select('option', 

                        array('name' => 'Nombre', 
                              'city' => 'Ciudad')
                ) }} 
                <br>
                <br>
               

                {{ Form::text('search_text','Ingrese su búsqueda',array('id'=>'3','class'=>'')) }}
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

    </body>

</html>