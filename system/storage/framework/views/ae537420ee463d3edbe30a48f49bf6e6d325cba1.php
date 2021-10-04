

<?php $__env->startSection('title', 'Modelos'); ?>

<?php $__env->startSection('contentTitle', 'Modelos de veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('modelos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">

        <div class="alerts col-12 d-flex justify-content-center">
            <?php if(session('error')): ?>
            <div class="alert alert-danger d-flex align-items-center col-5" role="alert">
                <div>
                    <small>
                        <p class="p-0 m-0" style="text-align:center;">
                            <?php echo e(session('error')); ?>

                        </p>
                    </small>
                </div>
            </div>
            <?php elseif(session('success')): ?>
            <div class="alert alert-success d-flex align-items-center col-5" role="alert">
                <div>
                    <small>
                        <p class="p-0 m-0" style="text-align:center;">
                            <?php echo e(session('success')); ?>

                        </p>
                    </small>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <form action=" <?php echo e(route('modelos.store', ['tenant' => $_COOKIE['tenant_name']])); ?> " method="POST" class="col-12 needs-validation" id="formAddModelo" novalidate>
            <?php echo csrf_field(); ?>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" required>
                    <div class="invalid-feedback">
                        Campo obrigatório
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="anoModeloSelect">Ano do modelo <span class="text-danger">*</span></label>
                    <select id="anoModeloSelect" name="anoModeloSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>

                        <?php
                        foreach (range(date('Y') + 3, 1900) as $year) {
                        ?>

                            <option value="<?= $year ?>"><?= $year ?></option>

                        <?php
                        }
                        ?>

                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório
                    </div>
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <label for="motorModeloInput">Motor <span class="text-danger">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" required>
                    <div class="invalid-feedback">
                        Campo obrigatório
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório
                    </div>
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="mt-4 input-group col-md-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotosInput" name="fotosInput" accept="image/*" multiple="multiple">
                        <label class="custom-file-label" for="fotosInput" aria-describedby="fotosInput">Fotos</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
            </div>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    var marcaSelect = new SlimSelect({
        select: '#marcaSelect',
        placeholder: "Selecione",
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    var anoModeloSelect = new SlimSelect({
        select: '#anoModeloSelect',
        placeholder: "Selecione",
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar ano',
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
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/modelosVeiculos.blade.php ENDPATH**/ ?>