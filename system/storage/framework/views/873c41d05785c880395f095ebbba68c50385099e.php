

<?php $__env->startSection('title', 'Todos os veículos'); ?>

<?php $__env->startSection('contentTitle', 'Todos os veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('todos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">

    <div class="container-fluid">
        <div class="col-12">
            <table class="table table-striped table-bordered" width="100%" id="tableVeiculos">
                <thead>
                    <th>ID</th>
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

                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="divModalEditarVeiculo">
    
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    var tableVeiculosObj;

    function submitAtivarInativarForm(formId) {
        $.ajax({
            url: "<?php echo e(route('veiculos.ativar-inativar')); ?>",
            type: "post",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "formId": formId
            },
            success: function(response) {

            },
            error: function(response) {
                alert("Não foi possível desativar este veículo, tente novamente.");
            }
        });
    }

    function gerarModalEditarVeiculo(id) {
        $('#divModalEditarVeiculo').append(`<?php if (isset($component)) { $__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Modals\ModalEditarVeiculo::class, ['id' => '` + id + `']); ?>
<?php $component->withName('modals.modalEditarVeiculo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8)): ?>
<?php $component = $__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8; ?>
<?php unset($__componentOriginal956e40311102bef18de4b298a0d2bc47ad9852a8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>`);
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
                    responsive: true,
                    data: veiculos,
                    columns: [{
                            data: 'id'
                        },
                        {
                            data: 'placa'
                        },
                        {
                            data: 'chassi'
                        },
                        {
                            data: 'renavam'
                        },
                        {
                            data: 'marca.nome'
                        },
                        {
                            data: 'modelo.nome'
                        },
                        {
                            data: 'categoria.nome'
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                if (data.ativo == 1) {
                                    return `<?php if (isset($component)) { $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SwitchAtivarInativar::class, ['id' => '` + data.id + `','checked' => 'checked']); ?>
<?php $component->withName('switch-ativar-inativar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd)): ?>
<?php $component = $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd; ?>
<?php unset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>`;
                                } else {
                                    return `<?php if (isset($component)) { $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SwitchAtivarInativar::class, ['id' => '` + data.id + `','checked' => 'false']); ?>
<?php $component->withName('switch-ativar-inativar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd)): ?>
<?php $component = $__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd; ?>
<?php unset($__componentOriginalabf495ef886160d8df487fdd04521d7d9d6ffebd); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>`;
                                }
                            }
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `<?php if (isset($component)) { $__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcoesTabela::class, ['id' => '` + data.id + `']); ?>
<?php $component->withName('acoes-tabela'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a)): ?>
<?php $component = $__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a; ?>
<?php unset($__componentOriginal2462b2f6a8a5118e7627de1bfec3bf73e59e093a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>`;
                            }
                        }
                    ]
                });
            }
        });

    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/veiculos.blade.php ENDPATH**/ ?>