<div>

    <?php if($rotaCreate): ?>
    <form action=" <?php echo e(route('alugueis.store')); ?> " method="POST" class="col-12 needs-validation" enctype='multipart/form-data' onsubmit="sanitizarCampos();" novalidate>
        <?php echo csrf_field(); ?>
        <div class="form-row col-12 d-flex justify-content-center">
            <div class="form-group col-sm-6 col-md-4 col-lg-3">
                <label for="dataHoraSaidaInput">Data e Hora de Saída <span class="text-danger">*</span></label>
                <input type="datetime-local" class="form-control form-control-sm" id="dataHoraSaidaInput" name="dataHoraSaidaInput" required>
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
            <div class="form-group col-sm-6 col-md-4 col-lg-5">
                <label for="dataHoraPrevistaDevolucaoInput">Previsão Data e Hora de Devolução <span class="text-danger">*</span></label>
                <input type="datetime-local" class="form-control form-control-sm" id="dataHoraPrevistaDevolucaoInput" name="dataHoraPrevistaDevolucaoInput" required>
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
            <div wire:ignore class="form-group col-sm-6 col-md-3 col-lg-3">
                <label for="valorInput">Valor <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" id="valorInput" name="valorInput" placeholder="Valor do aluguel" required>
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
            <div wire:ignore class="form-group col-sm-6 col-md-4 col-lg-4">
                <label for="clienteSelect">Cliente <span class="text-danger">*</span></label>
                <select id="clienteSelect" name="clienteSelect" class="form-control form-control-sm validate-select" required>
                    <option value="" selected>Selecione</option>
                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($cliente->id); ?>"> <?php echo e($cliente->nome); ?> - <?php echo e($cliente->cpf); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <div class="form-group col-sm-6 col-md-3 col-lg-4">
                <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                <select wire:model="modeloSelecionado" id="modeloSelect" name="modeloSelect" class="form-control form-control-sm validate-select" required>
                    <option value="" selected>Selecione</option>
                    <?php $__currentLoopData = $modelos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($modelo->id); ?>"> <?php echo e($modelo->nome); ?> <?php echo e($modelo->motor); ?> - <?php echo e($modelo->ano_modelo); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <div class="form-group col-sm-6 col-md-4 col-lg-3">
                <label for="veiculoSelect">Veículo <span class="text-danger">*</span></label>
                <select id="veiculoSelect" name="veiculoSelect" class="form-control form-control-sm validate-select" disabled required>
                    <option value="" selected>Selecione</option>
                    <?php if($veiculos): ?>
                    <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($veiculo->id); ?>"> <?php echo e($veiculo->modelo->nome); ?> - <?php echo e($veiculo->placa); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
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
        <div class="mb-2 form-row col-12 d-flex justify-content-center">
            <div class="form-group col-sm-12 col-md-11 col-lg-6">
                <label for="observacaoInput">Observação <span class="text-danger"></span></label>
                <textarea class="form-control" name="observacaoInput" id="observacaoInput" cols="30" rows="2"></textarea>
            </div>
            <div class="pt-4 form-group col-lg-5 col-md-5 col-sm-5">
                <div class="col d-flex justify-content-center">
                    <label for="pagoInput">Está pago?</label>
                </div>
                <div class="col d-flex justify-content-center">
                    <label class="switch switch-md">
                        <input type="checkbox" name="pagoInput" id="pagoInput">
                        <span class="slider slider-md round"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
        </div>
    </form>

    <?php elseif($rotaEdit): ?>

    <?php endif; ?>

    <script>
        function sanitizarCampos() {
            var x = $('#valorInput').val();
            x = x.replace(/[.]/gim, "");
            x = x.replace(/[,]/gim, ".");
            document.getElementById('valorInput').value = x;
        }
    </script>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/alugueis/form-create-edit-aluguel.blade.php ENDPATH**/ ?>