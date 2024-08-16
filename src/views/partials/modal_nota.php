<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Adicionar Observação</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?=$base;?>/adicionarnota" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="observacao-texto" class="form-label">Observação</label>
                                <textarea class="form-control" id="observacao-texto" rows="3" name="observacao-texto"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="saveObservation">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>