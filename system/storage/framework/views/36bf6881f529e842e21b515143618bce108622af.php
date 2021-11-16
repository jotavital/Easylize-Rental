<div class="alerts col-12 d-flex justify-content-center">
    <div <?php echo e($attributes->merge(['class' => 'alert alert-'.$type])); ?> role="alert">
        <?php if($title): ?>
        <h6 class="m-0 text-center py-1">
            <strong><?php echo e($title); ?></strong>
        </h6>
        <?php endif; ?>
        <p class="m-0 text-center">
            <?php echo e($message); ?>

        </p>
    </div>
</div><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/components/alert.blade.php ENDPATH**/ ?>