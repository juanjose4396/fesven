@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container spark-screen">
        <ol class="breadcrumb">
            <li> <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li> <a href="{{ route('admin.users.index') }}"><i class="fa fa-child"></i> Usuarios</a></li>
            <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
        </ol>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="col-md-6 btaccion">
                    </div>

                    <div class="panel-heading">Listar Trabajadores del cliente {{  "  ".$cliente ->name}}
                    </div>

                    <div class="panel-body">

                        <br>
                        <table class="table table-responsive table-striped">
                            <thead>
                            <tr>

                                <th class="active">Nombres</th>
                                <th class="active">Cédula</th>
                                <th class="active">Teléfono</th>
                                <th class="active">Email</th>
                                <th class="active">Rol</th>
                                <th class="active">Estado</th>
                                <th class="active">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $estudiante)

                                <tr>

                                    <td>{{$estudiante->name." ".$estudiante->apellidos}}</td>
                                    <td>{{$estudiante->cedula}}</td>
                                    <td>{{$estudiante->telefono}}</td>
                                    <td>{{$estudiante->email}}</td>
                                    <td>{{$estudiante->rol}}</td>
                                    <td>@if($estudiante->estado == "1")
                                            Disponible

                                        @elseif($estudiante->estado == "0")
                                            Inactivo
                                        @endif
                                    </td>

                                    <td><a href="{{ route('admin.user.destroy',$estudiante->id)  }}" class="btn btn-danger"
                                           onclick="return confirm('¿Seguro desea eliminarlo?')" data-toggle="tooltip"
                                           data-placement="left" title="Eliminar">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{route ('admin.users.show', $estudiante->id)}}" class="btn btn-success" data-toggle="tooltip"
                                           data-placement="top" title="Visualizar">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true" ></span></a>
                                        </a>
                                        @if($estudiante->user_id == null )
                                            <a href="{{route('admin.users.createT',$estudiante->id)}}" class="btn btn-primary" data-toggle="tooltip"
                                               data-placement="top" title="Ingresar trabajadores">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true" ></span></a>
                                            </a>

                                        @endif
                                        <a href="{{route('admin.users.edit',$estudiante->id)}}" class="btn btn-warning" data-toggle="tooltip"
                                           data-placement="top" title="Actualizar">
                                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection