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

            <h2><center>TE AYUDAMOS A ENCONTRAR DOCTORES Y HOSPITALES.
            <br>BUSCA CON FILTROS Y SELECCIONA LA MEJOR OPCI&Oacute;N
            <br>QUE SE ADAPTE A TUS NECESIDADES Y REQUISITOS
            </h2></center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!-- <button class="button1">Iniciar sesi&oacute;n</button> -->
            <FORM METHOD="LINK" ACTION="loginOpt"> <INPUT TYPE="submit" class="button1" VALUE="Iniciar sesi&oacute;n"> </FORM>

            <!-- <button class="button2">Suscribir</button> -->
            <FORM METHOD="LINK" ACTION="suscribeOpt"> <INPUT TYPE="submit" class="button2" VALUE="Suscribir"> </FORM>

        </div>

        <br>
        <br>
            <center>
            {!! Form::open(array('action' => 'SearchHospitalController@search')) !!}
               
                {{ Form::select('option', 

                        array('name' => 'Nombre', 
                              'city' => 'Ciudad')
                ) }} 

                {{ Form::text('search_text','Ingrese su búsqueda',array('id'=>'3','class'=>'')) }}
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                {{ Form::submit('Enviar!') }}
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