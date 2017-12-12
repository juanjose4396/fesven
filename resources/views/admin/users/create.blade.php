@extends('layouts.app')

@section('htmlheader_title')
    Registrar Usuarios
@endsection

@section('main-content')



    <div class="container">
        <ol class="breadcrumb">
            <li> <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li> <a href="{{ route('admin.users.index') }}"><i class="fa fa-child"></i> Usuarios</a></li>
            <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
        </ol>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Registro de estudiante</div>
                    <div class="panel-body pn">

                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="nombre"
                                                placeholder="Luis" value="{{ old('nombre') }}">
                                    </div>



                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Apellidos</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-minus"></i></span>
                                        <input type="text" class="form-control" name="apellidos"
                                               placeholder="Correa Osorio" value="{{ old('apellidos') }}">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('nombre_bodega') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Nombre Bodega Principal</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="nombre_b"
                                               placeholder="la 13" value="{{ old('nombre_b') }}">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Dirección de la bodega</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="direccion"
                                               placeholder="dirección" value="{{ old('direccion') }}">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Cédula</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-asterisk"></i></span>
                                        <input type="text" class="form-control" name="cedula"
                                               placeholder="1098626573"value="{{ old('cedula') }}">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Correo electrónico</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                               placeholder="lcorrea@uniquindio.edu.co">
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
                                               value="{{ old('telefono') }}" placeholder="3007645231">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Imagen</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-circle-arrow-up"></i></span>
                                        <input type="file" class="form-control" name="imagen" placeholder="Ingresa la imagen"
                                               required>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('ingreso') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Fecha de corte</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" class="form-control" name="fecha"
                                               value="{{ old('fecha') }}" placeholder="11/03/2016">
                                    </div>

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