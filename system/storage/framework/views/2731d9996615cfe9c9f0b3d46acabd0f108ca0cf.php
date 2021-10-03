

<?php $__env->startSection('title', 'Marcas'); ?>

<?php $__env->startSection('contentTitle', 'Marcas de veículos'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('marcas-veiculos-menu-active', 'active'); ?>
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

        <form action=" <?php echo e(route('marcas.store', ['tenant' => $_COOKIE['tenant_name']])); ?> " method="POST" class="col-12">
            <?php echo csrf_field(); ?>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="nomeMarcaInput">Nome da marca <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="nomeMarcaInput" id="nomeMarcaInput" placeholder="Marca" required>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
            </div>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/veiculo/marcasVeiculos.blade.php ENDPATH**/ ?>