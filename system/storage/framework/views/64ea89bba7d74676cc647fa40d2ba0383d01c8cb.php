<?php

use App\Models\Veiculo;

$veiculo = Veiculo::find($id);

?>

<div class="modal fade" id="modalEditarVeiculo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar veículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action=" <?php echo e(route('veiculos.store')); ?> " method="POST" class="col-12 needs-validation" enctype='multipart/form-data' novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="form-row col-12 d-flex justify-content-center">
                        <div class="form-group col-sm-3">
                            <label for="placaInput">Placa <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="placaInput" name="placaInput" placeholder="Placa do veículo" maxlength="8" required value="<?php echo e($veiculo->placa); ?>">
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
                        <div class="form-group col-sm-5">
                            <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="chassiInput" name="chassiInput" placeholder="Número do chassi" maxlength="17" required value="<?php echo e($veiculo->chassi); ?>">
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
                        <div class="form-group col-sm-4">
                            <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="renavamInput" name="renavamInput" placeholder="Código Renavam" maxlength="11" required value="<?php echo e($veiculo->renavam); ?>">
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
                    <div class="mb-2 form-row col-12 d-flex justify-content-center">
                        <div class="form-group col-sm-4">
                            <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                            <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                                <option data-placeholder="true"></option>
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
                        <div class="form-group col-sm-4">
                            <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                            <select id="modeloSelect" name="modeloSelect" class="validate-select" required>
                                <option data-placeholder="true"></option>
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
                        <div class="form-group col-sm-2">
                            <label for="corInput">Cor <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="corInput" name="corInput" placeholder="Cor" required value="<?php echo e($veiculo->cor); ?>">
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
                        <div class="form-group col-sm-2">
                            <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                            <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="validate-select" required>
                                <option data-placeholder="true"></option>
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
                    <div class="col-sm-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    var PopularSlimSelectsObj = new PopularSlimSelects();

    var dataAjax = {
        "_token": "<?php echo e(csrf_token()); ?>"
    };
    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("<?php echo e(route('marcas.all.get')); ?>", "#marcaSelect", "id", "nome", dataAjax, "<?php echo e($veiculo->marca_id); ?>");

    var dataAjaxModelo = {
        "_token": "<?php echo e(csrf_token()); ?>",
        "idMarca": "<?php echo e($veiculo->marca_id); ?>"
    };
    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("<?php echo e(route('modelos.bymarca.get')); ?>", "#modeloSelect", "id", "nome", dataAjaxModelo, "<?php echo e($veiculo->modelo_id); ?>");

    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("<?php echo e(route('categorias.veiculos.get')); ?>", "#categoriaVeiculoSelect", "id", "nome", dataAjax, "<?php echo e($veiculo->categoria_id); ?>");

    // !! popular dinamicamente select de modelo com base na marca selecionada
</script><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/components/modals/modal-editar-veiculo.blade.php ENDPATH**/ ?>