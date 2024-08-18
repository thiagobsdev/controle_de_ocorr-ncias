<div class="card mb-4 mb-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <strong>ID:</strong><?= " " . $dados->id . " "; ?>| <strong>Data:</strong> <?= " " . DateTime::createFromFormat('Y-m-d', $dados->data_ocorrencia)->format('d/m/Y') . " "; ?> | <strong>Hora:</strong> <?= " " . $dados->hora_ocorrencia . " "; ?>
            <strong>Registrado por:</strong> <?= " " . $dados->usuario->nome . " "; ?>
        </div>
        <div>
            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Adicionar nota</button>
            <button class="btn btn-sm btn-secondary print-btn" data-id="001" data-data="12/08/2024" data-hora="14:30" data-bs-toggle="modal" data-bs-target="#printModal">Imprimir PDF</button>
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
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Tipo de ativo</th>
                    <th>Identificação do ativo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Veículo</td>
                    <td>ABC-1234</td>

                </tr>
            </tbody>
        </table>

        <!-- Se houver envolvidos -->
        <h6>Envolvidos:</h6>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tipo de Documento</th>
                    <th>Número do Documento</th>
                    <th>Vínculo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João da Silva</td>
                    <td>RG</td>
                    <td>123456789</td>
                    <td>Funcionário</td>
                </tr>
                <tr>
                    <td>Maria Oliveira</td>
                    <td>CPF</td>
                    <td>987654321</td>
                    <td>Testemunha</td>
                </tr>
            </tbody>
        </table>

        <!-- Descrição da Ocorrência -->
        <h6>Descrição da ocorrência:</h6>
        <p class="card-text"><?=nl2br($dados->descricao) . " "; ?>.</p>

        <!-- Ações Tomadas -->
        <h6 class="">Ações Tomadas:</h6>
        <p class="card-text"><?= nl2br($dados->acoes) . " "; ?>.</p>

        <strong>Observações:</strong>
        <p class="card-text mt-3"> Thiago Barbosa dos Santos escreveu em 14/08/2024 às 00:00 <br> Observações da ocorrência.</p>
        <p class="card-text"></p>

        <p class="card-text mt-3"> Thiago Barbosa dos Santos escreveu em 14/08/2024 às 00:00 <br> Observações da ocorrência.</p>
        <p class="card-text"></p>


        <!-- Fotos -->
        <h6>Fotos:</h6>
        <div id="carouselExample1" class="carousel slide bg-black bg-opacity-75" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="max-height:500px; width: 100%;" src="<?= $base; ?>/assets/fotos/DP-WORLD-SANTOS-TERMINAL-BRASIL.jpg" class="d-block imgCarrossel" alt="Foto 1">
                </div>
                <div class="carousel-item">
                    <img style="max-height:500px; width: 100%;" src="<?= $base; ?>/assets/fotos/DP-WORLD-SANTOS-TERMINAL-BRASIL.jpg" class="d-block imgCarrossel" alt="Foto 1">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>