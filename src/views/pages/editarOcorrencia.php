<?= $render('header', ['usuariologado' => $usuariologado]) ?>

<main style="background-color: rgba(211, 204, 204, 1)">
    <div class="container" style="background-color:  white">
        <h1 class="" style="text-align:center;margin-bottom: 40px;padding-top:10px">Edição da Ocorrência Numero: <?= $ocorrencia->id; ?></h1>
        <input type="hidden" name="idOcorrencia" value="<?= $ocorrencia->id; ?>">
        <form class="row g-3" class="formOcorrencia" enctype="multipart/form-data" method="POST" id="formEdit" action="<?= $base; ?>/editar/<?= $ocorrencia->id; ?>">
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">Equipe Operacional</label>
                <select class="form-select" aria-label="Default select example" name="equipe" id="equipe">
                    <option selected><?= $ocorrencia->equipe; ?></option>
                    <option value="Apoio ao Motorista">Dragão
                    <option value="Armazém da Receita Federal">Falcão</option>
                    <option value="Armazém Geral 1">Leão</option>
                    <option value="Armazém Geral 2">Tubarão</option>
                    <option value="Armazém Geral 3">Crossdocking</option>
                    <option value="Bolsão">DEPOT</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">Forma de conhecimento</label>
                <select class="form-select" aria-label="Default select example" name="forma_conhecimento" id="forma_conhecimento">
                    <option selected><?= $ocorrencia->forma_conhecimento; ?></option>
                    <option value="Denúncia">Denúncia</option>
                    <option value="Flagrante">Flagrante</option>
                    <option value="Prevenção">Prevenção</option>
                    <option value="Solicitação">Solicitação</option>
                </select>
            </div>

            <div class="d-flex row g-3">
                <div class="col-md-6">
                    <label for="validationServer02" class="form-label">Data da ocorrência</label>
                    <input type="date" class="form-control " id="validationServer02" value="<?= $ocorrencia->data_ocorrencia; ?>" required name="data_ocorrencia">
                </div>
                <div class="col-md-6">
                    <label for="validationServerUsername" class="form-label">Hora da ocorrência</label>
                    <div class="input-group has-validation">
                        <input type="time" class="form-control " id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required name="hora_ocorrencia"
                            value="<?= $ocorrencia->hora_ocorrencia; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationServer01" class="form-label">Título</label>
                <input type="text" class="form-control  text-break" id="validationServer01" value="<?= $ocorrencia->titulo; ?>" required name="titulo">
            </div>

            <div class="col-md-6">
                <label for="validationServer04" class="form-label">Informe a Área</label>
                <select class="form-select" aria-label="Default select example" name="area">
                    <option selected><?= $ocorrencia->area; ?></option>
                    <option value="Área 1">Área 1</option>
                    <option value="Área 2">Área 2</option>
                    <option value="Área 3">Área 3</option>
                    <option value="Área Externa">Área Externa</option>
                    <option value="Outras Localizações">Outras Localizações</option>
                    <option value="Pontes e Viadutos">Pontes e Viadutos</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">Informe o local da ocorrência</label>
                <select class="form-select" aria-label="Default select example" name="local">
                    <option selected><?= $ocorrencia->local; ?></option>
                    <option value="Apoio ao Motorista">Apoio ao Motorista
                    <option value="Armazém da Receita Federal">Armazém da Receita Federal</option>
                    <option value="Armazém Geral 1">Armazém Geral 1</option>
                    <option value="Armazém Geral 2">Armazém Geral 2</option>
                    <option value="Armazém Geral 3">Armazém Geral 3</option>
                    <option value="Bolsão">Bolsão</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">Tipo de natureza</label>
                <select class="form-select" aria-label="Default select example" name="tipo_natureza">
                    <option selected><?= $ocorrencia->tipo_natureza; ?></option>
                    <option value="Falhas de tecnologia">Falhas de tecnologia</option>
                    <option value="Container">Container</option>
                    <option value="Interrupção da Operação">Interrupção da Operação</option>
                    <option value="Clandestinos">Clandestinos</option>
                    <option value="Contrabando">Contrabando</option>
                    <option value="Roubo/Furto">Roubo/Furto</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">Natureza</label>
                <select class="form-select" aria-label="Default select example" name="natureza">
                    <option selected><?= $ocorrencia->natureza; ?></option>
                    <option value="CFTV">CFTV</option>
                    <option value="Controle de acesso">Controle de acesso</option>
                    <option value="Sistema de detecção de intrusão">Sistema de detecção de intrusão</option>
                    <option value="Servidores">Servidores</option>
                    <option value="Scanner">Scanner</option>
                    <option value="Violação">Violação</option>
                </select>
            </div>
            <div class="container mt-5">
                <h2>Envolvidos</h2>

                <!-- Pergunta se tem Envolvido -->
                <div class="mb-3">
                    <label for="temEnvolvido" class="form-label">Existem pessoas envolvidas na ocorrência?</label>
                    <select class="form-select" id="temEnvolvido" onchange="toggleEnvolvidosFields()">
                        <option value="não" <?= ($ocorrencia->envolvidosLista > 0) ?  '' : 'selected' ?>>Não</option>
                        <option value="sim" <?= ($ocorrencia->envolvidosLista > 0) ?  'selected' : '' ?>>Sim</option>
                    </select>
                </div>
                <div id="envolvidoContainer" style=" display:<?= (!empty($ocorrencia->envolvidosLista)) ?  'block' : 'none' ?>">
                    <!-- Formulário para adicionar envolvido -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome">
                            </div>
                            <div class="col-md-3">
                                <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
                                <select class="form-select" id="tipoDocumento">
                                    <option selected>Escolher...</option>
                                    <option value="RG">RG</option>
                                    <option value="CPF">CPF</option>
                                    <option value="CNH">CNH</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="numeroDocumento" class="form-label">Número do Documento</label>
                                <input type="text" class="form-control" id="numeroDocumento" placeholder="Número">
                            </div>
                            <div class="col-md-3">
                                <label for="envolvimento" class="form-label">Envolvimento</label>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    id="envolvimento">
                                    <option selected></option>
                                    <option value="Indefinido">Indefinido</option>
                                    <option value="Causador">Causador</option>
                                    <option value="Testemunha">Testemunha
                                    </option>
                                    <option value="Vitima">Vitima</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-2">

                                <label for="vinculo" class="form-label">Vínculo</label>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    id="vinculo">
                                    <option selected></option>
                                    <option value="Integrante">Integrante</option>
                                    <option value="Prestador de Serviço">Prestador de Serviço</option>
                                    <option value="Visitante">Visitante
                                    </option>
                                    <option value="Autoridade">Autoridade</option>
                                    <option value="Tripulante">Tripulante</option>
                                    <option value="Motorista">Motorista</option>
                                    <option value="Trabalhador Avulso (OGMO)">Trabalhador Avulso (OGMO)</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-2">
                                <label for="temVeiculo" class="form-label">Possui Veículo?</label>
                                <select class="form-select" id="temVeiculo" onchange="toggleVeiculoFields()">
                                    <option value="não" selected>Não</option>
                                    <option value="sim">Sim</option>
                                </select>
                            </div>
                            <div class="col-4 md-4 mt-2" id="veiculoFields" style="display: none;">
                                <label for="tipoVeiculo" class="form-label">Tipo de Veículo</label>
                                <select class="form-select" id="tipoVeiculo">
                                    <option selected>Escolher...</option>
                                    <option value="Carro">Carro</option>
                                    <option value="Moto">Moto</option>
                                    <option value="Caminhão">Caminhão</option>
                                </select>
                            </div>
                            <div class="col-4 md-4 mt-2" id="veiculoPlaca" style="display: none;">
                                <label for="placa" class="form-label">Placa</label>
                                <input type="text" class="form-control" id="placa" placeholder="Placa">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-success w-100"
                                    onclick="addEnvolvido()">Adicionar</button>
                            </div>
                        </div>
                    </div>

                    <!-- Tabela de envolvidos -->
                    <h3 class="mt-4">Lista de Envolvidos</h3>
                    <table class="table table-bordered" id="tabelaEnvolvidosEdit ">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Tipo de Documento</th>
                                <th>Número do Documento</th>
                                <th>Envolvimento</th>
                                <th>Vínculo</th>
                                <th>Tipo de Veículo</th>
                                <th>Placa</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="envolvidosListEdit">
                            <?php if ($ocorrencia->envolvidosLista > 0) : ?>
                                <?php foreach ($ocorrencia->envolvidosLista as $index => $envolvido) : ?>
                                    <tr>
                                        <input type="hidden" name="envolvidos[<?= $index; ?>][id]" value="<?= $envolvido->id; ?>">
                                        <td><input type="hidden" name="envolvidos[<?= $index; ?>][nome]" value="<?= $envolvido->nome; ?>"><?= $envolvido->nome; ?></td>
                                        <td><input type="hidden" name="envolvidos[<?= $index; ?>][tipo_documento]" value="<?= $envolvido->tipo_de_documento; ?>"><?= $envolvido->tipo_de_documento; ?></td>
                                        <td><input type="hidden" name="envolvidos[<?= $index; ?>][numero_documento]" value="<?= $envolvido->numero_documento; ?>"><?= $envolvido->numero_documento; ?></td>
                                        <td><input type="hidden" name="envolvidos[<?= $index; ?>][envolvimento]" value="<?= $envolvido->envolvimento; ?>"><?= $envolvido->envolvimento; ?></td>
                                        <td><input type="hidden" name="envolvidos[<?= $index; ?>][vinculo]" value="<?= $envolvido->vinculo; ?>"><?= $envolvido->vinculo; ?></td>
                                        <td><input type="hidden" name="envolvidos[<?= $index; ?>][tipo_veiculo]" value="<?= $envolvido->tipo_veiculo; ?>"><?= $envolvido->tipo_veiculo; ?></td>
                                        <td><input type="hidden" name="envolvidos[<?= $index; ?>][placa]" value="<?= $envolvido->placa; ?>"><?= $envolvido->placa; ?></td>
                                        <td><button type="button" class="btn btn-danger btn-sm" onclick="removerEnvolvido(this)">Remover</button></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!-- Campos ocultos para os dados da tabela -->
                    <div id="envolvidosHiddenInputsEdit"></div>
                </div>
            </div>
            <div class="container mt-5">
                <h2>Ativos</h2>

                <!-- Pergunta se tem ativo -->
                <div class="mb-3">
                    <label for="temAtivo" class="form-label">Existem ativos da DP World envolvidos na
                        ocorrência?</label>
                    <select class="form-select" id="temAtivo" onchange="toggleAtivoFields()">
                        <option value="não" <?= ($ocorrencia->ativosLista) > 0 ?  '' : 'selected' ?>>Não</option>
                        <option value="sim" <?= ($ocorrencia->ativosLista) > 0 ?  'selected' : '' ?>>Sim</option>
                    </select>
                </div>


                <!-- Formulário e tabela de ativos (escondidos por padrão) -->
                <div id="ativoContainer" style="display:<?= ( !empty($ocorrencia->ativosLista)) ?  'block' : 'none' ?>">
                    <!-- Formulário para adicionar ativo -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="tipoAtivo" class="form-label">Tipo de Ativo</label>
                                <select class="form-select" id="tipoAtivo" name="tipoAtivo">
                                    <option selected>Escolher...</option>
                                    <option value="QC">QC</option>
                                    <option value="RTG">RTG</option>
                                    <option value="ITV">ITV</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="idAtivo" class="form-label">ID do Ativo</label>
                                <input type="text" class="form-control" id="idAtivo" placeholder="ID do Ativo">
                            </div>
                            <div class="col-md-4 align-self-end">
                                <button type="button" class="btn btn-success w-100"
                                    onclick="addAtivo()">Adicionar</button>
                            </div>
                        </div>
                    </div>

                    <!-- Tabela de ativos -->
                    <h3 class="mt-4">Lista de Ativos</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tipo de Ativo</th>
                                <th>ID do Ativo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="ativosListEdit">
                            <?php if ($ocorrencia->ativosLista > 0) : ?>
                                <?php foreach ($ocorrencia->ativosLista as $index => $ativo) : ?>
                                    <tr>
                                        <input type="hidden" name="ativos[<?= $index; ?>][id]" value="<?= $ativo->id; ?>">
                                        <td><input type="hidden" name="ativos[<?= $index; ?>][tipoAtivo]" value="<?= $ativo->tipo_ativo; ?>"><?= $ativo->tipo_ativo; ?></td>
                                        <td><input type="hidden" name="ativos[<?= $index; ?>][idAtivo]" value="<?= $ativo->id_ativo; ?>"><?= $ativo->id_ativo; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger" onclick="removeAtivo(this)">Remover</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!-- Campos ocultos para os dados da tabela -->
                    <div id="AtivosHiddenInputs"></div>
                </div>
            </div>
            <div class="container mt-5">
                <h2>Editar Fotos</h2>

                <!-- Formulário para upload de fotos -->
                <div class="mb-3">
                    <label for="fotoInput" class="form-label">Selecione as fotos (JPG, JPEG ou PNG)</label>
                    <input type="file" class="form-control" id="fotoInput" multiple onchange="previewFotos()"
                        accept=".jpg, .jpeg, .png" placeholder="" name="fotos[]" value="">
                </div>

                <!-- Exibe o número de arquivos selecionados -->
                <div class="mb-3" id="fileCountContainer">
                    <p>Ficheiros selecionados: <span id="fileCount">0</span></p>
                </div>

                <!-- Carrossel de fotos (escondido por padrão) -->
                <div id="fotoCarrosselContainer" class="mt-4" style="display: <?= ($ocorrencia->fotosOcorrencias > 0) ? 'block' : 'none' ?>;">
                    <h3>Visualizar Fotos</h3>
                    <?php if (!empty($ocorrencia->fotosOcorrencias)) : ?>
                        <div id="<?= $ocorrencia->id; ?>" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($ocorrencia->fotosOcorrencias as $foto): ?>
                                    <div class="carousel-item active d-flex justify-content-center" style="background-color: rgb(202,198,202);flex-direction:column">
                                        <img src="<?= $base; ?>/<?= $foto->url; ?>" class="d-block " alt="<?= $foto->nome; ?>" style="max-height: 500px; object-fit: cover;">
                                        <div class="delete-btn-container" style="text-align:center; margin-top: 10px;">
                                            <button type="button" class="btn btn-danger" onclick="removeFoto(this)">Excluir</button>
                                        </div>
                                    </div>
                                <?php endforeach;; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#<?= $ocorrencia->id; ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#<?= $ocorrencia->id; ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    <?php else : ?>
                        <p>A lista de Fotos está vazia.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" style="min-height: 200px;" placeholder="Leave a comment here"
                    id="floatingTextarea" name="descricao"><?= $ocorrencia->descricao ?></textarea>
                <label for="floatingTextarea">Descrição da ocorrência</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" style="min-height: 200px;" placeholder="Leave a comment here"
                    id="floatingTextarea" name="acoes"><?= $ocorrencia->acoes ?></textarea>
                <label for="floatingTextarea">Ações imediatas</label>
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                <div class="col-4 d-flex justify-content-center">
                    <a class="btn btn-danger print-btn" href="<?= $base ?>">Cancelar</a>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <button class="btn btn-success w-75 fw-bold" class="botao-enviar" type="submit" onclick="submeterFormulario()">Gravar</button>
                </div>
            </div>
        </form>
    </div>
</main>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function submeterFormulario() {


        const formEdit = document.querySelector('formEdit');

        formEdit.forEach((value, key) => {
            const input = document.createElement("input");
            input.type = "hidden";
            input.name = key;
            input.value = value;
            formEdit.appendChild(input);
        })

        for (let i = 0; i < envolvidosListEdit.rows.length; i++) {
            const cells = envolvidosListEdit.rows[i].cells;

            console.log(envolvidosListEdit.rows.length)

            adicionarHiddenInput(formEdit, `envolvidos[${i}][nome]`, cells[0].textContent);
            adicionarHiddenInput(formEdit, `envolvidos[${i}][tipoDocumento]`, cells[1].textContent);
            adicionarHiddenInput(formEdit, `envolvidos[${i}][numeroDocumento]`, cells[2].textContent);
            adicionarHiddenInput(formEdit, `envolvidos[${i}][envolvimento]`, cells[3].textContent);
            adicionarHiddenInput(formEdit, `envolvidos[${i}][vinculo]`, cells[4].textContent);
            adicionarHiddenInput(formEdit, `envolvidos[${i}][tipoVeiculo]`, cells[5].textContent);
            adicionarHiddenInput(formEdit, `envolvidos[${i}][placa]`, cells[6].textContent);
        }

        for (let i = 0; i < ativosListEdit.rows.length; i++) {
            const cells = ativosListEdit.rows[i].cells;

            adicionarHiddenInput(formEdit, `ativos[${i}][tipoAtivo]`, cells[0].textContent);
            adicionarHiddenInput(formEdit, `ativos[${i}][idAtivo]`, cells[1].textContent);

        }

        formEdit.submit()
    }

    function adicionarHiddenInput(form, name, value) {
        const input = document.createElement("input");
        input.type = "hidden";
        input.name = name;
        input.value = value;
        form.appendChild(input);
    }
