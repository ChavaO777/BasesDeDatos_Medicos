<html>
    
    <head>
        <title>Pagina de inicio</title>
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Title font -->
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
        
        <!-- Subtitles font -->
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

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

            {{ Form::close() }}
            </center>
            
            <!-- <div id="opt1">
                <select name="options1" id="options1" class="docMenu"> 
                    <option value="" disabled selected>Selecciona una opci&oacute;n</option>
                    <option value="doctorName" id="4">Nombre</option>
                    <option value="lastname">Apellido</option>
                    <option value="medicalID">C&eacute;dula profesional</option>
                    <option value="specialty">Especialidad</option>
                    <option value="location">Estado y/o Ciudad</option>
                </select>

           </div>

            <div id="opt2">

                <select name="options2" id="options2" class="docMenu"> 
                    <option value="" disabled selected>Selecciona una opci&oacute;n</option>
                    <option value="hospitalName">Nombre</option>
                    <option value="locationHop">Estado y/o Ciudad</option>
                </select>

            </div> -->

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