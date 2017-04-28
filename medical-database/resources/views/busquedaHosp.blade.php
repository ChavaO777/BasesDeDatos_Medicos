<html>
	<head>
		<title>B&uacute;squeda de hospital</title>
		<link rel="stylesheet" href="/css/hospStyles.css">
    </head>

    <body>
    	<div class="boxed">
    		<h1>Buscando un hospital</h1>
    		<h2>Resultados de la b&uacute;squeda</h2>
    	</div>

    	<div class="boxedInside">
    		<!-- <select class="docHospSelect">
    			<option value="searchingDoc">Doctor</option>
    			<option value="searchingHosp">Hospital</option>
    		</select> -->

    		<!-- <select class="searchingSelect">
    			<option value="hospitalName">Nombre</option>
				<option value="location">Estado y/o Ciudad</option>
    		</select>
 -->
           <!--  <form action="/payment">
                <input type="text" name="search">
                <input type="submit">
            </form> -->

            <form action="/show_hospital">
                
                <select class="docHospSelect">
                    <option value="searchingDoc">Doctor</option>
                    <option value="searchingHosp">Hospital</option>
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