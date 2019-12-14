<?php

// aprendible.com =  Route::get('/',function());
// aprendible.com/contacto = Route::get('cantacto',funtion())

Route::get('/',function(){
	return "Saludos";
});

Route::get('contacto',function(){
	return "Bienvenido a contacto";
});


// Parametros obligatorios
Route::get('saludo/{nombre}',funtion($nombre){
	return "Saludos".$nombre;
});

// Parametros obligatorios
Route::get('saludo/{nombre?}',funtion($nombre = "invitado"){
	return "Saludos".$nombre;
});

