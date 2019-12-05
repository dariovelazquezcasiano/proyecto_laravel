@extends('layout')
@section('metas')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('titulo')
Productos | Buscar
@endsection
@section('styles')
<link rel="stylesheet" href="css/datos.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/sweetalert2.min.css">
@endsection
@section('contenido')

<div class="container banner">
	<br>
	<h1>PRODUCTOS</h1>

</div>

<div class="container main">
	<br>
	<div class="row">
		<div class="col-sm">
			<h3>Busca Un Producto</h3>
		</div>
		<div class="col-sm">
			<a class="btn btn-secondary" href="{{ route('imprimir') }}">Imprimir</a>
			<a class="btn btn-secondary" href="{{ route('formulario') }}">Agragar Producto</a>
		</div>
	</div>
	<!--Input Busqueda -->
	<div class="buscar">
		<label for="producto">Que producto buscas?</label>
		<input type="text" class="form-control" name="search" id="search" placeholder="Producto">
	</div>
	<!-- Fin Input Busqueda -->
	<!-- Tabla Productos -->
	<div class="table-responsive">
		<h3>Total Productos : <span id="total_articulos"></span> </h3>
		<table class="table table-striped tabla">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Dato3</th>
					<th scope="col">Dato4</th>
					<th scope="col">Dato5</th>
					<th scope="col">Dato6</th>
					<th scope="col">Dato7</th>
					<th scope="col">Dato8</th>
					<th scope="col">Accion</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>
	<!-- Tabla Productos -->
</div>
@endsection
@section('scripts')
<script src="js/sweetalert2.min.js"></script>
<script src="js/productoDU.js"></script>
<script src="js/datos.js"></script>



@endsection

