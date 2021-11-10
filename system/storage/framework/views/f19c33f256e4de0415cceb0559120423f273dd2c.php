<div class="d-flex justify-content-center">
    <form class="no-padding-form">
        <div class="custom-control custom-switch">
            <input type="checkbox" id="ativar-inativar-<?php echo e($model->id); ?>" class="custom-control-input" wire:click="ativarInativar" <?php echo e($checked); ?> >
            <label class="custom-control-label" for="ativar-inativar-<?php echo e($model->id); ?>"></label>
        </div>
    </form>
</div>
<?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/switch-ativar-inativar.blade.php ENDPATH**/ ?>