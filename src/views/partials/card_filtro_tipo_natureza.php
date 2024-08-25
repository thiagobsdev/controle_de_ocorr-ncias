<div id="filterCard">
    <!-- Card de Filtros -->
    <div class="card mb-4" id="toggleElement">
        <div class="card-header">
            <h5 class="mb-0">Filtros de Pesquisa</h5>
        </div>
        <div class="card-body">
            <form id="filter-form" method="POST" action="<?= $base; ?>/pesquisa_tipo_natureza">
                <div class="row mb-3 d-flex justify-content-center align-content-center">
                    <div class="col-md-6">
                        <label for="validationServer04" class="form-label">Tipo de natureza</label>
                        <select class="form-select" aria-label="Default select example" name="tipo_natureza">
                            <option selected></option>
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
                            <option selected></option>
                            <option value="CFTV">CFTV</option>
                            <option value="Controle de acesso">Controle de acesso</option>
                            <option value="Sistema de detecção de intrusão">Sistema de detecção de intrusão</option>
                            <option value="Servidores">Servidores</option>
                            <option value="Scanner">Scanner</option>
                            <option value="Violação">Violação</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-center align-content-center">
                    <div class="col-md-6">
                        <label for="data" class="form-label">Data inicio</label>
                        <input type="date" class="form-control" id="data" name="dataInicio">
                    </div>
                    <div class="col-md-6">
                        <label for="data" class="form-label">Data fim</label>
                        <input type="date" class="form-control" id="data" name="dataFim">
                    </div>
                </div>
        </div>
        <div class="row mb-3 d-flex justify-content-center align-content-center">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary w-100 h-75" style="margin-top: 15px">Pesquisar</button>
            </div>
        </div>
        </form>
    </div>
</div>


</div>