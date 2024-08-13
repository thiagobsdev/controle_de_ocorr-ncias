<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\CadastroHandler;

class CadastroController extends Controller {

    

    public function cadastro() {
        $flash= "";
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash']="";
        }

        $this->render('cadastro', 
            ['flash' => $flash]);
    }

    public function cadastroAction() {
        $nome = filter_input(INPUT_POST,'nome');
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST,'senha');
        $nivel = filter_input(INPUT_POST,'nivel');
        $status = filter_input(INPUT_POST,'status');

        if( $nome && $email && $senha && $nivel && $status) {
            if( CadastroHandler::emailExiste($email)===false ){
                CadastroHandler::addUsuario($nome, $email, $senha, $nivel, $status);
                $_SESSION['flash']="Usuário cadastrado com sucesso!";
                $this->redirect('/cadastro');
            }else {
                $_SESSION['flash']="Email já cadastrado!";
                $this->redirect('/cadastro');
            }
        }else{
            $this->redirect('/cadastro');
        }
    }


}