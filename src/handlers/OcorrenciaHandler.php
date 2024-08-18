<?php

namespace src\handlers;

use \src\models\Ocorrencia;
use src\models\Usuario;

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
            ->orderBy('hora_ocorrencia', 'desc', 'data_ocorrencia', 'desc')
            ->page($page, $porPagina)
            ->get();

        $totalDeOcorrencias = Ocorrencia::select()->count();
        $contagemPaginas = ceil($totalDeOcorrencias / $porPagina);
        $paginaInicial = (ceil($page / $porPagina) * - 1) * $porPagina + 1;
        $paginaFinal = min($page + $porPagina - 1, $contagemPaginas);

        $ocorrencias = [];
        foreach ($ocorrenciasLista as $ocorrenciaItem) {
            $novaOcorrencia = new Ocorrencia();
            $novaOcorrencia->id = $ocorrenciaItem['id'];
            $novaOcorrencia->equipe = $ocorrenciaItem['equipe'];
            $novaOcorrencia->forma_conhecimento = $ocorrenciaItem['forma_conhecimento'];
            $novaOcorrencia->data_ocorrencia = $ocorrenciaItem['data_ocorrencia'];
            $novaOcorrencia->hora_ocorrencia = $ocorrenciaItem['hora_ocorrencia'];
            $novaOcorrencia->titulo = $ocorrenciaItem['titulo'];
            $novaOcorrencia->area = $ocorrenciaItem['area'];
            $novaOcorrencia->local = $ocorrenciaItem['local'];
            $novaOcorrencia->tipo_natureza = $ocorrenciaItem['tipo_natureza'];
            $novaOcorrencia->natureza = $ocorrenciaItem['natureza'];
            $novaOcorrencia->descricao = $ocorrenciaItem['descricao'];
            $novaOcorrencia->acoes = $ocorrenciaItem['acoes'];

            $novoUsuario = Usuario::select()->where('id', $ocorrenciaItem['id_usuario'])->one();
            $novaOcorrencia->usuario = new Usuario();
            $novaOcorrencia->usuario->id = $novoUsuario['id'];
            $novaOcorrencia->usuario->nome = $novoUsuario['nome'];



            $ocorrencias[] = $novaOcorrencia;
        }
        return [
            'ocorrencias' => $ocorrencias,
            'porPagina' => $contagemPaginas,
            'paginaAtual' => $page,
            'paginaInicial'=>$paginaInicial,
            'paginaFinal'=>$paginaFinal,
            'totalDePaginas'=> $contagemPaginas
            
        ];
    }
}
