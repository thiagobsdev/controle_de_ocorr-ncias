<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

    private $usuarioLogado;

    public function __construct(){
        $this->usuarioLogado = LoginHandler::checkLogin() ;
        if($this->usuarioLogado=== false) {
            $this->redirect('/login');
        }
        
    }

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }


}