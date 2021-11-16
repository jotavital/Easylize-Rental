

<?php $__env->startSection('title', 'Modelos'); ?>

<?php $__env->startSection('contentTitle', 'Modelos de veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('modelos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modelo-veiculo.wire-modelos-veiculos', [])->html();
} elseif ($_instance->childHasBeenRendered('CWlybSJ')) {
    $componentId = $_instance->getRenderedChildComponentId('CWlybSJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('CWlybSJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CWlybSJ');
} else {
    $response = \Livewire\Livewire::mount('modelo-veiculo.wire-modelos-veiculos', []);
    $html = $response->html();
    $_instance->logRenderedChild('CWlybSJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="/js/initialize-slimSelects.js"></script>
<script>
    var tableModelosObj;

    window.onload = function() {
        tableModelosObj = $('#tableModelos').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/modelo/modelos-veiculos.blade.php ENDPATH**/ ?>