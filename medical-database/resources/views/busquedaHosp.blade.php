@extends('layouts.app')

@section('content')


<div class="box1">
	<h1>Buscando un hospital</h1>
    <br>
</div>

<div class="box2">
    Resultados de la b&uacute;squeda
</div>

<div class="box3"><center>
    <form action="/search_handler.php" method="post">
        <br>
        <h2>Aquí van los resultados:</h2>
    
    </form>
</div></center>

<center><FORM METHOD="LINK" ACTION="./home"> <INPUT TYPE="submit" class="button3" VALUE="Nueva b&uacute;squeda"></FORM></center>