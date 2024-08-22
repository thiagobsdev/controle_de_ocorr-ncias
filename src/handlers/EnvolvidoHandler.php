<?php

namespace src\handlers;

use PDO;

use \src\models\Envolvido;


class EnvolvidoHandler
{

    public static function addEnvolvidos($id_ocorrencia, $envolvidos)
    {

        foreach ($envolvidos as $envolvido) {
            Envolvido::insert([
                'id_ocorrencia' => $id_ocorrencia,
                'nome' => $envolvido['nome'],
                'tipo_de_documento' => $envolvido['tipo_documento'],
                'numero_documento' => $envolvido['numero_documento'],
                'envolvimento' => $envolvido['envolvimento'],
                'vinculo' => $envolvido['vinculo'],
                'tipo_veiculo' => $envolvido['tipo_veiculo'],
                'placa' => $envolvido['placa'],
            ])->execute();
        }
    }

    public static function atualizarEnvolvidosEdit($id_ocorrencia, $envolvidos)
    {
        $envolvidoExiste = "";

        if (!empty($envolvidos)) {
            foreach ($envolvidos as $envolvido) {

                if (isset($envolvido['id'])) {
                    $envolvidoExiste = Envolvido::select()
                        ->where('id', $envolvido['id'])->one();
                    if ($envolvidoExiste) {
                        Envolvido::update()
                            ->set('nome', $envolvido['nome'])
                            ->set('tipo_de_documento', $envolvido['tipo_documento'])
                            ->set('numero_documento', $envolvido['numero_documento'])
                            ->set('envolvimento', $envolvido['envolvimento'])
                            ->set('vinculo', $envolvido['vinculo'])
                            ->set('tipo_veiculo', $envolvido['vinculo'])
                            ->set('placa', $envolvido['placa'])
                            ->where('id_ocorrencia', $id_ocorrencia)
                            ->execute();
                    }
                } else {
                    Envolvido::insert(
                        [
                            'id_ocorrencia' => $id_ocorrencia,
                            'nome' => $envolvido['nome'],
                            'tipo_de_documento' => $envolvido['tipo_documento'],
                            'numero_documento' => $envolvido['numero_documento'],
                            'envolvimento' => $envolvido['envolvimento'],
                            'vinculo' => $envolvido['vinculo'],
                            'tipo_veiculo' => $envolvido['tipo_veiculo'],
                            'placa' => $envolvido['placa'],
                        ]
                    )->execute();
                }
            }
        }
    }
}
