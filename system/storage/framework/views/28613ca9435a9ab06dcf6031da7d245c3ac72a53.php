

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
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
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Frota
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Novo veículo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Todos os veículos</p>
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
</aside><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/layouts/navbar_sidebar.blade.php ENDPATH**/ ?>