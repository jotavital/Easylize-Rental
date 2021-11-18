

<?php $__env->startSection('title', 'Editar Modelo'); ?>

<?php $__env->startSection('contentTitle', 'Editar modelo de veículo'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('modelos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">

        <section class="mb-3">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modelo-veiculo.form-create-edit-modelo', ['modelo' => $modelo])->html();
} elseif ($_instance->childHasBeenRendered('hLUXiCd')) {
    $componentId = $_instance->getRenderedChildComponentId('hLUXiCd');
    $componentTag = $_instance->getRenderedChildComponentTagName('hLUXiCd');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hLUXiCd');
} else {
    $response = \Livewire\Livewire::mount('modelo-veiculo.form-create-edit-modelo', ['modelo' => $modelo]);
    $html = $response->html();
    $_instance->logRenderedChild('hLUXiCd', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </section>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/modelo/edit-modelo.blade.php ENDPATH**/ ?>