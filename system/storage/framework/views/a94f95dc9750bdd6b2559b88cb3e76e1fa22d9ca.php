

<?php $__env->startSection('title', 'Todos os veículos'); ?>

<?php $__env->startSection('contentTitle', 'Todos os veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('todos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php

use App\Models\Veiculo;
use Illuminate\Support\Facades\Session;

$veiculos = Veiculo::all();
$rotaAtivarInativarVeiculo = route('veiculos.ativar-inativar');

$success = Session::get('success');
$error = Session::get('error');

?>

<div class="content">

    <?php if(session('success')): ?>
    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','message' => $success]); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => $error]); ?>
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
        <div class="col-12">
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
                            <?php if($veiculo->ativo): ?>
                            <?php if (isset($component)) { $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SwitchAtivarInativar::class, ['id' => ''.e($veiculo->id).'','checked' => 'checked','rotaAtivarInativar' => $rotaAtivarInativarVeiculo]); ?>
<?php $component->withName('switch-ativar-inativar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd)): ?>
<?php $component = $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd; ?>
<?php unset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SwitchAtivarInativar::class, ['id' => ''.e($veiculo->id).'','checked' => 'false','rotaAtivarInativar' => $rotaAtivarInativarVeiculo]); ?>
<?php $component->withName('switch-ativar-inativar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd)): ?>
<?php $component = $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd; ?>
<?php unset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (isset($component)) { $__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcoesTabela::class, ['id' => ''.e($veiculo->id).'']); ?>
<?php $component->withName('acoes-tabela'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a)): ?>
<?php $component = $__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a; ?>
<?php unset($__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/ativar-inativar-registro.js"></script>
<script>
    var tableVeiculosObj;

    window.onload = function() {

        tableVeiculosObj = $('#tableVeiculos').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });

    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/veiculos.blade.php ENDPATH**/ ?>