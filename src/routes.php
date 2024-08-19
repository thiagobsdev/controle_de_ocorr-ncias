<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@entrar');
$router->post('/login', 'LoginController@entrarAction');
$router->get('/sair', 'LoginController@sair');

$router->get('/cadastro', 'CadastroController@cadastro');
$router->post('/cadastro', 'CadastroController@cadastroAction');
$router->get('/alterar_senha', 'CadastroController@alterarSenha');

$router->get('/nova_ocorrencia', 'OcorrenciaController@cadastrarOcorrencia');
$router->post('/nova_ocorrencia', 'OcorrenciaController@cadastrarOcorrenciaAction');





//$router->get('/sair');

