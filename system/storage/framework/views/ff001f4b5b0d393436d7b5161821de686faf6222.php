

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div class="container col-md-12 d-flex justify-content-center">
  <div class="col-md-5 d-flex justify-content-center flex-column">
    <h1 class="mb-4 d-flex justify-content-center">Login - Easylize Rental</h1>

    <form action="/auth" method="POST">
      <?php echo csrf_field(); ?>
      <div class="mb-3 form-outline">
        <input type="text" id="usuario" name="usuario" class="form-control" />
        <label class="form-label" for="usuario">Usuário</label>
      </div>
      <div class="mb-4 form-outline">
        <input type="password" id="senha" name="senha" class="form-control" />
        <label class="form-label" for="senha">Senha</label>
      </div>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/login.blade.php ENDPATH**/ ?>