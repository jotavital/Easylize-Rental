

<?php $__env->startSection('title', 'Editar cliente'); ?>

<?php $__env->startSection('contentTitle', 'Editar cliente'); ?>

<?php $__env->startSection('clientes-menu-active', 'active'); ?>
<?php $__env->startSection('todos-clientes-menu-active', 'active'); ?>
<?php $__env->startSection('clientes-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="col-12 d-flex justify-content-center">
            <?php if(session('success')): ?>
            <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','message' => session('success')]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-5']); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php elseif(session('error')): ?>
            <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => session('success')]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-5']); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clientes.form-create-edit-cliente', ['cliente' => $cliente])->html();
} elseif ($_instance->childHasBeenRendered('LT4rLwY')) {
    $componentId = $_instance->getRenderedChildComponentId('LT4rLwY');
    $componentTag = $_instance->getRenderedChildComponentTagName('LT4rLwY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LT4rLwY');
} else {
    $response = \Livewire\Livewire::mount('clientes.form-create-edit-cliente', ['cliente' => $cliente]);
    $html = $response->html();
    $_instance->logRenderedChild('LT4rLwY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>

    <script>
        window.onload = function() {
            PopularSlimSelectsObj = new PopularSlimSelects();

            var url = '<?php echo e(route("cidades.byestado.get", ":id")); ?>';
            url = url.replace(':id', estadoSelect.selected());

            PopularSlimSelectsObj.popularSlimSelectAjaxComValorSelecionado(url, "#cidadeSelect", 'id', 'nome', null, '<?php echo e($cliente->endereco->cidade_id); ?>', 'get');

            // ! popular select modelo 
            $("#estadoSelect").on('change', function() {
                if (estadoSelect.selected() != '') {
                    $('#cidadeSelect').empty();
                    cidadeSelect.enable();

                    var url = '<?php echo e(route("cidades.byestado.get", ":id")); ?>';
                    url = url.replace(':id', estadoSelect.selected());
                    
                    PopularSlimSelectsObj.popularSlimSelectAjaxBasico(url, '#cidadeSelect', 'id', 'nome', null, 'get');
                } else {
                    $('#cidadeSelect').empty();
                    cidadeSelect.disable();
                }
            });
        }
    </script>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/cliente/edit-cliente.blade.php ENDPATH**/ ?>