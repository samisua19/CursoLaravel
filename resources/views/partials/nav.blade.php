{{-- {{request()->url()}} muestra la url de la pagina
 {{request()->path()}} muestra la url interna de la pagina
 {{request()->routeIs('home')}} devuelve V/F si se ecuentra en la pagina enviada por parametro--}}
<nav>
	<ul>
		<li class="{{ setActive('home')}}"><a href="/">Home</a></li>
		<li class="{{ setActive('about')}}"><a href="/about">About</a></li>
		<li class="{{ setActive('portfolio')}}"><a href="/portfolio">Protfolio</a></li>
		<li class="{{ setActive('contact')}}"><a href="/contact">Contact</a></li>
	</ul>
</nav>