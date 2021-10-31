

<?php $__env->startSection('title', 'Todos os veículos'); ?>

<?php $__env->startSection('contentTitle', 'Todos os veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('todos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php

use App\Models\Veiculo;

$veiculos = Veiculo::all();

?>

<div class="content">

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
                        <td> <?php echo e($veiculo->categoria->nome); ?> </td>
                        <td>
                            <?php if($veiculo->ativo): ?>
                            <?php if (isset($component)) { $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SwitchAtivarInativar::class, ['id' => ''.e($veiculo->id).'','checked' => 'checked','submitFunctionName' => 'ativarInativarVeiculo']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\SwitchAtivarInativar::class, ['id' => ''.e($veiculo->id).'','checked' => 'false','submitFunctionName' => 'ativarInativarVeiculo']); ?>
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

<div id="divModalEditarVeiculo">
    <?php if (isset($component)) { $__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Modals\ModalEditarVeiculo::class, ['id' => ''.e(request()->get('idVeiculoEditar')).'']); ?>
<?php $component->withName('modals.modal-editar-veiculo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8)): ?>
<?php $component = $__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8; ?>
<?php unset($__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>

<?php

if (isset($_GET['idVeiculoEditar'])) {
?>
    <?php if (isset($component)) { $__componentOriginal8e6c8e8986b1c30e63e2aa7464ecca32fb6225ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Scripts\ShowEditarVeiculoModal::class, []); ?>
<?php $component->withName('scripts.show-editar-veiculo-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal8e6c8e8986b1c30e63e2aa7464ecca32fb6225ee)): ?>
<?php $component = $__componentOriginal8e6c8e8986b1c30e63e2aa7464ecca32fb6225ee; ?>
<?php unset($__componentOriginal8e6c8e8986b1c30e63e2aa7464ecca32fb6225ee); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php
}

?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script>
    var tableVeiculosObj;

    function ativarInativarVeiculo(id) {

        $.ajax({
            url: "<?php echo e(route('veiculos.ativar-inativar')); ?>",
            type: "post",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "formId": id
            },
            success: function(response) {

            },
            error: function(response) {
                alert("Não foi possível desativar este veículo, tente novamente.");
            }
        });
    }

    window.onload = function() {

        $.ajax({
            url: "<?php echo e(route('veiculos.all.get')); ?>",
            type: "post",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>"
            },
            dataType: "json",
            success: function(veiculos) {
                tableVeiculosObj = $('#tableVeiculos').DataTable({
                    language: {
                        url: '/lang/pt-br/dataTables_pt-br.json'
                    },
                    responsive: true
                });
            }
        });

        $('#modalEditarVeiculo').on('hidden.bs.modal', function() {
            window.history.pushState(null, null, window.location.pathname);
        });

    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/veiculos.blade.php ENDPATH**/ ?>