<?php

//Route::view('/','home',['nombre'=>'Jorge']); // cuando se retornan vistas con pocas o ninguna informacion



//Route::view('/','home')->name('home');
//Route::view('/about','about')->name('about');
//Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio');
//Route::get('/portfolio','PortfolioController@index')->name('portfolio'); // se cambia por la de arriba
//Route::view('/contact','contact')->name('contact');

Route::resource('projects','PortfolioController'); // crear rutas para metodos resources
//Route::resource('projects','PortfolioController')->only(['index','show']); // mostrar solo rutas a esos metodos
//Route::resource('projects','PortfolioController')->except(['index','show']); // crear rutas para metodos resources