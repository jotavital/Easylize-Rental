

<?php $__env->startSection('title', 'Clientes'); ?>

<?php $__env->startSection('contentTitle', 'Clientes'); ?>

<?php $__env->startSection('clientes-menu-active', 'active'); ?>
<?php $__env->startSection('todos-clientes-menu-active', 'active'); ?>
<?php $__env->startSection('clientes-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clientes.wire-clientes', [])->html();
} elseif ($_instance->childHasBeenRendered('NRYfbC5')) {
    $componentId = $_instance->getRenderedChildComponentId('NRYfbC5');
    $componentTag = $_instance->getRenderedChildComponentTagName('NRYfbC5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NRYfbC5');
} else {
    $response = \Livewire\Livewire::mount('clientes.wire-clientes', []);
    $html = $response->html();
    $_instance->logRenderedChild('NRYfbC5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    var tableClientesObj;

    window.onload = function() {

        tableClientesObj = $('#tableClientes').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true,
            columns: [
                {
                    responsivePriority: 2
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 8
                },
                {
                    responsivePriority: 3
                },
                {
                    responsivePriority: 4
                },
                {
                    responsivePriority: 6
                },
                {
                    responsivePriority: 9
                },
                {
                    responsivePriority: 10
                },
                {
                    responsivePriority: 7
                },
                {
                    responsivePriority: 1
                },
            ]
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/cliente/clientes.blade.php ENDPATH**/ ?>