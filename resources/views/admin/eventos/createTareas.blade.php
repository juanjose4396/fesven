
@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<div class="contenedor">
		<h2>Tareas del evento</h2>
		<hr>
		<p style="margin-top: 3%;">En esta seccion podra asignar proveedores para el apoyo logistico o de su evento, Tenga en cuenta que los proveedores ya deben estar registrados en el sistema</p>

		<b><p>Tareas del evento</p></b>

		<div>
		<a href="#nueva-tarea"><button type="button" class="btn btn-primary pull-right">Nueva Tarea</button></a>
		</div>

		<table class="table" style="margin-top:10%;">
			<thead class="thead-light">
			    <tr>
			      <th scope="col">N°</th>
			      <th scope="col">Nombre de la tarea</th>
			      <th scope="col">Insumos</th>
			      <th scope="col">Hora</th>
			      <th scope="col">Fecha Limite</th>
			      <th scope="col">Sitio</th>
			    </tr>
		  	</thead>
		 	<tbody>
			    <tr>
			      <td scope="row">1</td>
			      <td scope="row">Actividad 1</td>
			      <td scope="row">Insumos test</td>
			      <td scope="row">20:00</td>
			      <td scope="row">20/02/2017</td>
			      <td scope="row">Parque de la vida</td>
			    </tr>
		  	</tbody>
		</table>

		<hr>
		
		<b><p>Nueva Tarea</p><b/>
		<form>
		<div class="comp-form" id="nueva-tarea">
			<div class="comp-form">
				<label for="nombre_del_evento">Nombre Tarea</label>
				<span class="obligatorio">*</span>
				<input type="text" id="nombre_del_evento" class="form-control">
			</div>
			<hr>
			<div class="comp-form">
				<label for="descripcion_del_evento">Descripción de la tarea:</label>
				<span class="obligatorio">*</span>
				<textarea name="descripcion_del_evento" id="descripcion_del_evento" placeholder="Descripción de la tarea" cols="30" rows="5" class="form-control"></textarea>
			</div>
			<hr>
			<div class="comp-form">
				<label for="nombre_del_evento">Fecha limite</label>
				<span class="obligatorio">*</span>
				<input type="date" id="nombre_del_evento" class="form-control">
			</div>

			<div class="comp-form" id="crear-sitio">
				<label for="tipo_de_evento">Añadir a la lista de:</label>
				<span class="obligatorio">*</span>
				<select name="tipo_de_evento" id="tipo_de_evento" class="form-control">
				<option value="o1">proveedor</option>
				</select>
			</div>

			<hr>

			<input type="submit" class="btn btn-primary" value="Crear tarea">

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
