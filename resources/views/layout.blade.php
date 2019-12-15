<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Aprendible')</title> {{-- El segundo parametro es por defecto, si no esta definido--}}
	<style>
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials/nav')
	@yield('content') {{-- es donde ira el contenido dinamico--}}
</body>
</html>