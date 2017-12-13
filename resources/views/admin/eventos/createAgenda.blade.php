
@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<div class="contenedor">
		<h2>Agenda del evento</h2>
		<p style="margin-top: 3%;">Ingrese a continuación los detalles de la agenda del evento.</p>

		<b><p>Dias</p></b>

		<table class="table">
			<thead class="thead-light">
			    <tr>
			      <th scope="col">N°</th>
			      <th><button type="button" class="btn btn-primary">+Agregar dia</button></th>
			    </tr>
		  	</thead>
		 	<tbody>
			    <tr>
			      <td scope="row">1</td>
			    </tr>
		  	</tbody>
		</table>

		<hr>
		
		<b><p>Sitios</p></b>
		<table class="table">
			<thead class="thead-light">
			    <tr>
			      <th scope="col">Hora</th>
			      <th scope="col">Actividad</th>
			      <th scope="col">Descripción</th>
			      <th><a href="#crear-sitio" type="button" class="btn btn-primary">+Agregar Sitio</a></th>
			    </tr>
		  	</thead>
		 	<tbody>
			    <tr>
			      <td scope="row">7:00</td>
			      <td scope="row">Nombre actividad</td>
			      <td scope="row">Descripción actvidad</td>
			    </tr>
		  	</tbody>
		</table>

		<hr>
		<b><p>Nuevo Sitio</p><b/>
		<form>
			<div class="comp-form" id="crear-sitio">
				<label for="tipo_de_evento">Dia:</label>
				<span class="obligatorio">*</span>
				<select name="tipo_de_evento" id="tipo_de_evento" class="form-control">
				<option value="o1">Dia 1</option>
				</select>
			</div>
			<hr>
			<div class="comp-form">
				<label for="nombre_del_evento">Hora:</label>
				<span class="obligatorio">*</span>
				<input type="time" id="nombre_del_evento" class="form-control">
			</div>
			<hr>
			<div class="comp-form">
				<label for="direccion_del_evento">Nombre de la actividad:</label>
				<span class="obligatorio">*</span>
				<input type="text" placeholder="Ingresa el nombre de actividad" id="direccion_del_evento" class="form-control">
			</div>
			<hr>
			<div class="comp-form">
				<label for="descripcion_del_evento">Descripción de la actividad:</label>
				<span class="obligatorio">*</span>
				<textarea name="descripcion_del_evento" id="descripcion_del_evento" placeholder="Descripción de la actividad" cols="30" rows="5" class="form-control"></textarea>
			</div>
			<input type="submit" class="btn btn-primary" value="Crear sitio">

		</form>

		<hr>
			<div class="comp-form cont-btn">
				<div class="cont-cancelar">
					<button class="btn btn-danger">Cancelar</button>
				</div>
				<div class="cont-guardar">
					<input type="submit" class="btn btn-primary" value="Guardar y continuar">
				</div>
			</div>

	</div>


@endsection
@include ('footer')
