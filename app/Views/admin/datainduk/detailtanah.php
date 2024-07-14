<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Informasi Bidang Tanah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('datainduk1'); ?>">Cari Data Letter C</a></li>
                <li class="breadcrumb-item active">Detail Identitas Letter C</li>
                <li class="breadcrumb-item active">Identitas Bidang Tanah</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Detail Identitas Bidang Tanah |
                        </div>
                        <?php if ($tanah) : ?>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Nama</th>
                                    <td>: <?= $dataLetter->nama; ?></td>
                                </tr>
                                <tr>
                                    <th>Persil</th>
                                    <td>: <?= $dataLetter->no_letter_c; ?></td>
                                </tr>
                                <tr>
                                    <th>Kohir</th>
                                    <td>: <?= $tanah->persil; ?></td>
                                </tr>
                                <tr>
                                    <th>Kelas Desa</th>
                                    <td>: <?= $tanah->kelas_desa; ?></td>
                                </tr>
                                <tr>
                                    <th>Luas (M²)</th>
                                    <td>: <?= $tanah->luas; ?></td>
                                </tr>
                                <tr>
                                    <th>Klasifikasi</th>
                                    <td>: <?= $tanah->klasifikasi; ?></td>
                                </tr>
                                <tr>
                                    <th>Bukti</th>
                                    <td>: <?= $tanah->bukti; ?></td>
                                </tr>
                            </table>
                        <?php else : ?>
                            <p>Data tanah tidak ditemukan.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            SPPT Bidang Tanah |
                        </div>
                        <div class="card-body">
                            <?php if (session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session('success'); ?>
                                </div>
                            <?php elseif (session('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session('error'); ?>
                                </div>
                            <?php elseif (session('warning')) : ?>
                                <div class="alert alert-warning" role="alert">
                                    <?= session('warning'); ?>
                                </div>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahSpptModal">
                                Tambah
                            </button>
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SPPT</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($SPPT as $sppt) : ?>
                                        <tr>
                                            <td><strong><?= $sppt->sppt; ?></strong></td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSpptModal<?= $sppt->id_sppt; ?>">Edit</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Detail Identitas Letak Bidang Tanah |
                        </div>
                        <div class="card-body">
                            <?php if (session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session('success'); ?>
                                </div>
                            <?php elseif (session('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session('error'); ?>
                                </div>
                            <?php elseif (session('warning')) : ?>
                                <div class="alert alert-warning" role="alert">
                                    <?= session('warning'); ?>
                                </div>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahLetakModal">
                                Tambah
                            </button>
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Dusun</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Alamat</th>
                                        <th>Blok Tanah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($letak_bidang as $letakbidang) : ?>
                                        <tr>
                                            <td><?= $letakbidang['dusun']; ?></td>
                                            <td><?= $letakbidang['rt']; ?></td>
                                            <td><?= $letakbidang['rw']; ?></td>
                                            <td><?= $letakbidang['alamat']; ?></td>
                                            <td><?= $letakbidang['blok_tanah']; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editLetakModal<?= $letakbidang['id_letak']; ?>">Edit</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Detail Identitas Batas Bidang Tanah |
                        </div>
                        <div class="card-body">
                            <?php if (session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session('success'); ?>
                                </div>
                            <?php elseif (session('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session('error'); ?>
                                </div>
                            <?php elseif (session('warning')) : ?>
                                <div class="alert alert-warning" role="alert">
                                    <?= session('warning'); ?>
                                </div>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahBatasModal">
                                Tambah
                            </button>
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Utara</th>
                                        <th>Timur</th>
                                        <th>Selatan</th>
                                        <th>Barat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($batas_bidang)) : ?>
                                        <?php foreach ($batas_bidang as $batas) : ?>
                                            <tr>
                                                <td><?= $batas['utara']; ?></td>
                                                <td><?= $batas['timur']; ?></td>
                                                <td><?= $batas['selatan']; ?></td>
                                                <td><?= $batas['barat']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editBatasModal<?= $batas['id_batas']; ?>">Edit</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5">Data batas bidang tidak ditemukan.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Detail Identitas Riwayat Bidang Tanah |
                        </div>
                        <div class="card-body">
                            <?php if (session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session('success'); ?>
                                </div>
                            <?php elseif (session('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session('error'); ?>
                                </div>
                            <?php elseif (session('warning')) : ?>
                                <div class="alert alert-warning" role="alert">
                                    <?= session('warning'); ?>
                                </div>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahRiwayatModal">
                                Tambah
                            </button>
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Riwayat Bidang Tanah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php if (!empty($riwayat_bidang)) : ?>
                                        <?php foreach ($riwayat_bidang as $riwayat) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $riwayat['riwayat']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editRiwayatModal<?= $riwayat['id_riwayat']; ?>">Edit</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5">Data riwayat bidang tidak ditemukan.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal Tambah SPPT -->
    <div class="modal fade" id="tambahSpptModal" tabindex="-1" aria-labelledby="tambahSpptModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="tambahSpptModalLabel">Tambah SPPT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('sppt/tambah') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_bidangC" value="<?= is_array($tanah) ? $tanah['id_bidangC'] : $tanah->id_bidangC; ?>">
                        <div class="mb-3">
                            <label for="sppt" class="form-label">SPPT</label>
                            <input type="text" class="form-control" id="sppt" name="sppt" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit SPPT -->
    <?php foreach ($SPPT as $sppt) : ?>
        <div class="modal fade" id="editSpptModal<?= $sppt->id_sppt; ?>" tabindex="-1" aria-labelledby="editSpptModalLabel<?= $sppt->id_sppt; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="editSpptModalLabel<?= $sppt->id_sppt; ?>">Edit SPPT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('sppt/update') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_sppt" value="<?= $sppt->id_sppt; ?>">
                            <div class="mb-3">
                                <label for="sppt" class="form-label">SPPT</label>
                                <input type="text" class="form-control" id="sppt" name="sppt" value="<?= $sppt->sppt; ?>" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal Tambah Letak Bidang -->
    <div class="modal fade" id="tambahLetakModal" tabindex="-1" aria-labelledby="tambahLetakModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="tambahLetakModalLabel">Tambah Letak Bidang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('letak_bidang/tambah') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_bidangC" value="<?= is_array($tanah) ? $tanah['id_bidangC'] : $tanah->id_bidangC; ?>">
                        <div class="mb-3">
                            <label for="dusun" class="form-label">Dusun</label>
                            <input type="text" class="form-control" id="dusun" name="dusun" required>
                        </div>
                        <div class="mb-3">
                            <label for="rt" class="form-label">RT</label>
                            <input type="text" class="form-control" id="rt" name="rt" required>
                        </div>
                        <div class="mb-3">
                            <label for="rw" class="form-label">RW</label>
                            <input type="text" class="form-control" id="rw" name="rw" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="blok_tanah" class="form-label">Blok Tanah</label>
                            <input type="text" class="form-control" id="blok_tanah" name="blok_tanah" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Letak Bidang -->
    <?php foreach ($letak_bidang as $letakbidang) : ?>
        <div class="modal fade" id="editLetakModal<?= $letakbidang['id_letak']; ?>" tabindex="-1" aria-labelledby="editLetakModalLabel<?= $letakbidang['id_letak']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="editLetakModalLabel<?= $letakbidang['id_letak']; ?>">Edit Letak Bidang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('letak_bidang/update') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_letak" value="<?= $letakbidang['id_letak']; ?>">
                            <div class="mb-3">
                                <label for="dusun" class="form-label">Dusun</label>
                                <input type="text" class="form-control" id="dusun" name="dusun" value="<?= $letakbidang['dusun']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="rt" class="form-label">RT</label>
                                <input type="text" class="form-control" id="rt" name="rt" value="<?= $letakbidang['rt']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="rw" class="form-label">RW</label>
                                <input type="text" class="form-control" id="rw" name="rw" value="<?= $letakbidang['rw']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $letakbidang['alamat']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="blok_tanah" class="form-label">Blok Tanah</label>
                                <input type="text" class="form-control" id="blok_tanah" name="blok_tanah" value="<?= $letakbidang['blok_tanah']; ?>" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal Tambah Batas Bidang -->
    <div class="modal fade" id="tambahBatasModal" tabindex="-1" aria-labelledby="tambahBatasModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="tambahBatasModalLabel">Tambah Batas Bidang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/detailtanah/tambahBatasBidang') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_bidangC" value="<?= $tanah->id_bidangC; ?>">
                        <div class="mb-3">
                            <label for="utara" class="form-label">Utara</label>
                            <input type="text" class="form-control" id="utara" name="utara" required>
                        </div>
                        <div class="mb-3">
                            <label for="timur" class="form-label">Timur</label>
                            <input type="text" class="form-control" id="timur" name="timur" required>
                        </div>
                        <div class="mb-3">
                            <label for="selatan" class="form-label">Selatan</label>
                            <input type="text" class="form-control" id="selatan" name="selatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="barat" class="form-label">Barat</label>
                            <input type="text" class="form-control" id="barat" name="barat" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Batas Bidang -->
    <?php foreach ($batas_bidang as $batas) : ?>
        <div class="modal fade" id="editBatasModal<?= $batas['id_batas']; ?>" tabindex="-1" aria-labelledby="editBatasModalLabel<?= $batas['id_batas']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="editBatasModalLabel<?= $batas['id_batas']; ?>">Edit Batas Bidang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('batas_bidang/update') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_batas" value="<?= $batas['id_batas']; ?>">
                            <div class="mb-3">
                                <label for="utara" class="form-label">Utara</label>
                                <input type="text" class="form-control" id="utara" name="utara" value="<?= $batas['utara']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="timur" class="form-label">Timur</label>
                                <input type="text" class="form-control" id="timur" name="timur" value="<?= $batas['timur']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="selatan" class="form-label">Selatan</label>
                                <input type="text" class="form-control" id="selatan" name="selatan" value="<?= $batas['selatan']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="barat" class="form-label">Barat</label>
                                <input type="text" class="form-control" id="barat" name="barat" value="<?= $batas['barat']; ?>" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal Tambah Riwayat Bidang Tanah -->
    <div class="modal fade" id="tambahRiwayatModal" tabindex="-1" aria-labelledby="tambahRiwayatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="tambahRiwayatModalLabel">Tambah Riwayat Bidang Tanah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/detailtanah/tambahRiwayatBidang') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_bidangC" value="<?= is_array($tanah) ? $tanah['id_bidangC'] : $tanah->id_bidangC; ?>">
                        <div class="mb-3">
                            <label for="riwayat" class="form-label">Riwayat</label>
                            <textarea class="form-control" id="riwayat" name="riwayat" rows="3" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Riwayat Bidang Tanah -->
    <?php foreach ($riwayat_bidang as $riwayat) : ?>
        <div class="modal fade" id="editRiwayatModal<?= $riwayat['id_riwayat']; ?>" tabindex="-1" aria-labelledby="editRiwayatModalLabel<?= $riwayat['id_riwayat']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="editRiwayatModalLabel<?= $riwayat['id_riwayat']; ?>">Edit Riwayat Bidang Tanah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/detailtanah/updateRiwayatBidang') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_riwayat" value="<?= $riwayat['id_riwayat']; ?>">
                            <div class="mb-3">
                                <label for="riwayat" class="form-label">Riwayat</label>
                                <textarea class="form-control" id="riwayat" name="riwayat" rows="3" required><?= $riwayat['riwayat']; ?></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="container">
        <a href="<?= base_url('datainduk1'); ?>" class="btn btn-secondary mb-4">Kembali</a>
    </div>

    <?= $this->endSection(); ?>