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

    public function request(Request $request, $id=0) {
        if ($id==0) {
            echo "Passa alguma coisa aí, rapaz!";
        } else {
            dd($id);
        }
    }

    public function exibirFormulario() {
        return view('formulario');
    }

    public function cadastrarFormulario(Request $request) {
        dd($request->nome);
    }

}
