
@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')


    <div class="contenedor">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre del evento</th>
                <th scope="col">Fecha</th>
                <th scope="col">Sitio</th>
                <th scope="col">Fecha de creación</th>
            </tr>
            </thead>
            <tbody>
            @foreach($eventos as $evento)
            <tr>
                <th scope="row">{{$evento->id}}</th>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->fecha_inicio}}</td>
                <td>{{$evento->ubicacion->pais.", ".$evento->ubicacion->departamento
                .", ".$evento->ubicacion->ciudad.", ".$evento->ubicacion->direccion}}</td>
                <td>{{$evento->created_at}}</td>
            </tr>
                @endforeach

            </tbody>
        </table>

        </table>
    </div>




@endsection
@include ('footer')
