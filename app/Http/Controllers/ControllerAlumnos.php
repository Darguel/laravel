<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class ControllerAlumnos extends Controller
{
    function index(){
        $llistaalum = Usuari::where('rol', 'alumnat')->get();
        return View("centre.profe")->with('llistaalum', $llistaalum);
    }

    function create(){
        return View("alumne.add");
    }

    function edit($id){
        $alumne = Usuari::find($id);
        return View("alumne.editar")->with("alumnat", $alumne);
    }

    function store(Request $request){
        $usuari = new Usuari();

        $usuari->id = $request->id;
        $usuari->nom = $request->nom;
        $usuari->cognoms = $request->cognom;
        $usuari->email = $request->email;
        $usuari->password = $request->password;
        $usuari->rol = true;
        $usuari->actiu = $request->actiu;

        $usuari->save();
        
        $llistaProf= Usuari::where('rol', 'alumnat')->get();
        return View("profe.index")->with('llistaProf', $llistaProf);
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

        $lista= Usuari::where('rol','alumnat')->get();
        return view('centre.profe')->with('lista', $lista);

    }
    

    function destroy($id){
        $user=Usuari::find($id);
        $user->delete();
        $lista= Usuari::where('rol','alumnat')->get();
        return view('centre.profe')->with('lista', $lista);
    }
}
