<div class="col-12 d-flex justify-content-center">
    <div class="col-8 card card-primary card-outline">
        <div class="card-body">
            <h5 class="mb-3 col-12 card-title">Fotos do modelo</h5>

            <div class="row d-flex justify-content-center">
                <?php if(!isset($fotosInput)): ?>
                <p><span class="text-danger">Sem fotos.</span></p>
                <?php else: ?>

                <?php $__currentLoopData = $fotosInput; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div id="img-modelo-" class="img-actions col-md-6">
                    <img class="img-actions-image" src="<?php echo e($foto->temporaryUrl()); ?>" alt="">

                    <div class="img-actions-overlay col-12 d-flex justify-content-center align-items-center">
                        <?php if (isset($component)) { $__componentOriginal7168e8f2ce378f461094da5eafa2aa1313a76648 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcoesImagem::class, ['id' => '2']); ?>
<?php $component->withName('acoes-imagem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal7168e8f2ce378f461094da5eafa2aa1313a76648)): ?>
<?php $component = $__componentOriginal7168e8f2ce378f461094da5eafa2aa1313a76648; ?>
<?php unset($__componentOriginal7168e8f2ce378f461094da5eafa2aa1313a76648); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/preview-imagens-modelo.blade.php ENDPATH**/ ?>