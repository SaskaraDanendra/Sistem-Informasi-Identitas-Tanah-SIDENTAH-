<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang di SIDENTAH.</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <!-- Marquee Section -->
            <div class="marquee-container">
                <div class="marquee">
                    Selamat datang di dashboard S I D E N T A H. | Program Inovasi Kampus Sistem Informasi Pertanahan | PTMGRMD Desa Mangunarga 2024
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-6">
                        <div class="card-body">Data Letter C :</div>
                        <div class="card-body-value"><?= $totalC; ?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('datainduk1') ?>">Lihat</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-6">
                        <div class="card-body">Data Bidang Tanah :</div>
                        <div class="card-body-value"><?= $totalBidang; ?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('bidangtanah') ?>">Lihat</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-6">
                        <div class="card-body">SPPT :</div>
                        <div class="card-body-value"><?= $totalSppt; ?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('datainduk1') ?>">Lihat</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-6">
                        <div class="card-body">Luas Bidang :</div>
                        <div class="card-body-value"><?= $totalLuas; ?><h3>Meter²</h3>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('bidangtanah') ?>">Lihat</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .marquee-container {
            background-color: #198754;
            color: #fff;
            padding: 10px 0;
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
        }

        .marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
            font-size: 1.2rem;
            /* Membesarkan ukuran font marquee */
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .card {
            height: 200px;
            /* Membesarkan tinggi kartu */
        }

        .card-body {
            font-size: 1.5rem;
            /* Membesarkan ukuran font pada card body */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50%;
            /* Membuat teks vertikal tengah */
        }

        .card-body-value {
            font-size: 3rem;
            /* Membesarkan ukuran font untuk nilai total */
            text-align: center;
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-footer {
            font-size: 1.2rem;
            /* Membesarkan ukuran font pada card footer */
        }
    </style>

    <?= $this->endSection(); ?>