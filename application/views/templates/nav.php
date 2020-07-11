    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">ULT Kemdikbud</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="<?= site_url('login/logout') ?>">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Layanan Masyarakat</div>
                            <div class="dropdown-divider"></div>
                            <a class="nav-link" href="<?= site_url("Permohonan_informasi") ?>">Permohonan Informasi</a>
                            <a class="nav-link" href="<?= site_url("Layanan_pengaduan") ?>">Pengaduan</a>
                            <a class="nav-link" href="<?= site_url("Saran") ?>">Saran</a>
                        </div>
                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">