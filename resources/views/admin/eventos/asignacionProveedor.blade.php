
@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<div class="contenedor">
		<h2>Asignacion de proveedores</h2>
		<hr>
		<p style="margin-top: 3%;">En esta seccion podra asignar proveedores para el apoyo logistico o de su evento, Tenga en cuenta que los proveedores ya deben estar registrados en el sistema</p>

		<b><p>Nuevo proveedor</p></b>

		<form>
		<div class="comp-form" id="nueva-tarea">
			<div class="comp-form">
				<label for="nombre_del_evento">Correo del proveedor</label>
				<span class="obligatorio">*</span>
				<input type="text" id="nombre_del_evento" class="form-control">
			</div>
			<hr>
			<div class="comp-form">
				<label for="descripcion_del_evento">Tipo del proveedor:</label>
				<span class="obligatorio">*</span>
				<select name="tipo_de_evento" id="tipo_de_evento" class="form-control">
				<option value="o1">tipo proveedor</option>
				</select>
			</div>
			<hr>
			<b><p>Asignacion de tareas</p></b>
			<table class="table" style="margin-top:2%;">
			<thead class="thead-light">
			    <tr>
			      <th scope="col">N°</th>
			      <th scope="col">Asignar</th>
			      <th scope="col">Tareas</th>
			      <th scope="col">Insumos</th>
			      <th scope="col">Hora</th>
			      <th scope="col">Sitio</th>
			    </tr>
		  	</thead>
		 	<tbody>
			    <tr>
			      <td scope="row">1</td>
			      <td scope="row"><input type="checkbox" class="form-check-input"></td>
			      <td scope="row">Nombre tarea</td>
			      <td scope="row">Insumo</td>
			      <td scope="row">20:00pm</td>
			      <td scope="row">Parque de la vida</td>
			    </tr>
		  	</tbody>
		</table>
		
			<input type="submit" class="btn btn-primary " value="Asignar tareas">
			<input type="submit" class="btn btn-primary" value="Asignar proveedor">
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
