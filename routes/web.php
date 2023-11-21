<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;

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