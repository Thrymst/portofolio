<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        // Ambil segmen URL untuk menentukan menu aktif
        $active_admin_menu = $this->uri->segment(2); // 'Dashboard_admin', 'Data_barang', atau 'Invoice'
        ?>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/Dashboard_admin') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php echo $active_admin_menu == 'Dashboard_admin' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/Dashboard_admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Data Barang -->
            <li class="nav-item <?php echo $active_admin_menu == 'Data_barang' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Barang</span></a>
            </li>
            
            <!-- Nav Item - Invoices -->
            <li class="nav-item <?php echo $active_admin_menu == 'Invoice' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/Invoice') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoices</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <ul class="nav navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) { ?>
                                <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                <li class="ml-3"><?php echo anchor('Auth/logout', 'Logout') ?></li>
                            <?php } else { ?>
                                <li><?php echo anchor('Auth/login', 'Login'); ?></li>
                            <?php } ?>
                        </ul>

                    </ul>

                </nav>
                <!-- End of Topbar -->