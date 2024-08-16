<button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#filterCard" aria-expanded="false" aria-controls="filterCard" id="toggleButton">
                Filtros de Pesquisa
            </button>
            <div class="collapse" id="filterCard">
                <!-- Card de Filtros -->
                <div class="card mb-4" id="toggleElement">
                    <div class="card-header">
                        <h5 class="mb-0">Filtros de Pesquisa</h5>
                    </div>
                    <div class="card-body">
                        <form id="filter-form">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="data" class="form-label">Data</label>
                                    <input type="date" class="form-control" id="data">
                                </div>
                                <div class="col-md-6">
                                    <label for="hora" class="form-label">Hora</label>
                                    <input type="time" class="form-control" id="hora">
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="titulo" class="form-label">Título da Ocorrência</label>
                                    <input type="text" class="form-control" id="titulo" placeholder="Digite o título">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="nome" class="form-label">Nome do Envolvido</label>
                                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
                                </div>
                                <div class="col-md-4">
                                    <label for="documento" class="form-label">Documento do Envolvido</label>
                                    <input type="text" class="form-control" id="documento" placeholder="Digite o documento">
                                </div>

                            </div>


                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="tipo-ocorrencia" class="form-label">Tipo de Ocorrência</label>
                                    <select class="form-select" id="tipo-ocorrencia">
                                        <option selected>Escolha o tipo de ocorrência</option>
                                        <option value="Roubo">Roubo</option>
                                        <option value="Furto">Furto</option>
                                        <option value="Dano">Dano</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="natureza" class="form-label">Natureza</label>
                                    <select class="form-select" id="natureza">
                                        <option selected>Escolha a natureza</option>
                                        <option value="Criminoso">Criminoso</option>
                                        <option value="Acidental">Acidental</option>
                                        <option value="Operacional">Operacional</option>
                                    </select>
                                </div>
                                <div class="col-md-4 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary w-100">Pesquisar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>