

<?php $__env->startSection('title', 'Novo cliente'); ?>

<?php $__env->startSection('contentTitle', 'Novo cliente'); ?>

<?php $__env->startSection('clientes-menu-active', 'active'); ?>
<?php $__env->startSection('novo-cliente-menu-active', 'active'); ?>
<?php $__env->startSection('clientes-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clientes.wire-create-cliente', [])->html();
} elseif ($_instance->childHasBeenRendered('5wYgAjE')) {
    $componentId = $_instance->getRenderedChildComponentId('5wYgAjE');
    $componentTag = $_instance->getRenderedChildComponentTagName('5wYgAjE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5wYgAjE');
} else {
    $response = \Livewire\Livewire::mount('clientes.wire-create-cliente', []);
    $html = $response->html();
    $_instance->logRenderedChild('5wYgAjE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    
    
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/cliente/create-cliente.blade.php ENDPATH**/ ?>