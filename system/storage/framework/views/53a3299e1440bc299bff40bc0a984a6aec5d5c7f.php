<div class="form-row mb-3 col-12 d-flex justify-content-center">
    <div class="mt-4 mb-3 input-group col-md-6">
        <label for="fotosInput" aria-describedby="fotosInput">Fotos <span class="text-danger">(Máximo: <?php echo e($maximoFotos); ?> fotos)</span></label>
        <input type="file" wire:model="fotosInput" wire:livewire-upload-finish="validar" class="form-control-file" id="fotosInput" name="fotosInput[]" accept="image/*" multiple>
    </div>
    <div class="col-md-10 col-sm-12 d-flex justify-content-center">
        <div class="col-md-10 col-sm-12 card card-primary card-outline">
            <div class="card-body">
                <div class="row card-headers col-12">
                    <div class="card-title">
                        <h5 class="mb-3 col-12 card-title">Fotos carregadas (<?php echo e(count($fotosInput)); ?>)</h5>
                    </div>
                </div>
                <div class="row d-flex justify-content-center col-12">
                    <div wire:loading.flex wire:target="fotosInput" class="col-12 justify-content-center">
                        <div class="spinner">

                        </div>
                    </div>

                    <?php if(!$fotosInput): ?>
                    <p><span wire:loading.remove class="text-danger">Sem fotos.</span></p>
                    <?php else: ?>

                    <div class="row col-12 d-flex justify-content-around">
                        <?php $__currentLoopData = $fotosInput; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto_modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-5 col-sm-8 card d-flex align-content-between mb-3 py-1">
                            <div class="img-actions col-12">
                                <div class="img-actions-image d-flex justify-content-center align-items-center">
                                    <img src=" <?php echo e($foto_modelo->temporaryUrl()); ?> " alt="imagem_<?php echo e($foto_modelo->temporaryUrl()); ?>">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/input-imagens-modelo.blade.php ENDPATH**/ ?>