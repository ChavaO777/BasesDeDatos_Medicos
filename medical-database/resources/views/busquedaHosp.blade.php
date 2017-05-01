<html>
	<head>
		<title>B&uacute;squeda de hospital</title>
		<link rel="stylesheet" href="/css/hospStyles.css">

        <!-- Title font -->
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
        
        <!-- Subtitles font -->
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    </head>

    <body>
    	<div class="boxed">
    		<h1>Buscando un hospital</h1>
    		<h2>Resultados de la b&uacute;squeda</h2>
    	</div>

    	<div class="boxedInside">
        
            <form action="/search_handler.php" method="post">
                
                <select class="docHospSelect">
                    <option name="search_type" value="searchingDoc">Doctor</option>
                    <option name="search_type" value="searchingHosp">Hospital</option>
                </select>    

                <select class="searchingSelect">
                    <option value="hospitalName">Nombre</option>
                    <option value="location">Estado y/o Ciudad</option>
                </select>
        		
                <input type="text" id="search" placeholder="Ingresa tu b&uacute;squeda">
    			<button class="button3">Buscar</button>
            
            </form>

		</div>
        <center><button class="button1">Iniciar sesi&oacute;n</button></center>

    </body>
</html>