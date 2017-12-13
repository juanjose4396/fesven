
@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')


    <div class="contenedor">
        <h2>Convocatoria</h2>
        <p>Creacion de convocatoria</p>
        <hr>
        <b><p>Destinatarios</p></b>
        <form>
            <div class="comp-form">
                <label for="portada_del_evento">Cargue archivo de contacto:</label>
                 <span class="obligatorio">*</span>
                <input type="file" id="portada_del_evento" name="portada_del_evento" class="form-control">
            </div>
            <hr>
        
            <div class="comp-form">
                <label for="descripcion_del_evento">Ingrese en la casilla los correos electronicos de los invitados al evento:</label>
                <span class="obligatorio">*</span>
                <textarea name="descripcion_del_evento" id="descripcion_del_evento" placeholder="Ingrese lista de correos electronicos" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <hr>
            <hr>
            <div class="comp-form">
                <label for="nombre_del_evento">Asunto:</label>
                <span class="obligatorio">*</span>
                <input type="text" placeholder="Ingresa el nombre del evento" id="nombre_del_evento" class="form-control">
            </div>
            <div class="comp-form">
                <label for="descripcion_del_evento">Cuerpo del mensaje:</label>
                <span class="obligatorio">*</span>
                <textarea name="descripcion_del_evento" id="descripcion_del_evento" placeholder="Cuerpo mensaje" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <hr>
            <div class="comp-form cont-btn">
                <div class="cont-cancelar">
                    <button class="btn btn-danger">Cancelar</button>
                </div>
                <div class="cont-guardar">
                    <input type="submit" class="btn btn-primary" value="Guardar y continuar">
                </div>
            </div>

        </form>

    </div>




@endsection
@include ('footer')
