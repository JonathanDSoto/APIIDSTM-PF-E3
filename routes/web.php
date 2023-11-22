<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('panel.index');
});

Route::get('/admin/categorias', function () {
    return view('panel.categorias.index');
});

Route::get('/admin/etiquetas', function () {
    return view('panel.etiquetas.index');
});

Route::get('/admin/nivelDificultad', function () {
    return view('panel.nivelDificultad.index');
});

Route::get('/admin/tamaños', function () {
    return view('panel.tamaños.index');
});

Route::get('/admin/usuarios', function () {
    return view('panel.usuarios.index');
});

Route::get('/admin/usuarios/{id}', function () {
    return view('panel.usuarios.details');
});

Route::get('/admin/nonogramas', function () {
    return view('panel.nonogramas.index');
});

Route::get('/signin', function () {
    return view('app.signin');
});

Route::get('/signup', function () {
    return view('app.signup');
});

Route::get('/forgetpassword', function () {
    return view('app.forgetpassword');
});
