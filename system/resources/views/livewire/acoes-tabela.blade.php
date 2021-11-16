<div class="d-flex justify-content-center">
    <div class="mr-2">
        <i wire:click="editarRecurso" class="fas fa-edit text-primary table-action-icon"></i>
    </div>
    <div>
        <i wire:click="modalDeletarRecurso({{ $model->id }})" class="fas fa-trash-alt text-danger table-action-icon"></i>
    </div>

    <!-- modal de deletar -->
    <div class="modal fade" id="modalDeletarRecurso" tabindex="-1" aria-labelledby="modalDeletarRecurso" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarRecurso">{{ $tituloModalDeletar }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $textoModalDeletar }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="deletarRecurso" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
</div>