<div class="alerts col-12 d-flex justify-content-center">
    <?php if(session('error')): ?>
    <div class="alert alert-danger d-flex align-items-center col-5" role="alert">
        <div class="col-12">
            <small>
                <p class="p-0 m-0 col-12" style="text-align:center;">
                    <?php echo e(session('error')); ?>

                </p>
            </small>
        </div>
    </div>
    <?php elseif(session('success')): ?>
    <div class="alert alert-success d-flex align-items-center col-5" role="alert">
        <div class="col-12">
            <small>
                <p class="p-0 m-0 col-12" style="text-align:center;">
                    <?php echo e(session('success')); ?>

                </p>
            </small>
        </div>
    </div>
    <?php endif; ?>
</div><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/layouts/alertLayout.blade.php ENDPATH**/ ?>