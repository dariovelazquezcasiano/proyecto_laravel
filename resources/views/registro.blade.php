@extends('layout')
@section('metas')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('titulo')
	Productos | Registrar
@endsection
@section('styles')
	<link rel="stylesheet" href="css/registro.css">
	<link rel="stylesheet" href="css/sweetalert2.min.css">
@endsection
@section('contenido')
<div class="container banner">
	<br>
	<h1>REGISTRO</h1>
</div>
<div class="container main">
	<br>
	<div class="row">
		<di class="col-sm">
			<h3>Registra Un Producto</h3>
		</di>
		<di class="col-sm">
			<a class="btn btn-secondary" href="{{ route('principal') }}">Ver Productos</a>
		</di>
	</div>
	<br>
	@if(count($errors))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="/registro" method="POST" role="form">
		{{ csrf_field() }}
	<div class="row">
		<div class="form-group col-sm">
			<label for="nombre">Nombre De Producto</label>
			<input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Ingresa el Nombre">
		</div>
		<div class="form-group col-sm">
			<label for="dato3">Dato3</label>
			<input type="text" class="form-control" name="dato3" id="dato3" value="{{ old('dato3') }}" placeholder="Ingresa solo 'Numeros' y '/'">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm">
			<label for="dato4">Dato4</label>
			<input type="text" class="form-control" name="dato4" id="dato4" value="{{ old('dato4') }}" placeholder="Ingresa el Dato">
		</div>
		<div class="form-group col-sm">
			<label for="dato5">Dato5</label>
			<input type="text" class="form-control" name="dato5" id="dato5" value="{{ old('dato5') }}" placeholder="Ingresa el Dato">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm">
			<label for="dato6">Dato6</label>
			<input type="text" class="form-control" name="dato6" id="dato6" value="{{ old('dato6') }}" placeholder="Ingresa el Dato">
		</div>
		<div class="form-group col-sm">
			<label for="dato7">Dato7</label>
			<input type="text" class="form-control" name="dato7" id="dato7" value="{{ old('dato7') }}" placeholder="Ingresa el Dato">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm">
			<label for="dato8">Dato8</label>
			<input type="text" class="form-control" name="dato8" id="dato8" value="{{ old('dato8') }}" placeholder="Ingresa el Dato">
		</div>
	</div>
	<div class="row">
		<button type="submit" class="btn btn-primary btnguradar">Guardar</button>
	</div>
	<input type="text" name="prueba" id="prueba">
	</form>
</div>

@endsection
@section('scripts')
<script src="js/sweetalert2.min.js"></script>
<script src="js/cleave.js"></script>
<script src="js/formato.js"></script>
@if( !empty($Mensaje))
	<script language="javascript">
		Swal.fire("{{ $Mensaje }}");
	</script>
@endif
@endsection
