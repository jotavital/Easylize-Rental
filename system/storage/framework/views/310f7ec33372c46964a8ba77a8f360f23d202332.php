<?var_dump($foto_modelo);exit;?>
<div id="img-modelo-<?php echo e($foto_modelo->id); ?>" class="img-actions col-md-6">
    <img class="img-actions-image" src=" <?php echo e(route('images.show', $foto_modelo->path)); ?> " alt="imagem_<?php echo e($modelo->nome); ?>">

    <div class="img-actions-overlay col-12 d-flex justify-content-center align-items-center">
        <?php if (isset($component)) { $__componentOriginal7168e8f2ce378f461094da5eafa2aa1313a76648 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcoesImagem::class, ['id' => ''.e($foto_modelo->id).'']); ?>
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
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/remover-imagem-modelo-veiculo.blade.php ENDPATH**/ ?>