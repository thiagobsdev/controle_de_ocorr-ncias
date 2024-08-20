<div class="card mb-4 mb-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <strong>ID:</strong><?= " " . $dados->id . " "; ?>| <strong>Data:</strong> <?= " " . DateTime::createFromFormat('Y-m-d', $dados->data_ocorrencia)->format('d/m/Y') . " "; ?> | <strong>Hora:</strong> <?= " " . $dados->hora_ocorrencia . " "; ?>
            <strong>Registrado por:</strong> <?= " " . $dados->usuario->nome . " "; ?>
        </div>
        <div>
            <?php if ($usuarioLogado['nivel'] === "Administrador") :  ?>
                
                <a href="<?= $base; ?>/excluir/<?= $dados->id; ?>" class="btn btn-danger">Excluir</a>
                <a href="<?= $base; ?>/editar/<?= $dados->id; ?>" class="btn btn-sm btn-warning">editar</a>
            <?php endif; ?>
            <a href="<?= $base;?>/imprimir/<?= $dados->id;?>" class="btn btn-sm btn-secondary print-btn">Imprimir PDF</a>
        </div>
    </div>
    <div class="card-body ocorrencia-content" id="ocorrencia-001">
        <h5 class="card-title" style="text-align:center"><?= " " . $dados->titulo . " "; ?></h5>
        <p class="card-text">
            <strong>Área:</strong> <?= " " . $dados->area . " "; ?><br>
            <strong>Local:</strong> <?= " " . $dados->local . " "; ?><br>
            <strong>Tipo:</strong> <?= " " . $dados->tipo_natureza . " "; ?><br>
            <strong>Natureza:</strong> <?= " " . $dados->natureza . " "; ?>
        </p>

        <!-- Informações do Ativo -->

        <h6>Ativos:</h6>

        <?php if (!empty($dados->ativosLista)) : ?>
            <table class="table table-dark table-striped ">
                <thead>
                    <tr>
                        <th>Tipo de ativo</th>
                        <th>Identificação do ativo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dados->ativosLista as $ativo): ?>
                        <tr>
                            <td><?= $ativo->tipo_ativo; ?></td>
                            <td><?= $ativo->id_ativo; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>A lista de ativos está vazia.</p>
        <?php endif; ?>

        <!-- Se houver envolvidos -->
        <h6>Envolvidos:</h6>

        <?php if (!empty($dados->envolvidosLista)) : ?>
            <table class="table table-primary table-striped ">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Tipo de Documento</th>
                        <th>Número do Documento</th>
                        <th>Vínculo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados->envolvidosLista as $envolvido): ?>
                        <tr>
                            <td><?= $envolvido->nome; ?></td>
                            <td><?= $envolvido->tipo_de_documento; ?></td>
                            <td><?= $envolvido->numero_documento; ?></td>
                            <td><?= $envolvido->vinculo; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>A lista de envolvidos está vazia.</p>
        <?php endif; ?>

        <!-- Descrição da Ocorrência -->
        <h6>Descrição da ocorrência:</h6>
        <p class="card-text"><?= nl2br($dados->descricao) . " "; ?>.</p>

        <!-- Ações Tomadas -->
        <h6 class="">Ações Tomadas:</h6>
        <p class="card-text"><?= nl2br($dados->acoes) . " "; ?>.</p>

        <!-- Fotos -->
        <h6>Fotos:</h6>
        <div id="<?= $dados->id; ?>" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($dados->fotosOcorrencias as $foto): ?>
                    <div class="carousel-item active d-flex justify-content-center" style="background-color: rgb(202,198,202);">
                        <img src="<?= $foto->url; ?>" class="d-block " alt="<?= $foto->nome; ?>" style="max-height: 500px; object-fit: cover;">
                    </div>
                <?php endforeach;; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#<?= $dados->id; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#<?= $dados->id; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>