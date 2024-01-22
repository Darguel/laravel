<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\ControllerProfe;
use App\Http\Controllers\ControllerAlumnos;
use App\Http\Middleware\LoginMiddleware;

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


Route::get('/hola/{nom}', function ($nom) {
    return "Hello world " . $nom;
});


Route::get('/adeu', function () {
    return "Bye world";
});

Route::get('/sign/signin', function () {
    return view('signin');
});

Route::get('/sign/signin/{v1}/{v2}/{v3}/{v4}', [PrimerControlador::class, 'vista1']); 

Route::get('/sign/signup/{v1}/{v2}/{v3}', [PrimerControlador::class, 'vista2']); 

Route::post('/login', [LoginControler::class, 'loginPost'])->middleware('email');


// Routes de la practica 3
Route::get('/signin', [App\Http\Controllers\LoginControler::class, 'signInPractica3'])->name('signin');
Route::get('/signup', [App\Http\Controllers\LoginControler::class, 'signUpPractica3'])->name('signup');
Route::post('/mostrarInfo', [App\Http\Controllers\LoginControler::class, 'datosUser']) -> middleware('email');


Route::get('/error', function(){
    return "Error d'accès";
    })->name('errorAcces.index');

// 

//administración de usuarios

Route::controller(ControllerProfe::class)->group(function(){
    Route::get('/prof', 'index') -> name('prof.index');
    Route::get('/prof/edit/{id}', 'edit') -> name('prof.edit');
    Route::get('/prof/create', 'create') -> name('prof.create');
    Route::post('/prof', 'store') -> name('prof.store');
    Route::put('/prof/{id}', 'update') -> name('prof.update');
    Route::delete('/prof/{id}', 'destroy') -> name('prof.destroy');
});