</script>


<script>
    function toggleVeiculoFields() {
        const temVeiculo = document.getElementById('temVeiculo').value;
        const veiculoFields = document.getElementById('veiculoFields');
        const veiuloPlaca = document.getElementById('veiculoPlaca');
        veiculoFields.style.display = temVeiculo === 'sim' ? 'block' : 'none';
        veiuloPlaca.style.display = temVeiculo === 'sim' ? 'block' : 'none';
    }

    let indexEnvolvido = envolvidosListEdit.rows.length;

    function addEnvolvido() {


        const nome = document.getElementById('nome').value;
        const tipoDocumento = document.getElementById('tipoDocumento').value;
        const numeroDocumento = document.getElementById('numeroDocumento').value;
        const vinculo = document.getElementById('vinculo').value;
        const envolvimento = document.getElementById('envolvimento').value
        const temVeiculo = document.getElementById('temVeiculo').value;
        const tipoVeiculo = temVeiculo === 'sim' ? document.getElementById('tipoVeiculo').value : '';
        const placa = temVeiculo === 'sim' ? document.getElementById('placa').value : '';

        if (!nome || !tipoDocumento || !envolvimento || !numeroDocumento || !vinculo || (temVeiculo === 'sim' && (!tipoVeiculo || !placa))) {
            alert("Por favor, preencha todos os campos obrigatórios antes de adicionar.");
            return;
        }

        const envolvidosListEdit = document.getElementById('envolvidosListEdit');
        const row = document.createElement('tr');

        row.innerHTML += `
               <td><input type="hidden" name="envolvidos[${indexEnvolvido}][nome]" value="${nome}">${nome}</td>
                <td><input type="hidden" name="envolvidos[${indexEnvolvido}][tipo_documento]" value="${tipoDocumento}">${tipoDocumento}</td>
                <td><input type="hidden" name="envolvidos[${indexEnvolvido}][numero_documento]" value="${numeroDocumento}">${numeroDocumento}</td>
                <td><input type="hidden" name="envolvidos[${indexEnvolvido}][envolvimento]" value="${envolvimento}">${envolvimento}</td>
                <td><input type="hidden" name="envolvidos[${indexEnvolvido}][vinculo]" value="${vinculo}">${vinculo}</td>
                <td><input type="hidden" name="envolvidos[${indexEnvolvido}][tipo_veiculo]" value="${tipoVeiculo}">${tipoVeiculo}</td>
                <td><input type="hidden" name="envolvidos[${indexEnvolvido}][placa]" value="${placa}">${placa}</td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="removerEnvolvido(this)">Remover</button></td>
            `;

        envolvidosListEdit.appendChild(row);

        // Limpa os campos após adicionar
        document.getElementById('nome').value = '';
        document.getElementById('tipoDocumento').value = '';
        document.getElementById('numeroDocumento').value = '';
        document.getElementById('vinculo').value = '';
        document.getElementById('temVeiculo').value = 'não';
        toggleVeiculoFields();
        document.getElementById('tipoVeiculo').value = '';
        document.getElementById('placa').value = '';

        // Adiciona a nova linha na tabela
        envolvidosListEdit.appendChild(row);

        // Incrementa o índice
        indexEnvolvido++;
    }

    function removeEnvolvido(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>

<script>
    let indexAtivo = ativosListEdit.rows.length;

    function addAtivo() {
        const tipoAtivo = document.getElementById('tipoAtivo').value;
        const idAtivo = document.getElementById('idAtivo').value;

        if (!tipoAtivo || !idAtivo) {
            alert("Por favor, preencha todos os campos antes de adicionar.");
            return;
        }

        const ativosListEdit = document.getElementById('ativosListEdit');
        const row = document.createElement('tr');

        row.innerHTML = `
                <td><input type="hidden" name="ativos[${indexAtivo}][tipoAtivo]" value="${tipoAtivo}">${tipoAtivo}</td>
                <td><input type="hidden" name="ativos[${indexAtivo}][idAtivo]" value="${idAtivo}">${idAtivo}</td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeAtivo(this)">Remover</button>
                </td>
            `;

        ativosListEdit.appendChild(row);

        // Limpa os campos após adicionar
        document.getElementById('tipoAtivo').value = '';
        document.getElementById('idAtivo').value = '';

        // Incrementa o índice
        indexAtivo++;
    }

    function toggleEnvolvidosFields() {
        const temEnvolvido = document.getElementById('temEnvolvido').value;
        const envolvidoContainer = document.getElementById('envolvidoContainer');
        envolvidoContainer.style.display = temEnvolvido === 'sim' ? 'block' : 'none';
    }

    function toggleAtivoFields() {
        const temAtivo = document.getElementById('temAtivo').value;
        const ativoContainer = document.getElementById('ativoContainer');
        ativoContainer.style.display = temAtivo === 'sim' ? 'block' : 'none';
    }



    function removeAtivo(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
<script>
    function previewFotos() {
        const fotos = document.getElementById('fotoInput').files;
        const carrosselFotos = document.getElementById('carrosselFotos');
        carrosselFotos.innerHTML = ''; // Limpa o carrossel existente

        if (fotos.length > 0) {
            document.getElementById('fotoCarrosselContainer').style.display = 'block';

            for (let i = 0; i < fotos.length; i++) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const imgElement = document.createElement('div');
                    imgElement.className = 'carousel-item' + (i === 0 ? ' active' : '');
                    imgElement.innerHTML = `
                    <img src="${event.target.result}" class="d-block w-100" alt="Foto ${i + 1}">
                    <div class="delete-btn-container"  style="text-align:center; margin-top: 10px;">
                        <button type="button" class="btn btn-danger" onclick="removeFoto(this)">Excluir</button>
                    </div>
                `;
                    carrosselFotos.appendChild(imgElement);
                }
                reader.readAsDataURL(fotos[i]);

            }
        } else {
            document.getElementById('fotoCarrosselContainer').style.display = 'none';
        }

        function alterarValor() {

            const span = document.getElementById('fotoInput');
            span.textContent = '';
        }
    }

    function removeFoto(button) {
        const item = button.closest('.carousel-item');
        const carousel = document.querySelector('#fotoCarrossel .carousel-inner');

        const isActive = item.classList.contains('active');
        item.remove();

        const items = carousel.querySelectorAll('.carousel-item');
        if (items.length > 0) {
            if (isActive) {
                // Se o item removido era o ativo, ativar o próximo ou o anterior
                if (item.nextElementSibling) {
                    item.nextElementSibling.classList.add('active');
                } else {
                    items[0].classList.add('active');
                }
            }
        } else {
            // Se não houver mais fotos, ocultar o carrossel
            document.getElementById('fotoCarrosselContainer').style.display = 'none';
        }

        // Atualiza o contador de arquivos após remoção
        document.getElementById('fileCount').textContent = items.length;
    }
</script>


</script>





</body>

</html>