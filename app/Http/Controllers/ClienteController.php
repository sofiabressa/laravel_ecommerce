<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Services\UsuarioService;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        
        $data = [];

        return view('cadastrar', $data);
    }

    public function cadastrarUsuario(Request $request){

        //pega todos os valores do formulario
        $values = $request->all();

        $usuario = new Usuario();
        $usuario->fill($values);

        $senha = $request->input("password");
        $usuario->password = \Hash::make($senha); //criptografar

        $endereco = new Endereco($values);
        
        $usuarioService = new UsuarioService();
        $result = $usuarioService->salvarUsuario($usuario, $endereco);

        $message = $result["message"];
        $status = $result["status"];

        //ok, cadastrado com sucesso ou err, usuario nao cadastrado
        $request->session()->flash($status, $message);

        return redirect()->route('cadastrar');
    }
}
