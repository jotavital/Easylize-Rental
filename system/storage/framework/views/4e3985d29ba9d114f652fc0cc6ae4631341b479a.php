<div class="col-12 d-flex justify-content-center">
    <div class="col-8 card card-primary card-outline">
        <div class="card-body">
            <h5 class="mb-3 col-12 card-title">Fotos do modelo (<?php echo e($qtd_fotos); ?>)</h5>
            <div class="row d-flex justify-content-center">
                <?php if($modelo->fotos_modelo->isEmpty()): ?>
                <p><span class="text-danger">Sem fotos.</span></p>
                <?php else: ?>

                <?php $__currentLoopData = $fotos_modelo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto_modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="d-flex justify-content-center align-content-between flex-wrap img-actions col-md-6 mb-5">
                    <div class="row img-actions-image d-flex align-items-center">
                        <img src=" <?php echo e(route('images.show', $foto_modelo->path)); ?> " alt="imagem_<?php echo e($modelo->nome); ?>">
                    </div>
                    <div class="col-12 row img-actions-overlay">
                        <div class="col-12 d-flex justify-content-center">
                            <a wire:click="deletarFoto(<?php echo e($foto_modelo->id); ?>, <?php echo e($loop->index); ?>)">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/card-fotos-modelo-veiculo.blade.php ENDPATH**/ ?>