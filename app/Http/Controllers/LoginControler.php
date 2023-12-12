<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControler extends Controller
{
    public function loginPost(){
        $email=Request('email');
        $password=Request('password');

        $nombresCorreo = ["alumne@gmail.com","professor@gmail.com","centre@gmail.com"];

        if($email == $nombresCorreo[0]){
            return view('user.alumne')->with('email',$email);
        }
        else if($email == $nombresCorreo[1]){
            return view('user.professor')->with('email',$email);
        }
        else if($email == $nombresCorreo[2]){
            $professors = [
                [
                    'id' => 1,
                    'nom' => 'Oriol',
                    'email' => 'oriol@exemple.com',
                    'curs' => '1',
                ],
                [
                    'id' => 2,
                    'nom' => 'Joana',
                    'email' => 'joana@exemple.com',
                    'curs' => '1',
                ],
                [
                    'id' => 3,
                    'nom' => 'Carla',
                    'email' => 'carla@exemple.com',
                    'curs' => '2',
                ]
                ];
            return view('user.centre')->with('email',$email)->with('professors', $professors);
        }
        else{
            return "Error d'access";
        }
        
    }


    // controlador practica 3
    public function signInPractica3(){
        return view('practica3.signin');
    }
    public function signUpPractica3(){
        return view('practica3.signup');
    }

    public function datosUser(){
        $nom= request('nom');
        $cognom = request('cognom');
        $email= request('email');
    
        return view('practica3.mostrarInfo')->with([
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            ]);
    }
}