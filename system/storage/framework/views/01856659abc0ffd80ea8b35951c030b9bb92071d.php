

<?php $__env->startSection('title', 'Aluguéis'); ?>

<?php $__env->startSection('contentTitle', 'Aluguéis'); ?>

<?php $__env->startSection('alugueis-menu-active', 'active'); ?>
<?php $__env->startSection('todos-alugueis-menu-active', 'active'); ?>
<?php $__env->startSection('alugueis-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('alugueis.wire-alugueis', [])->html();
} elseif ($_instance->childHasBeenRendered('NYAMHLB')) {
    $componentId = $_instance->getRenderedChildComponentId('NYAMHLB');
    $componentTag = $_instance->getRenderedChildComponentTagName('NYAMHLB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NYAMHLB');
} else {
    $response = \Livewire\Livewire::mount('alugueis.wire-alugueis', []);
    $html = $response->html();
    $_instance->logRenderedChild('NYAMHLB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    var tableAlugueisObj;

    window.onload = function() {

        tableAlugueisObj = $('#tableAlugueis').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true,
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/aluguel/alugueis.blade.php ENDPATH**/ ?>