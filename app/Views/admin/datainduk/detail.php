<?= $this->extend('admin/layout/template') ?>

<?= $this->section('style'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.28/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.28/dist/sweetalert2.all.min.js"></script>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Identitas Letter C</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('datainduk1'); ?>">Cari Data Letter C</a></li>
                <li class="breadcrumb-item active">Detail Identitas Letter C</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Detail Identitas Letter C | <?= $data_letter->nama; ?>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Persil</th>
                                    <td>: <?= $data_letter->no_letter_c; ?></td>
                                </tr>
                                <tr>
                                    <th>Kohir</th>
                                    <td>: <?= $data_letter->no_pemilik_baru; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>: <?= $data_letter->nama; ?></td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>: <?= $data_letter->keterangan; ?></td>
                                </tr>
                                <tr>
                                    <th>File Scan</th>
                                    <td><img src="<?= base_url('asset-admin/img/' . $data_letter->filescan) ?>" alt="File Scan" class="preview-img mt-2" style="width: 500px;"></td>
                                </tr>
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
                            Data Bidang Tanah | <?= $data_letter->nama; ?>
                        </div>
                        <div class="card-body">
                            <?php if (session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session('success'); ?>
                                </div>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
                                Tambah
                            </button>
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kohir</th>
                                        <th>Kelas Desa</th>
                                        <th>Luas (M²)</th>
                                        <th>Klasifikasi</th>
                                        <th>Bukti</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($bidang_tanah as $tanah) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $tanah['persil']; ?></td>
                                            <td><?= $tanah['kelas_desa']; ?></td>
                                            <td><?= $tanah['luas']; ?></td>
                                            <td><?= $tanah['klasifikasi']; ?></td>
                                            <td><?= $tanah['bukti']; ?></td>
                                            <td>
                                                <a href="<?= base_url('detailtanah/detail_bidangc/' . $tanah['id_bidangC']) ?>" type="button" class="btn btn-secondary">
                                                    <i class="fa fa-eye"></i> Detail
                                                </a>
                                                <button type="button" class="btn btn-success" onclick="editBidangTanah(<?= $tanah['id_bidangC']; ?>)">Edit</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <a href="<?= base_url('datainduk1'); ?>" class="btn btn-secondary mb-4">Kembali</a>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Bidang Tanah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('datainduk1/tambahBidangTanah') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_dataC" value="<?= $data_letter->id_dataC; ?>">
                        <div class="mb-3">
                            <label for="persil" class="form-label">Kohir</label>
                            <input type="text" name="persil" id="persil" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="kelas_desa" class="form-label">Kelas Desa</label>
                            <input type="text" name="kelas_desa" id="kelas_desa" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="luas" class="form-label">Luas</label>
                            <input type="text" name="luas" id="luas" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="klasifikasi" class="form-label">Klasifikasi</label>
                            <input type="text" name="klasifikasi" id="klasifikasi" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="bukti" class="form-label">Bukti</label>
                            <input type="text" name="bukti" id="bukti" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Bidang Tanah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="<?= base_url('datainduk1/updateBidangTanah') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_bidangC" id="edit_id_bidangC">
                        <div class="mb-3">
                            <label for="edit_persil" class="form-label">Kohir</label>
                            <input type="text" name="persil" id="edit_persil" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_kelas_desa" class="form-label">Kelas Desa</label>
                            <input type="text" name="kelas_desa" id="edit_kelas_desa" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_luas" class="form-label">Luas</label>
                            <input type="text" name="luas" id="edit_luas" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_klasifikasi" class="form-label">Klasifikasi</label>
                            <input type="text" name="klasifikasi" id="edit_klasifikasi" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_bukti" class="form-label">Bukti</label>
                            <input type="text" name="bukti" id="edit_bukti" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>

    <?= $this->section('script'); ?>
    <script>
        const editBidangTanah = (id_bidangC) => {
            $.ajax({
                url: `<?= base_url('bidangtanah/get') ?>/${id_bidangC}`,
                method: "GET",
                success: (data) => {
                    $('#edit_id_bidangC').val(data.id_bidangC);
                    $('#edit_persil').val(data.persil);
                    $('#edit_kelas_desa').val(data.kelas_desa);
                    $('#edit_luas').val(data.luas);
                    $('#edit_klasifikasi').val(data.klasifikasi);
                    $('#edit_bukti').val(data.bukti);
                    $('#editModal').modal('show');
                },
                error: (err) => {
                    Swal.fire({
                        icon: "error",
                        title: "Gagal",
                        text: "Data Gagal Diambil",
                    });
                }
            });
        }
    </script>
    <?= $this->endSection(); ?>