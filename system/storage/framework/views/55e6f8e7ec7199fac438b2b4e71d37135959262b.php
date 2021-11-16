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
                    <p class="mb-3"><?php echo e($textoModalDeletar); ?></p>
                    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','title' => 'Atenção','message' => 'Se deletar este veículo, suas fotos também serão excluídas']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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