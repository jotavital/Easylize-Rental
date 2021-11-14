

<?php $__env->startSection('title', 'Todos os veículos'); ?>

<?php $__env->startSection('contentTitle', 'Todos os veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('todos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('veiculos.veiculos', [])->html();
} elseif ($_instance->childHasBeenRendered('VmEACmg')) {
    $componentId = $_instance->getRenderedChildComponentId('VmEACmg');
    $componentTag = $_instance->getRenderedChildComponentTagName('VmEACmg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VmEACmg');
} else {
    $response = \Livewire\Livewire::mount('veiculos.veiculos', []);
    $html = $response->html();
    $_instance->logRenderedChild('VmEACmg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/veiculo/veiculos.blade.php ENDPATH**/ ?>