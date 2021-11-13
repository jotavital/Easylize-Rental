

<?php $__env->startSection('title', 'Todos os veículos'); ?>

<?php $__env->startSection('contentTitle', 'Todos os veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('todos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');

?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('veiculos.veiculos', [])->html();
} elseif ($_instance->childHasBeenRendered('jut71uD')) {
    $componentId = $_instance->getRenderedChildComponentId('jut71uD');
    $componentTag = $_instance->getRenderedChildComponentTagName('jut71uD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jut71uD');
} else {
    $response = \Livewire\Livewire::mount('veiculos.veiculos', []);
    $html = $response->html();
    $_instance->logRenderedChild('jut71uD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/veiculo/veiculos.blade.php ENDPATH**/ ?>