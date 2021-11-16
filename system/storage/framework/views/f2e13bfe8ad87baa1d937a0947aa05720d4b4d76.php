<div class="content">
    <?php if(session('success')): ?>
    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','message' => session('success')]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="container-fluid">
        <div wire:ignore class="col-12">
            <table class="table table-striped table-bordered" width="100%" id="tableVeiculos">
                <thead>
                    <th>ID </th>
                    <th>Placa</th>
                    <th>Chassi</th>
                    <th>Renavam</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Categoria</th>
                    <th>Status</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($veiculo->id); ?> </td>
                        <td> <?php echo e($veiculo->placa); ?> </td>
                        <td> <?php echo e($veiculo->chassi); ?> </td>
                        <td> <?php echo e($veiculo->renavam); ?> </td>
                        <td> <?php echo e($veiculo->marca->nome); ?> </td>
                        <td> <?php echo e($veiculo->modelo->nome); ?> </td>
                        <td> <?php echo e($veiculo->cor); ?> </td>
                        <td> <?php echo e($veiculo->categoria->nome); ?> </td>
                        <td>
                            <?php if($veiculo->esta_alugado): ?>
                            <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => 'Alugado']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'py-0']); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','message' => 'Disponível']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'py-0']); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('switch-ativar-inativar', ['model' => $veiculo])->html();
} elseif ($_instance->childHasBeenRendered($veiculo->id)) {
    $componentId = $_instance->getRenderedChildComponentId($veiculo->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($veiculo->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($veiculo->id);
} else {
    $response = \Livewire\Livewire::mount('switch-ativar-inativar', ['model' => $veiculo]);
    $html = $response->html();
    $_instance->logRenderedChild($veiculo->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </td>
                        <td>
                            <?php
                            $textoModalDeletar = 'Deseja realmente deletar o veículo de placa "' . $veiculo->placa . '"?';
                            $rotaEditar = route('veiculos.edit', $veiculo->id);
                            $rotaExcluir = route('veiculos.destroy', $veiculo->id);
                            ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('acoes-tabela', ['model' => $veiculo,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar])->html();
} elseif ($_instance->childHasBeenRendered($veiculo->id)) {
    $componentId = $_instance->getRenderedChildComponentId($veiculo->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($veiculo->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($veiculo->id);
} else {
    $response = \Livewire\Livewire::mount('acoes-tabela', ['model' => $veiculo,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar]);
    $html = $response->html();
    $_instance->logRenderedChild($veiculo->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/veiculos/wire-veiculos.blade.php ENDPATH**/ ?>