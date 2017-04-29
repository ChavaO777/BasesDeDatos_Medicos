@extends('layouts.app')

@section('content')

<div class="box1"><center>
    <br>
    <h1>Iniciar sesi&oacute;n</h1>
    <br>
</center></div>

<div class="box2"><center>
    Paciente
</center></div>

<div class="box3"><center>
    <br>
    <br>
    <br>
    <img src="pildora.png">
    <br>
    <br>
    <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label"><h2>Correo electr&oacute;nico</h2></label>

                     <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="example@example.com">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label"><h2>Contrase&ntilde;a</h2></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" placeholder="******" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label><h2>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                            </h2></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"><h2>
                            Ingresar
                        </h2></button>

                        <h2><a class="btn btn-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contrase&ntilde;a?
                        </h2></a>
        <br>
    </div>

</center></div>

<!-- <div>
    <br>
        <br>
        <br>
        <img src="Pildora.png" class="pildora">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label"><h3>Correo electr&oacute;nico</h3></label>

                     <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="example@example.com">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label"><h2>Contrase&ntilde;a</h2></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" placeholder="******" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label><h4>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                            </h4></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"><h4>
                            Ingresar
                        </h4></button>

                        <h4><a class="btn btn-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contrase&ntilde;a?
                        </h4></a>
        <br>
    </div>
</div> -->

@endsection
