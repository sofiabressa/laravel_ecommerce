<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Services\UsuarioService;
use Illuminate\Contracts\Auth\Authenticatable;
use Auth;

class UsuarioController extends Controller
{
    public function logar(Request $request){

        $data = [];

        if($request->isMethod("POST")){
            //se entrar neste if é pq clicou em logar
            $email = $request->input("email");
            $senha = $request->input("senha");

            $credential = [ 'email' => $email, 'password' => $senha ];
            //logar
            if(Auth::attempt($credential)){
                return redirect()->route("home");
            }
            else{
                $request->session()->flash("err", "Usuário / senha inválido");
                return redirect()->route("logar");
            }
        }
        return view("logar", $data);
    }

    public function sair(Request $request){

        Auth::logout();
        return redirect()->route("home");
    }
}