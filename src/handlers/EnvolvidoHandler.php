<?php

namespace src\handlers;

use PDO;

use \src\models\Envolvido;


class EnvolvidoHandler
{



    public static function addEnvolvidos( $id_ocorrencia, $envolvidos) {

        foreach ($envolvidos as $envolvido) {
            Envolvido::insert([
                'id_ocorrencia'=>$id_ocorrencia,
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


  
}
