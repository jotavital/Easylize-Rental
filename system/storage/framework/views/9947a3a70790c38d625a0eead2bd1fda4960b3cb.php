

<?php $__env->startSection('title', 'Novo veículo'); ?>

<?php $__env->startSection('contentTitle', 'Novo veículo'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('novo-veiculo-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">

        <form action="  " method="POST" class="col-12" enctype='multipart/form-data'>
            <?php echo csrf_field(); ?>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Placa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="placaInput" name="placaInput" placeholder="Placa do veículo" maxlength="7" required>
                </div>
                <div class="form-group col-sm-5">
                    <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="chassiInput" name="chassiInput" placeholder="Número do chassi" maxlength="17" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="renavamInput" name="renavamInput" placeholder="Código Renavam" maxlength="11" required>
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect" name="marcaSelect">
                        <option data-placeholder="true"></option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                    <select id="modeloSelect" name="modeloSelect" disabled>
                        <option data-placeholder="true"></option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                    <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect">
                        <option data-placeholder="true"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="button" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    var selectPlaceholder = "Selecione";

    var marcaSelect = new SlimSelect({
        select: '#marcaSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    var modeloSelect = new SlimSelect({
        select: '#modeloSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    var categoriaVeiculoSelect = new SlimSelect({
        select: '#categoriaVeiculoSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    window.onload = function() {

        $.ajax({
            url: "<?php echo e(route('marcas.all.get', ['tenant' => $_COOKIE['tenant_name']])); ?>",
            type: "post",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>"
            },
            dataType: "json",
            success: function(marcas) {

                marcas.forEach(element => {
                    $('#marcaSelect').append('<option value="' + element.id + '">' + element.nome + '</option>');
                });

            }
        });


        $("#marcaSelect").on('change', function() {

            if (marcaSelect.selected() != '') {
                $('#modeloSelect').empty();
                modeloSelect.enable();

                $.ajax({
                    url: "<?php echo e(route('modelos.bymarca.get', ['tenant' => $_COOKIE['tenant_name']])); ?>",
                    type: "post",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        "idMarca": marcaSelect.selected()
                    },
                    dataType: "json",
                    success: function(modelos) {

                        if (modelos.length != 0) {
                            console.log(modelos);

                            for (var i in modelos) {
                                $('#modeloSelect').append('<option value="' + modelos[i].id + '">' + modelos[i].nome + '</option>');
                            }

                        }

                    }
                });
            } else {
                $('#modeloSelect').empty();
                modeloSelect.disable();
            }
        });

    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/addVeiculo.blade.php ENDPATH**/ ?>