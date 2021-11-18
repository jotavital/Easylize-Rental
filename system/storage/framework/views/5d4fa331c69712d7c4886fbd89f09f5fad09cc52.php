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

        <div wire:ignore class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tablealuguels">
                <thead>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>CNH</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data nascimento</th>
                    <th>Sexo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $alugueis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluguel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($aluguel->nome); ?> </td>
                        <td> <?php echo e($aluguel->cpf); ?> </td>
                        <td> <?php echo e($aluguel->rg); ?> </td>
                        <td> <?php echo e($aluguel->cnh); ?> </td>
                        <td> <?php echo e($aluguel->telefone); ?> </td>
                        <td> <?php echo e($aluguel->email); ?> </td>
                        <td> <?php echo e($aluguel->data_nascimento); ?> </td>
                        <td> <?php echo e($aluguel->sexo); ?> </td>
                        <td>
                            <?php
                            $rotaEditar = route('alugueis.edit', $aluguel->id);
                            $rotaExcluir = route('alugueis.destroy', $aluguel->id);
                            $textoModalDeletar = 'Tem certeza que deseja deletar o aluguel de nome "' . $aluguel->nome . '" e CPF "' . $aluguel->cpf . '"?';
                            ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('acoes-tabela', ['model' => $aluguel,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar])->html();
} elseif ($_instance->childHasBeenRendered($aluguel->id)) {
    $componentId = $_instance->getRenderedChildComponentId($aluguel->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($aluguel->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($aluguel->id);
} else {
    $response = \Livewire\Livewire::mount('acoes-tabela', ['model' => $aluguel,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar]);
    $html = $response->html();
    $_instance->logRenderedChild($aluguel->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/alugueis/wire-alugueis.blade.php ENDPATH**/ ?>