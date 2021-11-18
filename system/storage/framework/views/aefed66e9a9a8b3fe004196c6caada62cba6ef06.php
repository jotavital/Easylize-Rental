

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('contentTitle', 'Painel'); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.wire-dashboard', [])->html();
} elseif ($_instance->childHasBeenRendered('r1LLauk')) {
    $componentId = $_instance->getRenderedChildComponentId('r1LLauk');
    $componentTag = $_instance->getRenderedChildComponentTagName('r1LLauk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r1LLauk');
} else {
    $response = \Livewire\Livewire::mount('dashboard.wire-dashboard', []);
    $html = $response->html();
    $_instance->logRenderedChild('r1LLauk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>