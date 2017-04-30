<html>
    
    <head>
        <title>Pagina de inicio</title>
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Title font -->
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
        
        <!-- Subtitles font -->
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
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

        <form>
            <input type ="radio" name="selectSearch" value="doctor" class="regular-checkbox" checked><h3>Buscar doctor</h3><br>

            <input type ="radio" name="selectSearch" value="hospital" class="regular-checkbox"><h3>Buscar hospital</h3><br>
        </form>

        <br>

        <h2><center>Buscar por:</center></h2>
        <select> 
            <option value="" disabled selected>Selecciona una opci&oacute;n</option>
            <option value="doctorName">Nombre</option>
            <option value="lastname">Apellido</option>
            <option value="medicalID">C&eacute;dula profesional</option>
            <option value="specialty">Especialidad</option>
            <option value="location">Estado y/o Ciudad</option>
            <option value="hospitalName">Nombre</option>
        </select>
        <br>
        <br>
        <br>
        <input type="text" id="search" placeholder="Ingresa tu b&uacute;squeda">
        <button class="button3">Buscar</button>

    </body>

</html>