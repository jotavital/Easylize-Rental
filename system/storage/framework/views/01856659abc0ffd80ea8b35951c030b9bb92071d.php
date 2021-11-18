

<?php $__env->startSection('title', 'Aluguéis'); ?>

<?php $__env->startSection('contentTitle', 'Aluguéis'); ?>

<?php $__env->startSection('alugueis-menu-active', 'active'); ?>
<?php $__env->startSection('todos-alugueis-menu-active', 'active'); ?>
<?php $__env->startSection('alugueis-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('alugueis.wire-alugueis', [])->html();
} elseif ($_instance->childHasBeenRendered('zVt3q6O')) {
    $componentId = $_instance->getRenderedChildComponentId('zVt3q6O');
    $componentTag = $_instance->getRenderedChildComponentTagName('zVt3q6O');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zVt3q6O');
} else {
    $response = \Livewire\Livewire::mount('alugueis.wire-alugueis', []);
    $html = $response->html();
    $_instance->logRenderedChild('zVt3q6O', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/aluguel/alugueis.blade.php ENDPATH**/ ?>