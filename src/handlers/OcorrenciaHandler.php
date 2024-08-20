<?php

namespace src\handlers;

use \src\models\Ocorrencia;
use src\models\Usuario;
use \src\models\Envolvido;
use \src\models\Ativo;
use \src\models\Foto;

class OcorrenciaHandler
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
        $id_usuario,

    ) {


        $insertQuery = Ocorrencia::insert([
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

        return $insertQuery;
    }

    public static function getAllOcorrencias($page)
    {
        $porPagina = 30;
        $ocorrenciasLista = Ocorrencia::select()
            ->orderBy('data_ocorrencia', 'desc', 'hora_ocorrencia', 'desc')
            ->page($page, $porPagina)
            ->get();

        $totalDeOcorrencias = Ocorrencia::select()->count();
        $contagemPaginas = ceil($totalDeOcorrencias / $porPagina);
        $paginaInicial = (ceil($page / $porPagina) * -1) * $porPagina + 1;
        $paginaFinal = min($page + $porPagina - 1, $contagemPaginas);

        $ocorrencias = [];
        foreach ($ocorrenciasLista as $ocorrenciaItem) {
            $novaOcorrencia = OcorrenciaHandler::arrayOcorrenciaParaObjetoOcorrencia($ocorrenciaItem);

            $novoUsuario = Usuario::select()->where('id', $ocorrenciaItem['id_usuario'])->one();
            $novaOcorrencia->usuario = OcorrenciaHandler::arrayUsuarioParaObjetoUsuario($novoUsuario);

            $envolvidosLista = Envolvido::select()->where('id_ocorrencia', $ocorrenciaItem['id'])->get();
            if (count($envolvidosLista) > 0) {
                $novaOcorrencia->envolvidosLista = [];
                foreach ($envolvidosLista as $envolvido) {
                    $novaOcorrencia->envolvidosLista[] = OcorrenciaHandler::arrayEnvolvidoparaObjetoEnvolvido($envolvido);
                }
            }

            $ativosLista = Ativo::select()->where('id_ocorrencia', $ocorrenciaItem['id'])->get();
            if (count($ativosLista) > 0) {
                $novaOcorrencia->ativosLista = [];
                foreach ($ativosLista as $ativo) {
                    $novaOcorrencia->ativosLista[] = OcorrenciaHandler::arrayAtivoParaObjetoAtivo($ativo);
                }
            }

            $fotosLista = Foto::select()->where('id_ocorrencia', $ocorrenciaItem['id'])->get();
            if (count($fotosLista) > 0) {
                $novaOcorrencia->fotosOcorrencias = [];
                foreach ($fotosLista as $foto) {
                    $novaOcorrencia->fotosOcorrencias[] = OcorrenciaHandler::arrayFotosparaObjetoFotos($foto);
                }
            }

            $ocorrencias[] = $novaOcorrencia;
        }
        return [
            'ocorrencias' => $ocorrencias,
            'porPagina' => $contagemPaginas,
            'paginaAtual' => $page,
            'paginaInicial' => $paginaInicial,
            'paginaFinal' => $paginaFinal,
            'totalDePaginas' => $contagemPaginas

        ];
    }

    public static function getOcorrenciaById($id_ocorrencia)
    {

        $ocorrencia = Ocorrencia::select()->where('id', $id_ocorrencia)->one();

        $imprimirOcorrencia = OcorrenciaHandler::arrayOcorrenciaParaObjetoOcorrencia($ocorrencia);

        $novoUsuario = Usuario::select()->where('id', $ocorrencia['id_usuario'])->one();
        $imprimirOcorrencia->usuario = OcorrenciaHandler::arrayUsuarioParaObjetoUsuario($novoUsuario);

        $envolvidosLista = Envolvido::select()->where('id_ocorrencia', $ocorrencia['id'])->get();
        if (count($envolvidosLista) > 0) {
            $imprimirOcorrencia->envolvidosLista = [];
            foreach ($envolvidosLista as $envolvido) {
                $imprimirOcorrencia->envolvidosLista[] = OcorrenciaHandler::arrayEnvolvidoparaObjetoEnvolvido($envolvido);
            }
        }

        $ativosLista = Ativo::select()->where('id_ocorrencia', $ocorrencia['id'])->get();
        if (count($ativosLista) > 0) {
            $imprimirOcorrencia->ativosLista = [];
            foreach ($ativosLista as $ativo) {
                $imprimirOcorrencia->ativosLista[]  = OcorrenciaHandler::arrayAtivoParaObjetoAtivo($ativo);
            }
        }

        $fotosLista = Foto::select()->where('id_ocorrencia', $ocorrencia['id'])->get();
        if (count($fotosLista) > 0) {
            $imprimirOcorrencia->fotosOcorrencias = [];
            foreach ($fotosLista as $foto) {
                $imprimirOcorrencia->fotosOcorrencias[] = OcorrenciaHandler::arrayFotosparaObjetoFotos($foto);
            }
        }

        return $imprimirOcorrencia;
    }


    public static function arrayFotosparaObjetoFotos($arrayFotos)
    {
        $novaFoto = new Foto();
        $novaFoto->id = $arrayFotos['id'];
        $novaFoto->nome = $arrayFotos['nome'];
        $novaFoto->url = $arrayFotos['url'];

        return $novaFoto;
    }



    public static function arrayOcorrenciaParaObjetoOcorrencia($arrayOcorrencia)
    {
        $objetoOcorrencia = new Ocorrencia();
        $objetoOcorrencia->id = $arrayOcorrencia['id'];
        $objetoOcorrencia->equipe = $arrayOcorrencia['equipe'];
        $objetoOcorrencia->forma_conhecimento = $arrayOcorrencia['forma_conhecimento'];
        $objetoOcorrencia->data_ocorrencia = $arrayOcorrencia['data_ocorrencia'];
        $objetoOcorrencia->hora_ocorrencia = $arrayOcorrencia['hora_ocorrencia'];
        $objetoOcorrencia->titulo = $arrayOcorrencia['titulo'];
        $objetoOcorrencia->area = $arrayOcorrencia['area'];
        $objetoOcorrencia->local = $arrayOcorrencia['local'];
        $objetoOcorrencia->tipo_natureza = $arrayOcorrencia['tipo_natureza'];
        $objetoOcorrencia->natureza = $arrayOcorrencia['natureza'];
        $objetoOcorrencia->descricao = $arrayOcorrencia['descricao'];
        $objetoOcorrencia->acoes = $arrayOcorrencia['acoes'];

        return $objetoOcorrencia;
    }

    public static function arrayUsuarioParaObjetoUsuario($arrayUsuario)
    {
        $novoUsuario = new Usuario();
        $novoUsuario->id = $arrayUsuario['id'];
        $novoUsuario->nome = $arrayUsuario['nome'];
        $novoUsuario->nivel = $arrayUsuario['nivel'];

        return  $novoUsuario;
    }

    public static function arrayEnvolvidoparaObjetoEnvolvido($arrayEnvolvido)
    {

        $novoEnvolvido = new Envolvido();
        $novoEnvolvido->nome = $arrayEnvolvido['nome'];
        $novoEnvolvido->tipo_de_documento = $arrayEnvolvido['tipo_de_documento'];
        $novoEnvolvido->numero_documento = $arrayEnvolvido['numero_documento'];
        $novoEnvolvido->envolvimento = $arrayEnvolvido['envolvimento'];
        $novoEnvolvido->vinculo = $arrayEnvolvido['vinculo'];
        $novoEnvolvido->tipo_veiculo = $arrayEnvolvido['tipo_veiculo'];
        $novoEnvolvido->placa = $arrayEnvolvido['placa'];

        return $novoEnvolvido;
    }

    public static function arrayAtivoParaObjetoAtivo($arrayAtivo)
    {
        $novoAtivo = new Ativo();
        $novoAtivo->id = $arrayAtivo['id'];
        $novoAtivo->tipo_ativo = $arrayAtivo['tipo_ativo'];
        $novoAtivo->id_ativo = $arrayAtivo['id_ativo'];
        return  $novoAtivo;
    }
}
