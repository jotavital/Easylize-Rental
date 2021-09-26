<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">

    <title><?php echo e(isset($_COOKIE['nome_empresa']) ? $_COOKIE['nome_empresa'] : "Easylize Rental"); ?> - <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        <small style="float:right;">
            <p>Powered by Easylize Rental team - 2021. Todos os direitos reservados©</p>
        </small>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </footer>
</body>

</html><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/layouts/main.blade.php ENDPATH**/ ?>