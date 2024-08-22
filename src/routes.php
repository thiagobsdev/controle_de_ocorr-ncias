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
$router->post('/excluir/envolvido', 'OcorrenciaController@excluirEnvolvidoOcorrenciaAction');
$router->post('/excluir/ativo', 'OcorrenciaController@excluirAtivoOcorrenciaAction');
$router->post('/excluir/foto', 'OcorrenciaController@excluirFotoOcorrenciaAction');
$router->post('/excluir', 'OcorrenciaController@excluirOcorrenciaAction');
$router->get('/editar/{id}','OcorrenciaController@editarOcorrencia');
$router->post('/editar/{id}','OcorrenciaController@editarOcorrenciaAction');

$router->get('/pesquisaId','PesquisaController@pesquisarPorId');



$router->get('/imprimir/{id}','HomeController@imprimirOcorrencia');







//$router->get('/sair');

