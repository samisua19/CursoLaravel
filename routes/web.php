<?php

Route::get('contactanos',function(){ // contatanos es el nombre de la URL
	return "Seccion de contactos";
})->name('contactos'); // Se accede a la ruta pór medio del nombre

Route::get('/',function(){
	echo "<a href=".route('contactos').">Contatos 1 </a><br>";
	echo "<a href=".route('contactos').">Contatos 1 </a><br>";
	echo "<a href=".route('contactos').">Contatos 1 </a><br>";
	echo "<a href=".route('contactos').">Contatos 1 </a><br>";
	echo "<a href=".route('contactos').">Contatos 1 </a><br>";
});