<nav class="navbar navbar-expand d-flex flex-column align-items-start bg-primary navbar-dark" id="sidebar">
    <div class="container-fluid d-flex flex-column">
        <a class="navbar-brand" href="#"><h3>Easylize Rental</h3></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav d-flex flex-column">
                <li>
                    <form class="m-0 p-0" action="<?php echo e(route('admin.logout.do', ['tenant' => $_COOKIE['tenant_name']])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/layouts/navbar_sidebar.blade.php ENDPATH**/ ?>