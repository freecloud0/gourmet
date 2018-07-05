<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('paginas/inicio');
});
Route::get('trabajo', function () {
    return view('paginas/trabajo');
});
Route::get('registro', function () {
    return view('paginas/registro');
});
Route::get('noticia', function () {
    return view('paginas/noticia');
});
Route::get('alumno', function () {
    return view('paginas/alumno');
});
Route::get('contacto', function () {
    return view('paginas/contacto');
});