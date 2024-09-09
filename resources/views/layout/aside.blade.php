<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-bg-dark sidebar-color-primary shadow">
    <div class="brand-container">
        <a href="javascript:;" class="brand-link">
            <img src="../../assets/AdminLTE4/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-80 shadow">
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>
        <a class="pushmenu mx-1" data-lte-toggle="sidebar-mini" href="javascript:;" role="button"><i class="fas fa-angle-double-left"></i></a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <!-- Sidebar Menu -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Principal</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="javascript:;" class="nav-link ">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Administrador
                            <i class="end fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('usuario.index')}}" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("empleado.index")}}" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Empleado</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("menu.index")}}" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('restaurante.index')}}" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Restaurante</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="javascript:;" class="nav-link ">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Widgets
                            <i class="end fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./pages/widgets/small-box.html" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Small Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/widgets/info-box.html" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>info Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/widgets/cards.html" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Cards</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="javascript:;" class="nav-link ">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Layout Options
                            <span class="badge bg-info float-end me-3">6</span>
                            <i class="end fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./pages/layout/fixed-sidebar.html" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="javascript:;" class="nav-link ">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Forms
                            <i class="end fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./pages/forms/general.html" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="javascript:;" class="nav-link ">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Tables
                            <i class="end fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./pages/tables/simple.html" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
