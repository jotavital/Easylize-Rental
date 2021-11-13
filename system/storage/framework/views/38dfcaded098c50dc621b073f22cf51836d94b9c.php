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
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <form action="<?php echo e(route('veiculos.edit', $veiculo->id)); ?>" method="GET" class="no-padding-form">
                                        <button type="submit" class="iconButton">
                                            <i class="fas fa-edit text-primary table-action-icon"></i>
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <i wire:click="modalDeletarVeiculo(<?php echo e($veiculo->id); ?>)" class="fas fa-trash-alt text-danger table-action-icon"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div wire:ignore class="modal fade" id="modalDeletarVeiculo" tabindex="-1" aria-labelledby="modalDeletarVeiculo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarVeiculo">Deletar veículo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deletar veículo de placa <?php echo e($placa); ?>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="deletarVeiculo" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>

</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/veiculos/veiculos.blade.php ENDPATH**/ ?>