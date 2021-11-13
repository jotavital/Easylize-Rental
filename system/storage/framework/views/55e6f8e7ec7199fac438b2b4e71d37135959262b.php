<div>
    <div class="d-flex justify-content-center">
        <div class="mr-2">
            <form action="<?php echo e($rotaEditar); ?>" method="GET" class="no-padding-form">
                <button type="submit" class="iconButton">
                    <i class="fas fa-edit text-primary table-action-icon"></i>
                </button>
            </form>
        </div>
        <div>
            <i data-toggle="modal" data-target="#exampleModal" class="fas fa-trash-alt text-danger table-action-icon"></i>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/livewire/acoes-tabela.blade.php ENDPATH**/ ?>