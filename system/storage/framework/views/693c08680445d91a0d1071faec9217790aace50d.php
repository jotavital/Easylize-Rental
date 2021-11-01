

<?php $__env->startSection('title', 'Editar Marca'); ?>

<?php $__env->startSection('contentTitle', 'Editar marca de veículo'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('marcas-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<div class="content">

    <div class="container-fluid">
        <form action=" <?php echo e(route('marcas.update', $marca->id)); ?> " method="POST" class="col-12 needs-validation" novalidate>
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="nomeMarcaInput">Nome da marca <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="nomeMarcaInput" id="nomeMarcaInput" placeholder="Marca" value="<?php echo e($marca->nome); ?>" required>
                    <?php if (isset($component)) { $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CampoObrigatorio::class, []); ?>
<?php $component->withName('campo-obrigatorio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad)): ?>
<?php $component = $__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad; ?>
<?php unset($__componentOriginald24a2f68bee7330b51a82cfc2027287566d1ffad); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/ativar-inativar-registro.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    var PopularSlimSelectsObj = new PopularSlimSelects();

    var dataAjax = {
        "_token": "<?php echo e(csrf_token()); ?>"
    };
    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("<?php echo e(route('marcas.all.get')); ?>", "#marcaSelect", "id", "nome", dataAjax, "<?php echo e($marca->marca_id); ?>");

    var dataAjaxModelo = {
        "_token": "<?php echo e(csrf_token()); ?>",
        "idMarca": "<?php echo e($marca->marca_id); ?>"
    };
    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("<?php echo e(route('modelos.bymarca.get')); ?>", "#modeloSelect", "id", "nome", dataAjaxModelo, "<?php echo e($marca->modelo_id); ?>");

    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("<?php echo e(route('categorias.veiculos.get')); ?>", "#categoriaVeiculoSelect", "id", "nome", dataAjax, "<?php echo e($marca->categoria_id); ?>");

    $("#marcaSelect").on('change', function() {
        if (marcaSelect.selected() != '') {
            $('#modeloSelect').empty();
            modeloSelect.enable();

            PopularSlimSelectsObj.popularSlimSelectBasico("<?php echo e(route('modelos.bymarca.get')); ?>", '#modeloSelect', 'id', 'nome', dataAjaxModelo);
        } else {
            $('#modeloSelect').empty();
            modeloSelect.disable();
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/marca/editMarca.blade.php ENDPATH**/ ?>