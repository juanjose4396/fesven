@extends('layouts.app')

@section('htmlheader_title')
    Registrar Usuarios
@endsection

@section('main-content')

    <div class="container">

        <div class="row">
            <ol class="breadcrumb">
                <li> <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li> <a href="{{ route('admin.users.index') }}"><i class="fa fa-child"></i> Usuarios</a></li>
                <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
            </ol>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Actualizar Usuario</div>
                    <div class="panel-body pn">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('admin.users.update',$user->id) }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="nombre"
                                               value="{{$user->name}}">
                                    </div>
                                    @if ($errors->has('nombre'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span> @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Apellidos</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-minus"></i></span>
                                        <input type="text" class="form-control" name="apellidos"
                                               value="{{ $user->apellidos }}">
                                    </div>
                                    @if ($errors->has('apellidos'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('apellidos') }}</strong>
                            </span> @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('cc') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Cédula</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-asterisk"></i></span>
                                        <input type="text" class="form-control" name="cc"
                                               value="{{$user->cedula}}">
                                    </div>
                                    @if ($errors->has('cc'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('cc') }}</strong>
                            </span> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Correo electrónico</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                                >
                                    </div>

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Teléfono</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-earphone"></i></span>
                                        <input type="text" class="form-control" name="telefono"
                                               value="{{ $user->telefono }}" placeholder="3007645231">
                                    </div>
                                    @if ($errors->has('telefono'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span> @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('ingreso') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Fecha de corte</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" class="form-control" name="fecha"
                                               value="{{ $user->fecha_corte}}" placeholder="11/03/2016">
                                    </div>
                                    @if ($errors->has('ingreso'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('ingreso') }}</strong>
                            </span> @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Contraseña</label>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="input-group">

                                            <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-lock"></i></span>
                                                <input type="text" class="form-control" id="password" name="password"
                                                       placeholder="*******">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <script src="{{ asset('js/pGenerator.js') }}"></script>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4 btp">
                                    <button type="submit" class="btn btn-primary has-spinner" name="registar"><span
                                                class="spinner"><i
                                                    class="icon-spin fa fa-refresh fa-spin"></i></span> Registrar
                                    </button>
                                    <script src="{{ asset('js/spinner.js') }}"></script>
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-default"
                                       name="cancelar">Cancelar
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection