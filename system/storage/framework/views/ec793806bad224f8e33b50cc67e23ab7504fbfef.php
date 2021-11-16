

<?php $__env->startSection('title', 'Clientes'); ?>

<?php $__env->startSection('contentTitle', 'Clientes'); ?>

<?php $__env->startSection('clientes-menu-active', 'active'); ?>
<?php $__env->startSection('todos-clientes-menu-active', 'active'); ?>
<?php $__env->startSection('clientes-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clientes.wire-clientes', [])->html();
} elseif ($_instance->childHasBeenRendered('ep8kJfM')) {
    $componentId = $_instance->getRenderedChildComponentId('ep8kJfM');
    $componentTag = $_instance->getRenderedChildComponentTagName('ep8kJfM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ep8kJfM');
} else {
    $response = \Livewire\Livewire::mount('clientes.wire-clientes', []);
    $html = $response->html();
    $_instance->logRenderedChild('ep8kJfM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    var tableMarcasObj;

    window.onload = function() {

        tableClientesObj = $('#tableClientes').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true,
            columnDefs: [
            {
                "targets": [ 2 ],
                "visible": true
            },
            {
                "targets": [ 3 ],
                "visible": true
            }
        ]
        });

    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/cliente/clientes.blade.php ENDPATH**/ ?>