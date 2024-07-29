<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use Log;

class UsuarioService {

    public function salvarUsuario(Usuario $user, Endereco $endereco){

        try{

            //buscando um usuario com o email ja existente
            $dbUsuario = Usuario::where('email', $user->email)->first();
            if($dbUsuario){

                return['status' => 'err', 'message' => 'E-mail já cadastrado no sistema.'];
            }


            \DB::beginTransaction();

            $user->save(); //salva o usuario
            $endereco->usuario_id = $user->id; //relacionamento das tabelas
            $endereco->save(); //salva o endereco

            \DB::commit();
            return['status' => 'ok', 'message' => 'Usuário cadastrado com sucesso!'];
        }
        catch(\Exception $e){

            \Log::error("ERRO", ['file' => 'UsuarioService.salvarUsuario',
                                'message' => $e->getMessage()]);
            \DB::rollback();
            return['status' => 'err', 'message' => 'Não foi possível cadastrar o usuário.'];
        }
    }
}