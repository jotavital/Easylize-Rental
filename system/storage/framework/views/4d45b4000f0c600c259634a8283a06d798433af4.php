

<?php $__env->startSection('title', 'Editar Modelo'); ?>

<?php $__env->startSection('contentTitle', 'Editar modelo de veículo'); ?>

<?php $__env->startSection('frota-menu-active', 'active'); ?>
<?php $__env->startSection('modelos-veiculos-menu-active', 'active'); ?>
<?php $__env->startSection('frota-menu-open', 'menu-open'); ?>

<?php $__env->startSection('content'); ?>

<?php

?>

<div class="content">
    <div class="container-fluid">

        <section class="mb-3">
            <form action=" <?php echo e(route('modelos.update', $modelo->id)); ?> " method="POST" enctype="multipart/form-data" class="col-12 needs-validation" id="formAddModelo" novalidate>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>                
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" value=" <?php echo e($modelo->nome); ?> " required>
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
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="motorModeloInput">Motor <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" value=" <?php echo e($modelo->motor); ?> " required>
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
                    <div class="form-group col-md-4">
                        <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                        <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                            <option data-placeholder="true"></option>
                        </select>
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
                <div class="form-row mb-3 col-12 d-flex justify-content-center">
                    <div class="mt-4 input-group col-md-4">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fotosInput" name="fotosInput[]" accept="image/*" multiple="multiple">
                            <label class="custom-file-label" for="fotosInput" aria-describedby="fotosInput">Fotos</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="col-8 card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Fotos do modelo</h5>
                            
                            <?php
                            print_r($modelo->fotos);
                            ?>
                            <div class="col-6">
                                <img class="w-100" src=" <?php echo e(route('images.show', 'modelo_img/8XDKXMqqIW47jCmv2pJiWnnOaB13OhjVz9W6QRxJ.jpg')); ?> " alt="imagem">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
                </div>
            </form>
        </section>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    var anoModelo = "<?php echo e($modelo->ano_modelo); ?>"; // ! esta variável é iniciada agora pois é usada no script de inicializar os selects
</script>
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>

    window.onload = function() {

        PopularSlimSelectsObj = new PopularSlimSelects();

        //! popular select marca
        var dataAjaxMarca = {
            "_token": "<?php echo e(csrf_token()); ?>"
        };
        PopularSlimSelectsObj.popularSlimSelectAjaxComValorSelecionado("<?php echo e(route('marcas.all.get')); ?>", "#marcaSelect", "id", "nome", dataAjaxMarca, "<?php echo e($modelo->marca_id); ?>");
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/modelo/editModelo.blade.php ENDPATH**/ ?>