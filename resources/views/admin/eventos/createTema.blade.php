
@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<div class="contenedor">
		<h2>Información general</h2>
		<p>Ingrese a continuación los detalles generales del evento.</p>
		<form>
			<div class="comp-form">
				<label for="nombre_del_evento">Nombre del tema:</label>
				<span class="obligatorio">*</span>
				<input type="text" placeholder="Ingresa el nombre del evento" id="nombre_del_evento" class="form-control">
			</div>
			<hr>
			<div class="comp-form">
				<label for="tipo_de_evento">Seleccione la etapa de evento:</label>
				<span class="obligatorio">*</span>
				<select name="tipo_de_evento" id="tipo_de_evento" class="form-control">
				<option value="o1">Elije el tipo de evento</option>
				<option value="o2">Academico</option>
				<option value="o2">Cinematográfico</option>
				<option value="o2">Empresarial</option>
				<option value="o3">Cultural</option>
				<option value="o5">Moda</option>
				<option value="o5">Musical</option>
				<option value="o4">Tecnólogico</option>
				</select>
			</div>
			<hr>
			<div class="comp-form">
				<label for="fecha_del_evento">Fecha del evento:</label>
				<span class="obligatorio">*</span>
				<div class="fecha-del-evento-inner inicia">
					<span class="fecha-inner">Inicia el:</span>
					<input type="date" id="fecha_del_evento" class="form-control elegir-fecha">
				</div>
				<div class="fecha-del-evento-inner termina">
					<span class="fecha-inner">Termina el:</span>
					<input type="date" id="fecha_del_evento" class="form-control elegir-fecha">
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="comp-form col-md-7">
				<label for="portada_del_evento">Portada del tema:</label>
				 <span class="obligatorio">*</span>
				<div class="agregue-portada">
					<p class="mensaje-portada">Agregue una portada para el tema. Ésta debe ser de 1080*1080 px en formato .jpg o .png
					</p>
				</div>
				<input type="file" id="portada_del_evento" name="portada_del_evento" class="form-control">
			</div>

				<div class="comp-form">
				<label for="portada_del_evento">Frase del tema:</label>
				 <span class="obligatorio">*</span>
				<div class="agregue-portada">
					<p class="mensaje-portada">Escriba la frase asociada al tema la cual sera publicada al compartir cada postal creada del tema, la frase puede tener # asignados
					</p>
				</div>
				<textarea name="descripcion_del_evento" id="descripcion_del_evento" placeholder="Ingresa la frase asignada del tema" cols="30" rows="5" class="form-control"></textarea>
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
