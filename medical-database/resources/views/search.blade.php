@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <title>Pagina de inicio</title>

        <script>
            
            function habilitarOpt1() {

                document.getElementById("opt2").style.visibility = "hidden"
                document.getElementById("opt1").style.visibility = "visible"
            }

            function habilitarOpt2() {

                document.getElementById("opt1").style.visibility = "hidden"
                document.getElementById("opt2").style.visibility = "visible"
            }

        </script>

    </head>

    <body>
        <br>
        <br>

        <div class="boxed">
            <h1><center>Base de datos de servicios m&eacute;dicos</h1></center>

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
            <center><h2>Buscar por:</h2></center>

            <center>
            {!! Form::open(array('action' => 'SearchController@default')) !!}
                
                {{ Form::label('check', 'Doctor', array('id' => '1', 'class' => '')) }}
                {{ Form::radio('check', '1', ['class' => 'regular-checkbox']) }}


            <!-- {!! Form::open(array('action' => 'SearchController@default')) !!}
            
                {{ Form::radio('check', '1', ['class' => 'regular-checkbox']) }}<br>
                {{ Form::radio('check', '2', ['class' => 'regular-checkbox']) }}
>>>>>>> Stashed changes

                <br>
                <br>
                {{ Form::label('check', 'Hospital', array('id' => '2', 'class' => '')) }}
                {{ Form::radio('check', '2', ['class' => 'regular-checkbox']) }}
                <br>
                <br> 

                @if('check' == '1')
                     {{ Form::select('option', $search_types[1]) }}  
                @elseif('check' == '2')
                    {{ Form::select('option', $search_types[2]) }}  
                @endif

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

<<<<<<< Updated upstream
            {{ Form::close() }}
            </center>
            
            <!-- <div id="opt1">
=======
            {{ Form::close() }} -->
            
            <div id="opt1" class="opt1">


        <br>
        <br>
        <br>
       <!--  <center>
        <input type="text" id="search" name="search" placeholder="Ingresa tu b&uacute;squeda">
        </center> -->
        <!-- <button class="button3">Buscar</button> -->
        <!-- <FORM METHOD="LINK" ACTION="searching"> <INPUT TYPE="submit" class="button3" VALUE="Buscar"> </FORM> -->

        <br>
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