

<?php $__env->startSection('title', 'Todos os veículos'); ?>

<?php $__env->startSection('contentTitle', 'Todos os veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('todos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">

        <table class="cell-border compact hover" id="tableVeiculos">
            <thead>
                <th>ID</th>
                <th>Placa</th>
                <th>Chassi</th>
                <th>Renavam</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Categoria</th>
                <th>Ativo</th>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    window.onload = function() {

        $.ajax({
            url: "<?php echo e(route('veiculos.all.get', ['tenant' => $_COOKIE['tenant_name']])); ?>",
            type: "post",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>"
            },
            dataType: "json",
            success: function(veiculos) {

                $('#tableVeiculos').DataTable({
                    language: {
                        url: '/lang/pt-br/dataTables_pt-br.json'
                    },
                    data: veiculos,
                    columnDefs: [{
                        className: "dt-center",
                        targets: "_all"
                    }],
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
                            data: 'fk_marca'
                        },
                        {
                            data: 'fk_modelo'
                        },
                        {
                            data: 'fk_categoria'
                        },
                        {
                            data: 'ativo'
                        }
                    ]
                });

            }
        });



    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/allVeiculos.blade.php ENDPATH**/ ?>