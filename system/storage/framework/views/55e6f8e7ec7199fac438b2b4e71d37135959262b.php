<div class="d-flex justify-content-center">
    <div class="mr-2">
        <i wire:click="editarRecurso" class="fas fa-edit text-primary table-action-icon"></i>
    </div>
    <div>
        <i wire:click="modalDeletarRecurso" class="fas fa-trash-alt text-danger table-action-icon"></i>
    </div>

    <!-- modal de deletar -->
    <div class="modal fade" id="modalDeletarRecurso-<?php echo e($model->id); ?>" tabindex="-1" aria-labelledby="modalDeletarRecurso" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarRecurso"><?php echo e($tituloModalDeletar); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo e($textoModalDeletar); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form action="<?php echo e($rotaExcluir); ?>" method="POST" class="no-padding-form">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/acoes-tabela.blade.php ENDPATH**/ ?>