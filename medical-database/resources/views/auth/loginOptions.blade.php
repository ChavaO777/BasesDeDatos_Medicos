@extends('layouts.app')

@section('content')

<div>
    <div class="box2">
        <br>
        <h1>Iniciar sesi&oacute;n</h1>
        <br>
    </div>

    <div class="box3">
        Entrar como:
    </div>

    <div class="box4">

        <div class="loginBox"><center>
            <br>
            <br>
            <FORM METHOD="LINK" ACTION="login"> <INPUT TYPE="submit" class="button1" VALUE="Doctor"><img src="Doctor.png"></FORM>
        <!-- </div>

        <div class="patientBox"> -->
            <br>
            <br>
            <FORM METHOD="LINK" ACTION="login"> <INPUT TYPE="submit" class="button1" VALUE="Paciente"><img src="Paciente.png"></FORM>
        </div></center>
    </div>
</div>