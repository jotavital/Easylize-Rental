

<?php $__env->startSection('title', 'Novo veículo'); ?>

<?php $__env->startSection('contentTitle', 'Novo veículo'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('novo-veiculo-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="container-fluid">

        <form action="  " method="POST" class="col-12">
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Placa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="placaInput" placeholder="Placa do veículo" required>
                </div>
                <div class="form-group col-sm-5">
                    <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="chassiInput" placeholder="Número do chassi" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="renavamInput" placeholder="Código Renavam" required>
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                    <select id="modeloSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                    <select id="categoriaVeiculoSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
            </div>
            <div class="form-row col-md-12 d-flex justify-content-center">
                <div class="input-group mb-3 col-md-6">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotoInput">
                        <label class="custom-file-label" for="fotoInput" aria-describedby="fotoInput">Foto (miniatura)</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="fotoInput">Enviar</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="button" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/addVeiculo.blade.php ENDPATH**/ ?>