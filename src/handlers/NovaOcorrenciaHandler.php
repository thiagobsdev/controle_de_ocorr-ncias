<?php

namespace src\handlers;

use \src\models\Ocorrencia;


class NovaOcorrenciaHandler
{


    public static function addOcorrencia(
        $equipe,
        $forma_conhecimento,
        $data_ocorrencia,
        $hora_ocorrencia,
        $titulo,
        $area,
        $local,
        $tipo_natureza,
        $natureza,
        $descricao,
        $acoes,
        $id_usuario
    ) {

        Ocorrencia::insert([
            'equipe' => $equipe,
            'forma_conhecimento' => $forma_conhecimento,
            'data_ocorrencia' => $data_ocorrencia,
            'hora_ocorrencia' => $hora_ocorrencia,
            'titulo' => $titulo,
            'area' => $area,
            'local' => $local,
            'tipo_natureza' => $tipo_natureza,
            'natureza' => $natureza,
            'descricao' => $descricao,
            'acoes' => $acoes,
            'id_usuario' => $id_usuario,
        ])->execute();
    }
}
