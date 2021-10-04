<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/js/app.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/fontawesome/all.min.css">
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <title>{{ isset($_COOKIE['nome_empresa']) && Route::current()->getName() != 'showRegister' ? $_COOKIE['nome_empresa'] : "Easylize Rental" }} - @yield('title')</title>
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
            <a href=" {{ route('admin.dashboard', ['tenant' => $_COOKIE['tenant_name'] ]) }} " class="brand-link">
                <img src="/img/default_profile_picture.png" alt="Company Profile Picture" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ $_COOKIE['nome_empresa'] }}</span>
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
                        <li class="nav-item @yield('frota-menu-open')">
                            <a href="#" class="nav-link @yield('frota-menu-active')">
                                <i class="nav-icon fas fa-car"></i>
                                <p>
                                    Frota
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('veiculo.create.show', ['tenant' => $_COOKIE['tenant_name']]) }}" class="nav-link @yield('novo-veiculo-menu-active')">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Novo veículo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('veiculo.all.show', ['tenant' => $_COOKIE['tenant_name']]) }}" class="nav-link @yield('todos-veiculos-menu-active')">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>Todos os veículos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('marcas.show', ['tenant' => $_COOKIE['tenant_name']]) }}" class="nav-link @yield('marcas-veiculos-menu-active')">
                                        <i class="fas fa-sitemap nav-icon"></i>
                                        <p>Marcas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('modelos.show', ['tenant' => $_COOKIE['tenant_name']]) }}" class="nav-link @yield('modelos-veiculos-menu-active')">
                                        <i class="fas fa-car-side nav-icon"></i>
                                        <p>Modelos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Ajustes
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
                            <h1 class="m-0">@yield('contentTitle')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard', ['tenant' => $_COOKIE['tenant_name']]) }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">@yield('contentTitle')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>

    </div>

    <footer class="main-footer">

        <div class="text-right">
            <strong>Copyright &copy; <?= date('Y') ?> <a href="https://github.com/jotavital" target="_blank">Easylize Rental Team</a>.</strong> All rights reserved.
        </div>
        
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/adminlte.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })();
        </script>

        @yield('script')
    </footer>

</body>

</html>