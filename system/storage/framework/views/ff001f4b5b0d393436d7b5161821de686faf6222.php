

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-5 d-flex justify-content-center flex-column">
        <h1 class="d-flex justify-content-center">Login</h1>

        <form action="#" method="post">
            <div class="form-outline">
              <input type="text" id="usuario" class="form-control"/>
              <label class="form-label" for="usuario">Usuário</label>
            </div>
            <br>
            <div class="form-outline">
              <input type="password" id="senha" class="form-control"/>
              <label class="form-label" for="senha">Senha</label>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-rounded">Entrar</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/login.blade.php ENDPATH**/ ?>