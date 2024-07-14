<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Beranda</div>
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Pencarian Data</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                    Data Letter C
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('datainduk'); ?>">Input Data Letter C</a>
                        <a class="nav-link" href="<?= base_url('datainduk1'); ?>">Cari Data Letter C</a>
                    </nav>
                </div>
                <a class="nav-link" href="<?= base_url('bidangtanah') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-map"></i></div>
                    Data Bidang Tanah
                </a>
                <div class="sb-sidenav-menu-heading">Setting</div>
                <a class="nav-link" href="<?= base_url('akun'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Akun
                </a>
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <div class="sb-nav-link-icon"><i class="fa fa-sign-out-alt"></i></div>
                    Logout
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Masuk Sebagai :</div>
            Admin
        </div>
    </nav>
</div>