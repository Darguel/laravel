<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuari;

class LoginControler extends Controller
{
    public function loginPost(){
        $email = Request("email");
        $password = Request("password");

        // $nombresCorreo = ["alumne@gmail.com","professor@gmail.com","centre@gmail.com"];

        $consulta = Usuari::where('email', $email)->where('password', $password)->first();

        

        if ($consulta->rol == 'admin'){
            $lista_profe = Usuari::where('rol', "profe")->get();
            return view('centre.admin')->with('lista', $lista_profe);
        }
        else if($consulta->rol == 'profe'){
            $lista_alumnos = Usuari::where('rol', "alumnat")->get();
            return view('centre.profe')->with('lista', $lista_alumnos);
        }


        // return  $consulta ;

        // $nombresCorreo = Usuari

        // if($email == $nombresCorreo[0]){
        //     return view('user.alumne')->with('email',$email);
        // }
        // else if($email == $nombresCorreo[1]){
        //     return view('user.professor')->with('email',$email);
        // }
        // else if($email == $nombresCorreo[2]){
        //     $professors = [
        //         [
        //             'id' => 1,
        //             'nom' => 'Oriol',
        //             'email' => 'oriol@exemple.com',
        //             'curs' => '1',
        //         ],
        //         [
        //             'id' => 2,
        //             'nom' => 'Joana',
        //             'email' => 'joana@exemple.com',
        //             'curs' => '1',
        //         ],
        //         [
        //             'id' => 3,
        //             'nom' => 'Carla',
        //             'email' => 'carla@exemple.com',
        //             'curs' => '2',
        //         ]
        //         ];
        //     return view('user.centre')->with('email',$email)->with('professors', $professors);
        // }
        // else{
        //     return "Error d'access";
        // }
        
    }


    // controlador practica 3
    public function signInPractica3(){
        return view('practica3.signin');
    }
    public function signUpPractica3(){
        return view('practica3.signup');
    }

    public function datosUser(){
        $id = request('id');
        $nom= request('nom');
        $cognom = request('cognom');
        $password = request('password');
        $email= request('email');
        if(request('actiu') == 'ON'){
            $actiu = true;
        }
        else{
            $actiu = false;
        } ;
        $rol= request('rol');

        $usuari = new Usuari();

        $usuari->id = $id;
        $usuari->nom = $nom;
        $usuari->cognoms = $cognom;
        $usuari->password = $password;
        $usuari->email = $email;
        $usuari->actiu = $actiu;
        $usuari->rol = $rol;
        $usuari-> save();
    
        return view('practica3.mostrarInfo')->with([
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            ]);
    }
}