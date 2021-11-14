

<?php $__env->startSection('title', 'Todos os clientes'); ?>

<?php $__env->startSection('contentTitle', 'Todos os clientes'); ?>

<?php $__env->startSection('clientes-menu-active', 'active'); ?>
<?php $__env->startSection('todos-clientes-menu-active', 'active'); ?>
<?php $__env->startSection('clientes-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clientes.clientes', [])->html();
} elseif ($_instance->childHasBeenRendered('QNOZp4j')) {
    $componentId = $_instance->getRenderedChildComponentId('QNOZp4j');
    $componentTag = $_instance->getRenderedChildComponentTagName('QNOZp4j');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QNOZp4j');
} else {
    $response = \Livewire\Livewire::mount('clientes.clientes', []);
    $html = $response->html();
    $_instance->logRenderedChild('QNOZp4j', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    var tableVeiculosObj;

    window.onload = function() {

        tableVeiculosObj = $('#tableVeiculos').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });

    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/cliente/clientes-index.blade.php ENDPATH**/ ?>