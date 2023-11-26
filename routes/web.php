<?php

use App\Http\Controllers\Web\AuthController;
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
    return redirect('/admin');
});

Route::get('/admin', function () {
    return view('panel.index');
})->middleware('auth');

Route::get('/admin/categorias', function () {
    return view('panel.categorias.index');
})->middleware('auth');

Route::get('/admin/etiquetas', function () {
    return view('panel.etiquetas.index');
})->middleware('auth');

Route::get('/admin/nivelDificultad', function () {
    return view('panel.nivelDificultad.index');
})->middleware('auth');

Route::get('/admin/tamaños', function () {
    return view('panel.tamaños.index');
})->middleware('auth');

Route::get('/admin/usuarios', function () {
    return view('panel.usuarios.index');
})->middleware('auth');

Route::get('/admin/usuarios/{id}', function () {
    return view('panel.usuarios.details');
})->middleware('auth');

Route::get('/admin/nonogramas', function () {
    return view('panel.nonogramas.index');
})->middleware('auth');

Route::get('/admin/nonogramas/{id}', function () {
    return view('panel.nonogramas.details');
})->middleware('auth');

Route::get('/admin/modales', function () {
    return view('panel.modales.index');
})->middleware('auth');

Route::get('/admin/modales', function () {
    return view('panel.modales.ejemplo');
})->middleware('auth');

Route::get('/signin', function () {
    return view('app.signin');
})->name("login");

Route::get('/signup', function () {
    return view('app.signup');
});

Route::post('/signin', [ AuthController::class, 'signin' ]);

Route::post('/signup', [ AuthController::class, 'signup' ]);
Route::get('/logout', [ AuthController::class, 'logout' ]);

Route::get('/forgot-password', function () {
    return view('app.forgetpassword');
});
