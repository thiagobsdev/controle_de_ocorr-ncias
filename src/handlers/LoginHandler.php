<?php
namespace src\handlers;

use \src\models\Usuario;


class LoginHandler  {

    public static function checkLogin() {

        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $data = Usuario::select()->where('token', $token)->one();
            if(count($data) > 0) {

                $usuarioLogado = new Usuario();
                $usuarioLogado->setId($data['id']);
                $usuarioLogado->setId($data['nome']);
                $usuarioLogado->setId($data['email']);
                $usuarioLogado->setId($data['senha']);
                $usuarioLogado->setId($data['nivel']);
                $usuarioLogado->setId($data['token']);
                $usuarioLogado->setId($data['status']);

                return $usuarioLogado; 
            }
        }
        return false;
    }

    public static function verificaLogin($email, $senha) {

        $usuario = Usuario::select()->where('email', $email)->one();
        if($usuario) {
            if(password_verify($senha, $usuario['senha'])) {
                $token = md5(time().rand(0,9999).time());
                Usuario::update()
                        ->set('token', $token)
                        ->where('email',$email)
                    ->execute();
                return $token;

            }
        }

        return false;

    }

}