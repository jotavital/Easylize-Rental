<?php if($rotaCreate): ?>
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
            <select id="anoModeloSelect" name="anoModeloSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
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
            <select id="marcaSelect" name="marcaSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
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
} elseif ($_instance->childHasBeenRendered('nZiHe2N')) {
    $componentId = $_instance->getRenderedChildComponentId('nZiHe2N');
    $componentTag = $_instance->getRenderedChildComponentTagName('nZiHe2N');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nZiHe2N');
} else {
    $response = \Livewire\Livewire::mount('modelo-veiculo.input-imagens-modelo', []);
    $html = $response->html();
    $_instance->logRenderedChild('nZiHe2N', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <div class="col-sm-12 d-flex justify-content-center">
        <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
    </div>
</form>

<?php elseif($rotaEdit): ?>

<form action=" <?php echo e(route('modelos.update', $modelo->id)); ?> " method="POST" enctype="multipart/form-data" class="col-12 needs-validation" id="formAddModelo" novalidate>
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-row col-12 d-flex justify-content-center">
        <div class="form-group col-md-4">
            <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" value=" <?php echo e($modelo->nome); ?> " required>
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
            <select id="anoModeloSelect" name="anoModeloSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
                <?php
                foreach (range(date('Y') + 3, 1900) as $year) {
                ?>
                    <option value="<?= $year ?>" <?php echo e(($modelo->ano_modelo == $year) ? "selected" : ""); ?>><?= $year ?></option>
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
            <input type="text" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" value=" <?php echo e($modelo->motor); ?> " required>
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
            <select id="marcaSelect" name="marcaSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
                <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($marca->id); ?>" <?php echo e(($marca->id == $modelo->marca->id) ? "selected" : ""); ?>> <?php echo e($marca->nome); ?> </option>
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
    $html = \Livewire\Livewire::mount('modelo-veiculo.input-imagens-modelo', ['modelo' => $modelo])->html();
} elseif ($_instance->childHasBeenRendered('ah6X8M9')) {
    $componentId = $_instance->getRenderedChildComponentId('ah6X8M9');
    $componentTag = $_instance->getRenderedChildComponentTagName('ah6X8M9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ah6X8M9');
} else {
    $response = \Livewire\Livewire::mount('modelo-veiculo.input-imagens-modelo', ['modelo' => $modelo]);
    $html = $response->html();
    $_instance->logRenderedChild('ah6X8M9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <hr>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modelo-veiculo.card-fotos-modelo-veiculo', ['modelo' => $modelo])->html();
} elseif ($_instance->childHasBeenRendered('XZg99UL')) {
    $componentId = $_instance->getRenderedChildComponentId('XZg99UL');
    $componentTag = $_instance->getRenderedChildComponentTagName('XZg99UL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XZg99UL');
} else {
    $response = \Livewire\Livewire::mount('modelo-veiculo.card-fotos-modelo-veiculo', ['modelo' => $modelo]);
    $html = $response->html();
    $_instance->logRenderedChild('XZg99UL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <div class="col-sm-12 d-flex justify-content-center">
        <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
    </div>
</form>

<?php endif; ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/modelo-veiculo/form-create-edit-modelo.blade.php ENDPATH**/ ?>