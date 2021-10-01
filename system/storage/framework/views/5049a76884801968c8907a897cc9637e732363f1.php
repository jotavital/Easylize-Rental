

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div class="container col-12 d-flex justify-content-center align-items-center">

    <div class="formDiv col-sm-5 col-lg-3">
        <h1 class="mb-4 text-center">Login - <?php echo e(isset($_COOKIE['nome_empresa']) ? $_COOKIE['nome_empresa'] : "Easylize Rental"); ?> </h1>
        <form action="<?php echo e(route('admin.login.do', ['tenant' => $_COOKIE['tenant_name']])); ?>" class="form-floating" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="login">Usuário</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
            </div>
            <div class="mb-4">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
            </div>

            <?php if(session('message')): ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <div>
                    <small>
                        <p class="p-0 m-0" style="text-align:center;">
                            <?php echo e(session('message')); ?>

                        </p>
                    </small>
                </div>
            </div>
            <?php endif; ?>
            <!-- <div class="mb-3 d-flex justify-content-center">
              <small>Ainda não tem um login? <a href="register">Cadastre-se aqui.</a></small>
            </div> -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-rounded">Entrar</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/admin/login-admin.blade.php ENDPATH**/ ?>