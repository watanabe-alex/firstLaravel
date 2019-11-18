<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function viewHome() {

        $usuario = new Usuario();
        $listaUsuarios = $usuario->all();
        //$listaUsuarios = Usuario::all();  // poderia ser feito assim também


        //dd($listaUsuarios);
        return view('home',["listaUsuarios"=>$listaUsuarios]);
    }

}
