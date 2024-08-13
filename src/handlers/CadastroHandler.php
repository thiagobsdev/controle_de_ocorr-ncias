<?php
namespace src\handlers;

use \src\models\Usuario;


class CadastroHandler  {

    public static function emailExiste($email) {

        $usuario = Usuario::select()->where('email', $email)->one();
        return $usuario ? true: false;
    }

    public static function addUsuario($nome, $email, $senha, $nivel, $status) {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        Usuario::insert([
            'nome' => $nome,
            'email' => $email,
            'senha' => $hash,
            'nivel' => $nivel,
            'status'=>$status

        ])->execute();

        
    }

}