@extends('layouts.app')

@section('content')


<div class="box1">
    <h1>Base de datos de servicios m&eacute;dicos</h1>
    <br>
    <h3><center>TE AYUDAMOS A ENCONTRAR DOCTORES Y HOSPITALES.
    <br>BUSCA CON FILTROS Y SELECCIONA LA MEJOR OPCI&Oacute;N
    <br>QUE SE ADAPTE A TUS NECESIDADES Y REQUISITOS
    </h3></center>

    <br>
    <br>
    <br>
    <br>
    </center>
    <br>
    <br>
</div>

<div class="box2">
    Opciones
</div>

<div class="box3"><center>
    <br>
    <br>
    <br>
    <br>

        {!! Form::open(array('action' => 'HomeController@writeReview')) !!}
            
            {{ Form::submit('Escribir reseña') }}

        {{ Form::close() }}


        {{ Form::submit('Cerrar sesión') }}
 
    <br>
    <br>
    <br>
    <br>
</center></div>

<div class="box2">
    Realizar una b&uacute;squeda
</div>

<div class="box3">

    <br>
    <FORM METHOD="LINK" ACTION="search_doctor"> <INPUT TYPE="submit" class="button2" VALUE="Buscar doctor"> </FORM>
    <FORM METHOD="LINK" ACTION="search_hospital"> <INPUT TYPE="submit" class="button3" VALUE="Buscar hospital"> </FORM>
    <br>
    <br>
    <br>
    <br>
</div>
<div class="box2">
    Perfil
</div>

<div class="box3">

    <br>
    <center>
    {!! Form::open(array('action' => 'ProfileController@my_profile')) !!}
    {{ Form::submit('Mi perfil') }}
    {{ Form::close() }}
    </center>
    <br>
    <br>
    <br>
    <br>
</div>
