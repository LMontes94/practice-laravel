<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'App\Http\Contrllers\InicioController@index');
Route::resource('/', 'App\Http\Contrllers\PersonaController');
Route::get('/texto', function () {
    return '<h1>Pruebaa de la route </h1>';
});

Route::get('/cliente/{cliente?}', function ($cliente = 'Cliente general') {
    $arreglo = ['lunes', 'martes', 'miercoles'];
    return '<h1>El cliente es: ' . $cliente . '</h1>';
});

Route::get('/arreglo', function () {
    $arreglo = ['lunes', 'martes', 'miercoles'];
    return $arreglo;
});

Route::get('/ruta1', function () {
    return '<h1>ruta 1 </h1>';
})->name('rutaNro1');

Route::get('/ruta2', function () {
    return redirect()->route('rutaNro1');
});

//validacion
Route::get('/usuario/{usuario}', function ($usuario) {
    return '<h1>El usuario es: ' . $usuario . '</h1>';
})->where('usuario', '[A-Za-z]+');

if (View::exists('vista2')) {
    Route::get('/', function () {
        return view('vista2');
    });
} else {
    Route::get('/', function () {
        return '<h1>No existe la vista 2 </h1>';
    });
}

Route::get('/', function () {
    return view('vista1');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
