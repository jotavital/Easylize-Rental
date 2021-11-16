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
            <table class="table table-striped table-bordered" width="100%" id="tableClientes">
                <thead>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>CNH</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data nascimento</th>
                    <th>Sexo</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($cliente->nome); ?> </td>
                        <td> <?php echo e($cliente->cpf); ?> </td>
                        <td> <?php echo e($cliente->rg); ?> </td>
                        <td> <?php echo e($cliente->cnh); ?> </td>
                        <td> <?php echo e($cliente->telefone); ?> </td>
                        <td> <?php echo e($cliente->email); ?> </td>
                        <td> <?php echo e($cliente->data_nascimento); ?> </td>
                        <td> <?php echo e($cliente->sexo); ?> </td>
                        <td> <?php echo e($cliente->endereco->rua); ?>, n° <?php echo e($cliente->endereco->numero); ?>, <?php echo e($cliente->endereco->bairro); ?>, <?php echo e($cliente->endereco->cidade); ?>, <?php echo e($cliente->endereco->sigla_estado); ?>, <?php echo e($cliente->endereco->cep); ?> </td>
                        <td>
                            <?php
                            $rotaEditar = route('clientes.edit', $cliente->id);
                            $rotaExcluir = route('clientes.destroy', $cliente->id);
                            $textoModalDeletar = 'Tem certeza que deseja deletar o cliente de nome "' . $cliente->nome . '" e CPF "' . $cliente->cpf . '"?';
                            ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('acoes-tabela', ['model' => $cliente,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar])->html();
} elseif ($_instance->childHasBeenRendered($cliente->id)) {
    $componentId = $_instance->getRenderedChildComponentId($cliente->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($cliente->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($cliente->id);
} else {
    $response = \Livewire\Livewire::mount('acoes-tabela', ['model' => $cliente,'rotaEditar' => $rotaEditar,'rotaExcluir' => $rotaExcluir,'textoSucessoDeletar' => $textoSucessoDeletar,'textoErroDeletar' => $textoErroDeletar,'tituloModalDeletar' => $tituloModalDeletar,'textoModalDeletar' => $textoModalDeletar]);
    $html = $response->html();
    $_instance->logRenderedChild($cliente->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/clientes/wire-clientes.blade.php ENDPATH**/ ?>