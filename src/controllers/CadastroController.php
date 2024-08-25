<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\CadastroHandler;
use \src\models\Usuario;

class CadastroController extends Controller
{

    private $usuarioLogado;


    public function __construct()
    {
        $this->setUsuarioLogado(LoginHandler::checkLogin());
        if ($this->usuarioLogado === false) {
            $this->redirect('/login');
        } else {
            $this->usuarioLogado = Usuario::select()->where('token', $_SESSION['token'])->one();
        }
    }


    public function cadastro()
    {

        $flash = "";
        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = "";
        }

        $usuarios = LoginHandler::getAllUsuarios();


        $this->render(
            'cadastro',
            [
                'flash' => $flash,
                'usuariologado' => $this->usuarioLogado,
                'usuarios' => $usuarios
            ]
        );
    }

    public function cadastroAction()
    {
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');
        $nivel = filter_input(INPUT_POST, 'nivel');
        $status = filter_input(INPUT_POST, 'status');

        if ($nome && $email && $senha && $nivel && $status) {
            if (CadastroHandler::emailExiste($email) === false) {
                CadastroHandler::addUsuario($nome, $email, $senha, $nivel, $status);
                $_SESSION['flash'] = "Usuário cadastrado com sucesso!";
                $this->redirect('/cadastro');
            } else {
                $_SESSION['flash'] = "Email já cadastrado!";
                $this->redirect('/cadastro');
            }
        } else {
            $this->redirect('/cadastro');
        }
    }

    public function alterarSenha()
    {
        $this->render('alterarsenha', ['usuariologado' => $this->usuarioLogado]);
    }


    public function alterarStatusAction()
    {
        $array = ['error' => ''];

        $id = intval(filter_input(INPUT_POST, 'id'));

        if ($id) {
            LoginHandler::alterarStatus($id);
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erro ao alterar status']);
        }
    }

    public function alterarSenhaUsuarioAction()
    {
        $array = ['error' => ''];

        $id = intval(filter_input(INPUT_POST, 'id'));

        if ($id) {
            LoginHandler::resetarSenhaUsuario($id);
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erro ao resetar a senha']);
        }
    }

    public function alterarNivelUsuarioAction()
    {
        $array = ['error' => ''];

        $id = intval(filter_input(INPUT_POST, 'id'));

        if ($id) {
            LoginHandler::alterarNivelUsuario($id);
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erro ao resetar a senha']);
        }
    }


    public function getUsuarioLogado()
    {
        return $this->usuarioLogado;
    }

    public function setUsuarioLogado($usuario)
    {
        $this->usuarioLogado = $usuario;
    }
}
