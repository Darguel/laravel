<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    //
    public function vista1($v1, $v2, $v3, $v4){
            $titol_controlador = ' ' . $v1 . ' ' . $v2 . ' ' . $v3 . ' ' . $v4;
            return view('signin')-> with('titol_vista', $titol_controlador);
    }

    public function vista2($v1, $v2, $v3){
        
        $titol_controlador = ' ' . $v1 . ' ' . $v2 . ' ' . $v3;
        return view('signup')-> with('titol_vista', $titol_controlador);
        
    }
}




