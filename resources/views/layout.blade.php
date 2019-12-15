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
	<nav>

		{{-- {{request()->url()}} muestra la url de la pagina donde esta
		{{ request()->path()}} muestra la url interna de la pagina
		{{ request()-routeIs('home') }} devuelve V/F si la pagina por parametro es la misma--}}
		<ul>
			<li class="active"><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/portfolio">Portfolio</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
	</nav>
	@yield('content') {{-- es donde ira el contenido dinamico--}}
</body>
</html>