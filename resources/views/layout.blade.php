<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('metas')
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="css/app.css">
	@yield('styles')
</head>
<body>

		@yield('contenido')

<script src="js/app.js"></script>
	@yield('scripts')
</body>
</html>