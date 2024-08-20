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
                    <div class="col-md-4 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary w-100">Pesquisar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>