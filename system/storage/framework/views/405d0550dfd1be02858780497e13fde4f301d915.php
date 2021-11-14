<div class="content">
    <div class="container-fluid">

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

        <section class="mb-3">
            <form action=" <?php echo e(route('modelos.store')); ?> " method="POST" enctype="multipart/form-data" class="col-12 needs-validation" id="formAddModelo" novalidate>
                <?php echo csrf_field(); ?>
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" required>
                        <?php if (isset($component)) { $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CampoObrigatorio::class, []); ?>
<?php $component->withName('campo-obrigatorio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad)): ?>
<?php $component = $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad; ?>
<?php unset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="anoModeloSelect">Ano do modelo <span class="text-danger">*</span></label>
                        <select id="anoModeloSelect" name="anoModeloSelect" class="validate-select" required>
                            <option data-placeholder="true"></option>
                            <?php
                            foreach (range(date('Y') + 3, 1900) as $year) {
                            ?>
                                <option value="<?= $year ?>"><?= $year ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <?php if (isset($component)) { $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CampoObrigatorio::class, []); ?>
<?php $component->withName('campo-obrigatorio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad)): ?>
<?php $component = $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad; ?>
<?php unset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="motorModeloInput">Motor <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" required>
                        <?php if (isset($component)) { $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CampoObrigatorio::class, []); ?>
<?php $component->withName('campo-obrigatorio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad)): ?>
<?php $component = $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad; ?>
<?php unset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                        <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($marca->id); ?>"> <?php echo e($marca->nome); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if (isset($component)) { $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CampoObrigatorio::class, []); ?>
<?php $component->withName('campo-obrigatorio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad)): ?>
<?php $component = $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad; ?>
<?php unset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modelo-veiculo.input-imagens-modelo', [])->html();
} elseif ($_instance->childHasBeenRendered('czYyVfU')) {
    $componentId = $_instance->getRenderedChildComponentId('czYyVfU');
    $componentTag = $_instance->getRenderedChildComponentTagName('czYyVfU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('czYyVfU');
} else {
    $response = \Livewire\Livewire::mount('modelo-veiculo.input-imagens-modelo', []);
    $html = $response->html();
    $_instance->logRenderedChild('czYyVfU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
                </div>
            </form>
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
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <form action="<?php echo e(route('modelos.edit', $modelo->id)); ?>" method="GET" class="no-padding-form">
                                        <button type="submit" class="iconButton">
                                            <i class="fas fa-edit text-primary table-action-icon"></i>
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <i wire:click="modalDeletarModelo(<?php echo e($modelo->id); ?>)" class="fas fa-trash-alt text-danger table-action-icon"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="modal fade" id="modalDeletarModelo" tabindex="-1" aria-labelledby="modalDeletarModelo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarModelo">Deletar modelo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deletar modelo de nome "<?php echo e($nomeModelo); ?>"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="deletarModelo" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelos/modelos.blade.php ENDPATH**/ ?>