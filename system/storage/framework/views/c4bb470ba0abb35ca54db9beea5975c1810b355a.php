<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

$message = Session::get('message');

// echo "logada? -> " . Auth::guard('company')->check();
// echo DB::getDefaultConnection();

// dd(Config::get('database.connections'));
?>



<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div class="content d-flex align-items-center" style="height:100vh;">
    <div class="container-fluid">

        <h1 class="mb-4 text-center">Login da Empresa</h1>
        <form action="<?php echo e(route('company.login.do')); ?>" class="col-12 form-floating" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <div class="mb-3">
                        <label for="login">Login (nome de usuário da empresa)</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Usuario" required>
                    </div>
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <div class="mb-4">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    </div>
                </div>
            </div>

            <?php if(session('message')): ?>
            <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => $message]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-rounded">Próximo</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Easylize-Rental\system\resources\views/login-empresa.blade.php ENDPATH**/ ?>