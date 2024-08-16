<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

    private $usuarioLogado;


    public function __construct(){
        $this->setUsuarioLogado(LoginHandler::checkLogin());
        if($this->usuarioLogado=== false) {
            $this->redirect('/login');
        }else{
            $this->usuarioLogado = Usuario::select()->where('token', $_SESSION['token'])->one();
        }
        
    }

    public function index() {

       
        $this->render('home',['usuariologado'=> $this->usuarioLogado]);
    }

    public function getUsuarioLogado(){
        return $this->usuarioLogado;
    }

    public function setUsuarioLogado( $usuario){
        $this->usuarioLogado = $usuario;
    }


    

}