<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/fontawesome/all.min.css">
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/r-2.2.9/sl-1.3.3/datatables.min.css" />

    <title><?php echo e(isset($_COOKIE['nome_empresa']) && Route::current()->getName() != 'companies.create' ? $_COOKIE['nome_empresa'] : "Easylize Rental"); ?> - <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" data-enable-remember="true" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        Perfil
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href=" <?php echo e(route('admin.dashboard', ['tenant' => $_COOKIE['tenant_name'] ])); ?> " class="brand-link">
                <img src="/img/default_profile_picture.png" alt="Company Profile Picture" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?php echo e($_COOKIE['nome_empresa']); ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar nav-collapse-hide-child">

                <!-- SidebarSearch Form -->
                <div class="mt-3 form-inline">
                    <div class="input-group" data-widget="sidebar-search" data-not-found-text="Nada encontrado.">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-animation-speed="500" data-accordion="false">
                        <li class="nav-item <?php echo $__env->yieldContent('frota-menu-open'); ?>">
                            <a href="#" class="nav-link <?php echo $__env->yieldContent('frota-menu-active'); ?>">
                                <i class="nav-icon fas fa-car"></i>
                                <p>
                                    Frota
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('veiculos.create')); ?>" class="nav-link <?php echo $__env->yieldContent('novo-veiculo-menu-active'); ?>">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Novo ve??culo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('veiculos.index')); ?>" class="nav-link <?php echo $__env->yieldContent('todos-veiculos-menu-active'); ?>">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>Todos os ve??culos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('marcas.index')); ?>" class="nav-link <?php echo $__env->yieldContent('marcas-veiculos-menu-active'); ?>">
                                        <i class="fas fa-sitemap nav-icon"></i>
                                        <p>Marcas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('modelos.index')); ?>" class="nav-link <?php echo $__env->yieldContent('modelos-veiculos-menu-active'); ?>">
                                        <i class="fas fa-car-side nav-icon"></i>
                                        <p>Modelos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo e(route('configuracoes.index')); ?> " class="nav-link <?php echo $__env->yieldContent('configuracoes-menu-active'); ?>">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Configura????es
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo e(route('admin.logout')); ?> " class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $__env->yieldContent('contentTitle'); ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active"><?php echo $__env->yieldContent('contentTitle'); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>

    <footer class="main-footer">

        <div class="text-right">
            <strong>Copyright &copy; <?= date('Y') ?> <a href="https://github.com/jotavital" target="_blank">Easylize Rental Team</a>.</strong> All rights reserved.
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
        <script src="/js/adminlte.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/r-2.2.9/sl-1.3.3/datatables.min.js"></script>

        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            var selects = document.querySelectorAll('.validate-select');

            // ! Example starter JavaScript for disabling form submissions if there are invalid fields

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation');

            (function() {
                'use strict'

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()

                                selects.forEach(select => {

                                    if (!select.disabled) {
                                        if (select.value == '') {
                                            select.classList.remove("valid-select");
                                            select.classList.add("invalid-select");
                                        } else {
                                            select.classList.remove("invalid-select");
                                            select.classList.add("valid-select");
                                        }
                                    }
                                });

                            }

                            form.classList.add('was-validated')
                        }, false)
                    })

            })();

            selects.forEach(select => {
                select.addEventListener('change', function() {

                    forms.forEach(form => {
                        if (form.classList.contains('was-validated') && !select.classList.contains('is-invalid')) {
                            select.classList.remove("invalid-select");
                            select.classList.add("valid-select");
                        }
                        
                        if (select.value == '') {
                            select.classList.remove("valid-select");
                            select.classList.add("invalid-select");
                        }else{
                            select.classList.remove("invalid-select");
                            select.classList.add("valid-select");
                        }
                    });

                })
            });
        </script>

        <?php echo $__env->yieldContent('script'); ?>
    </footer>

</body>

</html><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/layouts/adminLayout.blade.php ENDPATH**/ ?>