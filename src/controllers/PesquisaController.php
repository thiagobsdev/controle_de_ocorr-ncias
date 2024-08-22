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

    public function pesquisarPorId()
    {
        $id = intval(filter_input(INPUT_GET, 'idPesquisa'));
        $dataInicio = filter_input(INPUT_GET, 'dataInicio');
        $horaInicio = filter_input(INPUT_GET, 'horaInicio');
        $dataFim = filter_input(INPUT_GET, 'dataFim');
        $horaFim = filter_input(INPUT_GET, 'horaFim');

        ($dataInicio === "") ? $dataInicio ='1990-01-01' : $dataInicio ;
        ($dataFim === '') ?  $dataFim = '2100-12-31' : $dataFim ;

        ($horaInicio === "") ? $horaInicio ='00:00:00' : $horaInicio ;
        ($horaFim === "") ? $horaFim ='23:59:59' : $horaFim ;

        $dateTimeInicio = new DateTime($horaInicio);
        $horaInicioFormatada = $dateTimeInicio->format('H:i:s');

        $dateTimeFim = new DateTime($horaFim);
        $horaFinalFormatada = $dateTimeFim->format('H:i:s');


       if ($id > 0 ) {

            $ocorrencia = OcorrenciaHandler::getOcorrenciaById($id, $dataInicio, $horaInicioFormatada,  $dataFim, $horaFinalFormatada );

            if (!empty($ocorrencia)) {
                $this->render('pesquisa', [
                    'usuariologado' => $this->usuarioLogado,
                    'ocorrencia' => $ocorrencia
                ]);
            }
        } else {
            $this->redirect('/');
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
