<?php

namespace src\controllers;

use \core\Controller;
use DateTime;
use \src\models\Usuario;
use \src\handlers\LoginHandler;
use \src\handlers\OcorrenciaHandler;

class PesquisaController extends Controller
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

    public function pesquisarDatas()
    {

        $dataInicio = filter_input(INPUT_GET, 'dataInicio');
        $dataFim = filter_input(INPUT_GET, 'dataFim');

        ($dataInicio === "") ? $dataInicio = '1990-01-01' : $dataInicio;
        ($dataFim === '') ?  $dataFim = '2100-12-31' : $dataFim;


        $ocorrencias = OcorrenciaHandler::getOcorrenciaByIdEDatas($dataInicio,  $dataFim);

        if (!empty($ocorrencias)) {

            $this->render('pesquisa_datas', [
                'usuariologado' => $this->usuarioLogado,
                'ocorrencias' => $ocorrencias
            ]);
        } else {
            $this->redirect('/');
        }
    }

    public function pesquisarPorId()
    {
        $this->render('pesquisa_id card', [
            'usuariologado' => $this->usuarioLogado,
        ]);
    }

    public function pesquisarPorIdAction()
    {
        $idOcorrencia = abs(intval(filter_input(INPUT_POST, 'id_ocorrencia')));

        ($idOcorrencia > 0) ? $idOcorrencia : '*';

        $ocorrencia = OcorrenciaHandler::getOcorrenciaByIdFiltro($idOcorrencia);

        $this->render('pesquisa_id', [
            'usuariologado' => $this->usuarioLogado,
            'ocorrencia' => $ocorrencia
        ]);
    }

    public function pesquisarPorEnvolvido()
    {
        $this->render('pesquisa_envolvido card', [
            'usuariologado' => $this->usuarioLogado,
        ]);
    }

    public function pesquisarPorEnvolvidoAction()
    {
        $nomeEnvolvido = filter_input(INPUT_POST, 'nomeEnvolvido');
        $tipoDocumentoEnvolvido = filter_input(INPUT_POST, 'tipoDocumentoEnvolvido');
        $numeroDocumentoEnvolvido = filter_input(INPUT_POST, 'numeroDocumentoEnvolvido');
        $envolvimentoEnvolvido = filter_input(INPUT_POST, 'envolvimentoEnvolvido');
        $vinculoEnvolvido = filter_input(INPUT_POST, 'vinculoEnvolvido');
        $tipoVeiculoEnvolvido = filter_input(INPUT_POST, 'tipoVeiculoEnvolvido');
        $placaEnvolvido = filter_input(INPUT_POST, 'placaEnvolvido');

        ($nomeEnvolvido !== "") ? $nomeEnvolvido : $nomeEnvolvido ='*';
        ($tipoDocumentoEnvolvido !== "") ? $tipoDocumentoEnvolvido : $tipoDocumentoEnvolvido =  '*';
        ($numeroDocumentoEnvolvido !== "") ?  $numeroDocumentoEnvolvido : $numeroDocumentoEnvolvido = '*';
        ($envolvimentoEnvolvido !== "") ? $envolvimentoEnvolvido :  $envolvimentoEnvolvido = '*';
        ($vinculoEnvolvido !== "" ) ? $vinculoEnvolvido : $vinculoEnvolvido = '*';
        ($tipoVeiculoEnvolvido !== "") ? $tipoVeiculoEnvolvido : $tipoVeiculoEnvolvido = '*';
        ($placaEnvolvido !== "") ? $placaEnvolvido : $placaEnvolvido = '*';

        $ocorrencias = OcorrenciaHandler::getBYDocumentoEnvolvimentoOuNome(
            $nomeEnvolvido,
            $numeroDocumentoEnvolvido,
            $envolvimentoEnvolvido,
        );

       $this->render('pesquisa_envolvido', [
            'usuariologado' => $this->usuarioLogado,
            'ocorrencias' => $ocorrencias
       ]);
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
