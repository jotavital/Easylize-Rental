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

        <section class="col-12 mb-3">
            <form action=" <?php echo e(route('marcas.store')); ?> " method="POST" class="col-12 needs-validation" novalidate>
                <?php echo csrf_field(); ?>
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-sm-3">
                        <label for="nomeMarcaInput">Nome da marca <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="nomeMarcaInput" id="nomeMarcaInput" placeholder="Marca" required>
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
                    <button type="submit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
                </div>
            </form>
        </section>
        <hr>
        <div wire:ignore class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableMarcas">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>A????es</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($marca->id); ?> </td>
                        <td> <?php echo e($marca->nome); ?> </td>
                        <td>
                            <?php
                            $textoModalDeletar = 'Deseja realmente deletar a marca "' . $marca->nome . '"?';
                            $rotaEditar = route('marcas.edit', $marca->id);
                            $rotaExcluir = route('marcas.destroy', $marca->id);
                            ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('acoes-tabela', ['model' => $marca,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar])->html();
} elseif ($_instance->childHasBeenRendered('zXEszOH')) {
    $componentId = $_instance->getRenderedChildComponentId('zXEszOH');
    $componentTag = $_instance->getRenderedChildComponentTagName('zXEszOH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zXEszOH');
} else {
    $response = \Livewire\Livewire::mount('acoes-tabela', ['model' => $marca,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar]);
    $html = $response->html();
    $_instance->logRenderedChild('zXEszOH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/marcas/wire-marcas-veiculos.blade.php ENDPATH**/ ?>