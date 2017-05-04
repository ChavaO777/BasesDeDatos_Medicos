@extends('layouts.app')

@section('content')

<div>
    <div class="box1">
        <br>
        <h1>Suscribir</h1>
        <br>
    </div>

    <div class="box2">
        Registrar como:
    </div>

    <div class="box3">

        <div class="loginBox"><center>
            <br>
            <br>
            <FORM METHOD="LINK" ACTION="doctorSuscribe"> <INPUT TYPE="submit" class="button1" VALUE="Doctor"><img src="Doctor.png"></FORM>
        
            <br>
            <br>
            <FORM METHOD="LINK" ACTION="patientSuscribe"> <INPUT TYPE="submit" VALUE="Paciente" class="button1"><img src="Paciente.png"></FORM>
        </div></center>
    </div>
</div>
@stop