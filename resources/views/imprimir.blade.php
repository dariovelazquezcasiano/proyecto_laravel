@extends('layout')
@section('metas')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
@endsection
@section('titulo')
Productos | Imprimir
@endsection
@section('styles')
<link rel="stylesheet" href="css/datos.css">
@endsection
@section('contenido')

<div class="container banner">
	<br>
	<h1>IMPRIMIR</h1>

</div>

<div class="container main">
	<br>
	<div class="row">
		<div class="col-sm">
			<h3>Elige los registros ha imprim</h3>
		</div>
		<div class="col-sm">
			<a class="btn btn-secondary" href="{{ route('principal') }}">Ver Productos</a>
		</div>
	</div>
	<!--Input Busqueda -->
	<div class="buscar">
		<label for="producto">Que producto buscas?</label>
		<input type="text" class="form-control" name="search" id="search" placeholder="Producto">
	</div>
	<!-- Fin Input Busqueda -->
	<!-- Tabla Productos -->
</div>
@endsection
@section('scripts')
<script src="js/sweetalert2.min.js"></script>
<script src="js/productoDU.js"></script>
<script src="js/datos.js"></script>



@endsection

