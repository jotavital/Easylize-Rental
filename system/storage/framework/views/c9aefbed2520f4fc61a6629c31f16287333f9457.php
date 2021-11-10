<?php

$dataAtivarInativar = json_encode(
    array(
        "_token" => csrf_token(),
        "idRegistro" => $id
    )
);

?>

<div class="d-flex justify-content-center">
    <form class="no-padding-form" id="form-ativar-inativar-<?php echo e($id); ?>">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="<?php echo e($id); ?>" <?php echo e($checked); ?> onclick="ativarInativarRegistro('<?php echo e($rotaAtivarInativar); ?>', '<?php echo e($dataAtivarInativar); ?>')">
            <label class="custom-control-label" for="<?php echo e($id); ?>"></label>
        </div>
    </form>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/components/switch-ativar-inativar.blade.php ENDPATH**/ ?>