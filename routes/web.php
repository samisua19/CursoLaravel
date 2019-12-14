<?php

Route::get('/',function(){
	$nombre = "Jorge";

	 //return view('home')->with('nombre',$nombre);
	//return view('home')->with(['nombre'=>$nombre]);
	//return view('home',['nombre'=>$nombre]);
	return view('home',compact('nombre'));

})->name('home');