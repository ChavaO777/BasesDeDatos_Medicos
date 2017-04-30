@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Register</div> -->
                <div class="box1">
                    <br>
                    <h1>Registrar</h1>
                    <br>
                </div>

                <div class="box2">Doctor</div>
                <div class="box3"><center>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label"><h2>Nombre</h2></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <!-- <label for="lastname" class="col-md-4 control-label"><h2>Apellido</h2></label> -->
                                <label for="lastname"><h2>Apellido</h2></label>

                                <!-- <div class="col-md-6"> -->
                                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                <!-- </div> -->
                            </div>

                            <div class="form-group{{ $errors->has('professionalID') ? ' has-error' : '' }}">
                                <label for="professionalID"><h2>C&eacute;dula Profesional</h2></label>

                                
                                <input id="professionalID" type="text" class="form-control" name="professionalID" value="{{ old('professionalID') }}" required autofocus>

                                @if ($errors->has('professionalID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('professionalID') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('specialty') ? ' has-error' : '' }}">
                                <label for="specialty"><h2>Especialidad</h2></label>

                                
                                <input id="specialty" type="text" class="form-control" name="specialty" value="{{ old('specialty') }}" required autofocus>

                                @if ($errors->has('specialty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specialty') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> -->

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label"><h2>Contrase&ntilde;a</h2></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label"><h2>Confirmar contraseña</h2></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <br>
                                <br>
                                <br>
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div></center>
            </div>
        </div>
    </div>
</div>
@endsection
