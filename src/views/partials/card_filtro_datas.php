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
            <form id="filter-form" method="GET" action="<?= $base; ?>/pesquisaId">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="data" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="idPesquisa">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="data" class="form-label">Data inicio</label>
                        <input type="date" class="form-control" id="data" name="dataInicio">
                    </div>
                    <div class="col-md-6">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" class="form-control" id="hora" name="horaInicio">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="data" class="form-label">Data fim</label>
                        <input type="date" class="form-control" id="data" name="dataFim">
                    </div>
                    <div class="col-md-6">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" class="form-control" id="hora" name="horaFim">
                    </div>
                </div>
                <div class="row mb-3">
                  
                    <div class="col-md-4 d-flex align-items-center">
                        <button type="submit" class="btn btn-primary w-100">Pesquisar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>


</div>