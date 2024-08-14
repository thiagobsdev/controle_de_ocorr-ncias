<div class="card mb-4 mb-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <strong>ID:</strong> 001 | <strong>Data:</strong> 12/08/2024 | <strong>Hora:</strong> 14:30
        </div>
        <div>
            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Editar</button>
            <button class="btn btn-sm btn-secondary print-btn" data-id="001" data-data="12/08/2024" data-hora="14:30" data-bs-toggle="modal" data-bs-target="#printModal">Imprimir PDF</button>
        </div>
    </div>
    <div class="card-body ocorrencia-content" id="ocorrencia-001">
        <h5 class="card-title">Título da Ocorrência 1</h5>
        <p class="card-text">
            <strong>Área:</strong> Área 1<br>
            <strong>Local:</strong> Local A<br>
            <strong>Tipo:</strong> Roubo<br>
            <strong>Natureza:</strong> Criminoso
        </p>
        <!-- Descrição da Ocorrência -->
        <h6>Descrição:</h6>
        <p class="card-text">Descrição detalhada da ocorrência, explicando o que aconteceu e como foi o incidente.</p>

        <!-- Ações Tomadas -->
        <h6>Ações Tomadas:</h6>
        <p class="card-text">Descrição das ações tomadas após o incidente, como medidas de segurança implementadas ou ações de resposta.</p>

        <!-- Informações do Ativo -->
        <h6>Informações do Ativo:</h6>
        <p class="card-text">
            <strong>Tipo de Ativo:</strong> Veículo<br>
            <strong>Identificação do Ativo:</strong> ABC-1234
        </p>

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
        <!-- Fotos -->
        <h6>Fotos:</h6>
        <div id="carouselExample1" class="carousel slide bg-black bg-opacity-75" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=$base;?>/assets/fotos/DP-WORLD-SANTOS-TERMINAL-BRASIL.jpg" class="d-block img-fluid imgCarrossel" alt="Foto 1">
                </div>
                <div class="carousel-item">
                    <img src="<?=$base;?>/assets/fotos/DP-WORLD-SANTOS-TERMINAL-BRASIL.jpg" class="d-block imgCarrossel" alt="Foto 1">
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