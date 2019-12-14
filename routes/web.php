<?php

//Route::view('/','home',['nombre'=>'Jorge']); // cuando se retornan vistas con pocas o ninguna informacion

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/contact','contact')->name('contact');
