<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');
?>



<?php $__env->startSection('title', 'Novo aluguel'); ?>

<?php $__env->startSection('contentTitle', 'Novo aluguel'); ?>

<?php $__env->startSection('alugueis-menu-active', 'active'); ?>
<?php $__env->startSection('novo-aluguel-menu-active', 'active'); ?>
<?php $__env->startSection('alugueis-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('alugueis.wire-create-aluguel', [])->html();
} elseif ($_instance->childHasBeenRendered('G8dMl1g')) {
    $componentId = $_instance->getRenderedChildComponentId('G8dMl1g');
    $componentTag = $_instance->getRenderedChildComponentTagName('G8dMl1g');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('G8dMl1g');
} else {
    $response = \Livewire\Livewire::mount('alugueis.wire-create-aluguel', []);
    $html = $response->html();
    $_instance->logRenderedChild('G8dMl1g', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="/js/mascaras-inputs.js"></script>
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    window.onload = function() {
        PopularSlimSelectsObj = new PopularSlimSelects();
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/aluguel/create-aluguel.blade.php ENDPATH**/ ?>