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
            return view('user.centre')->with('email',$email);
        }
        
    }
}