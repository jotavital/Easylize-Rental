<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');
?>



<?php $__env->startSection('title', 'Marcas'); ?>

<?php $__env->startSection('contentTitle', 'Marcas de veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('marcas-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('marcas.marcas', [])->html();
} elseif ($_instance->childHasBeenRendered('Li9moIy')) {
    $componentId = $_instance->getRenderedChildComponentId('Li9moIy');
    $componentTag = $_instance->getRenderedChildComponentTagName('Li9moIy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Li9moIy');
} else {
    $response = \Livewire\Livewire::mount('marcas.marcas', []);
    $html = $response->html();
    $_instance->logRenderedChild('Li9moIy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    var tableMarcasObj;

    window.onload = function() {

        tableMarcasObj = $('#tableMarcas').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });

    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/marca/marcas-veiculos.blade.php ENDPATH**/ ?>