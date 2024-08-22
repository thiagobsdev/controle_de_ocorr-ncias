<?php

namespace src\handlers;


use \src\models\Ativo;


class AtivosHandler
{

    public static function addAtivos($id_ocorrencia, $ativos)
    {

        foreach ($ativos as $ativo) {
            Ativo::insert([
                'id_ocorrencia' => $id_ocorrencia,
                'tipo_ativo' => $ativo['tipoAtivo'],
                'id_ativo' => $ativo['idAtivo'],

            ])->execute();
        }
    }

    public static function atualizarEnvolvidosEdit($id_ocorrencia, $ativosLista)
    {
        $ativoExiste = "";

        if (!empty($ativosLista)) {
            foreach ($ativosLista as $ativo) {

                if (isset($ativo['id'])) {
                    $ativoExiste = Ativo::select()
                        ->where('id', $ativo['id'])->one();
                    if ($ativoExiste) {
                        Ativo::update()
                            ->set('id_ocorrencia', $id_ocorrencia)
                            ->set('tipo_ativo', $ativo['tipoAtivo'])
                            ->set('id_ativo', $ativo['idAtivo'])
                            ->where('id_ocorrencia', $id_ocorrencia)
                            ->execute();
                    }
                } else {
                    Ativo::insert(
                        [
                            'id_ocorrencia' => $id_ocorrencia,
                            'tipo_ativo' => $ativo['tipoAtivo'],
                            'id_ativo' => $ativo['idAtivo'],
                        ]
                    )->execute();
                }
            }
        }
    }
}
