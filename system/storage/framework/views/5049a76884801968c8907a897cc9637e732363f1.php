

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-8 d-flex justify-content-center flex-column">

        <h1 class="mb-4 d-flex justify-content-center">Login - <?php echo e(isset($_COOKIE['nome_empresa']) ? $_COOKIE['nome_empresa'] : "Easylize Rental"); ?> </h1>

        <div class="col-md-12 d-flex justify-content-center">
            <form action="<?php echo e(route('admin.login.do', ['tenant' => $_COOKIE['tenant_name']])); ?>" class="col-md-6 form-floating" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                    <label for="login">Usuário</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    <label for="senha">Senha</label>
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/admin/login-admin.blade.php ENDPATH**/ ?>