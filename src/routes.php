<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@entrar');
$router->post('/login', 'LoginController@entrarAction');
$router->get('/cadastro', 'CadastroController@cadastro');
$router->post('/cadastro', 'CadastroController@cadastroAction');

//$router->get('/sair');

