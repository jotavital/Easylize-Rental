<div class="row col-12 d-flex justify-content-center">
    <div class="col-md-8 card card-primary card-outline">
        <div class="card-body">
            <h5 class="mb-3 col-12 card-title">Fotos do modelo (<?php echo e($qtd_fotos); ?>)</h5>

            <?php if($modelo->fotos_modelo->isEmpty()): ?>
            <div class="row d-flex justify-content-center">
                <p><span class="text-danger">Sem fotos.</span></p>
            </div>
            <?php else: ?>

            <div class="row col-12 d-flex justify-content-around">
                <?php $__currentLoopData = $fotos_modelo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto_modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-5 col-sm-8 card d-flex align-content-between mb-3">
                    <div class="img-actions col-12">
                        <div class="img-actions-image d-flex align-items-center">
                            <img src=" <?php echo e(route('images.show', $foto_modelo->path)); ?> " alt="imagem_<?php echo e($modelo->nome); ?>">
                        </div>
                        <hr>
                        <div class="col-12 img-actions-overlay d-flex justify-content-center">
                            <a wire:click="deletarFoto(<?php echo e($foto_modelo->id); ?>, <?php echo e($loop->index); ?>)">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                            <a href="<?php echo e(route('images.show', $foto_modelo->path)); ?>" target="_blank">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a wire:click="baixarFoto('<?php echo e($foto_modelo->path); ?>')">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/card-fotos-modelo-veiculo.blade.php ENDPATH**/ ?>