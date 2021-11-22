<div class="content">
    <div class="container-fluid">

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
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => session('error')]); ?>
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

        <section class="mb-3">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modelo-veiculo.form-create-edit-modelo', [])->html();
} elseif ($_instance->childHasBeenRendered('2V9OATD')) {
    $componentId = $_instance->getRenderedChildComponentId('2V9OATD');
    $componentTag = $_instance->getRenderedChildComponentTagName('2V9OATD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2V9OATD');
} else {
    $response = \Livewire\Livewire::mount('modelo-veiculo.form-create-edit-modelo', []);
    $html = $response->html();
    $_instance->logRenderedChild('2V9OATD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </section>
        <hr>
        <div class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableModelos">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Motor</th>
                    <th>Marca</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $modelos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($modelo->id); ?> </td>
                        <td> <?php echo e($modelo->nome); ?> </td>
                        <td> <?php echo e($modelo->ano_modelo); ?> </td>
                        <td> <?php echo e($modelo->motor); ?> </td>
                        <td> <?php echo e($modelo->marca->nome); ?> </td>
                        <td>
                            <?php
                            $textoModalDeletar = 'Deseja realmente deletar o modelo de nome "' . $modelo->nome . '"?';
                            $rotaEditar = route('modelos.edit', $modelo->id);
                            $rotaExcluir = route('modelos.destroy', $modelo->id);
                            $alertTitle = "Atenção";
                            $alertMessage = "Se deletar este modelo, as fotos associadas a ele também serão deletadas.";
                            ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('acoes-tabela', ['model' => $modelo,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar,'temAlert' => 1,'alertType' => 'danger','alertTitle' => $alertTitle,'alertMessage' => $alertMessage])->html();
} elseif ($_instance->childHasBeenRendered($modelo->id)) {
    $componentId = $_instance->getRenderedChildComponentId($modelo->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($modelo->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($modelo->id);
} else {
    $response = \Livewire\Livewire::mount('acoes-tabela', ['model' => $modelo,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar,'temAlert' => 1,'alertType' => 'danger','alertTitle' => $alertTitle,'alertMessage' => $alertMessage]);
    $html = $response->html();
    $_instance->logRenderedChild($modelo->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/wire-modelos-veiculos.blade.php ENDPATH**/ ?>