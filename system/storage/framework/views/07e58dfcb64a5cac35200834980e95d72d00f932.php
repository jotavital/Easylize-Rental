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
} elseif ($_instance->childHasBeenRendered('SWun4Ko')) {
    $componentId = $_instance->getRenderedChildComponentId('SWun4Ko');
    $componentTag = $_instance->getRenderedChildComponentTagName('SWun4Ko');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SWun4Ko');
} else {
    $response = \Livewire\Livewire::mount('marcas.marcas', []);
    $html = $response->html();
    $_instance->logRenderedChild('SWun4Ko', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/marca/marcasVeiculos.blade.php ENDPATH**/ ?>