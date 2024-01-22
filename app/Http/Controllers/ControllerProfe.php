<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class ControllerProfe extends Controller
{
    function index(){
        $llistaProf = Usuari::where('rol', 'profe')->get();
        return View("centre.admin")->with('llistaProf', $llistaProf);
    }

    function create(){
        return View("profe.add");
    }

    function edit($id){
        $profesor = Usuari::find($id);
        return View("profe.editar")->with("profe", $profesor);
    }

    function store(Request $request){
        $usuari = new Usuari();

        $usuari->nom = $request->nom;

        $usuari->save();
        
        $llistaProf= Usuari::where('rol', 'profe')->get();
        return View("centre.index")->with('llistaProf', $llistaProf);
    }

    function update($id){
        $usuari = Usuari::find($id);

        $usuari->id = request('id');
        $usuari->nom = request('nom');
        $usuari->cognoms = request('cognoms');
        $usuari->password = request('password'); 
        $usuari->email = request('email');
        $usuari->rol = request('rol');
        $usuari->actiu = request()->has('actiu');

        $usuari->save();

        $lista= Usuari::where('rol','profe')->get();
        return view('centre.admin')->with('lista', $lista);

    }
    

    function destroy($id){
        $user=Usuari::find($id);
        $user->delete();
        $lista= Usuari::where('rol','profe')->get();
        return view('centre.admin')->with('lista', $lista);
    }
}
