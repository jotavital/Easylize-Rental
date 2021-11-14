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
    $html = \Livewire\Livewire::mount('alugueis.alugueis', [])->html();
} elseif ($_instance->childHasBeenRendered('XzEc5Iv')) {
    $componentId = $_instance->getRenderedChildComponentId('XzEc5Iv');
    $componentTag = $_instance->getRenderedChildComponentTagName('XzEc5Iv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XzEc5Iv');
} else {
    $response = \Livewire\Livewire::mount('alugueis.alugueis', []);
    $html = $response->html();
    $_instance->logRenderedChild('XzEc5Iv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/aluguel/alugueisIndex.blade.php ENDPATH**/ ?>