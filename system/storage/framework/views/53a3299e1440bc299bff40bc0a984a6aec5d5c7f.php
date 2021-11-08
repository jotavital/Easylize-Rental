<div class="form-row mb-3 col-12 d-flex justify-content-center">
    <div class="mt-4 mb-3 input-group col-md-6">
        <label for="fotosInput" aria-describedby="fotosInput">Fotos <span class="text-danger">(Máximo: 10 fotos)</span></label>
        <input type="file" wire:model="fotosInput" class="form-control-file" id="fotosInput" name="fotosInput[]" accept="image/*" multiple>
    </div>
    <div class="col-md-10 col-sm-12 d-flex justify-content-center">
        <div class="col-md-8 col-sm-12 card card-primary card-outline">
            <div class="card-body">
                <div class="row card-headers col-12">
                    <div class="card-title">
                        <h5 class="mb-3 col-12 card-title">Fotos carregadas</h5>
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

                    <?php $__currentLoopData = $fotosInput; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="img-actions col-md-6">
                        <img class="img-actions-image" src="<?php echo e($foto->temporaryUrl()); ?>" alt="">

                        <div class="img-actions-overlay col-12 d-flex justify-content-center align-items-center">
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <a wire:click="removeImage(<?php echo e($loop->index); ?>)">
                                        <i class="fas fa-trash-alt fa-2x text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/input-imagens-modelo.blade.php ENDPATH**/ ?>