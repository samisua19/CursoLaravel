@extends('layout') {{-- Directiva de blade que trae la plantilla en views--}}



@section('content') {{--inicio de contenido dinamico--}}
 	{{-- Donde va el contenido dinamico --}}
 	<h1>Portfolio</h1>
 	<ul>
 		{{-- @if @isset @foreach @forelse(foreach con condicional si la variable esta vacia) @for @while --}}
 			@forelse($portfolio as $portfolioitem)
 				{{-- <li>{{ $portfolioitem['title']}} <pre>{{ var_dump($loop)}}</pre> </li>  var_dump($loop) muestra la informacion de la iteracion de for
 				(i teracion,index,elemtos que quedan, total de elementos, si es el primero, si es el ultimo,profundidad del arreglo)--}}
 				<li>{{ $portfolioitem['title']}} <pre>{{ $loop->last ? 'Es el ultimo' : ''}}</pre> </li> {{-- pregunta si el item es el ultimo--}}
 			@empty
 				<li>No hay proyectos para mostrar</li>
 			@endforelse

 	</ul>
@endsection {{--fin de contenido dinamico--}}