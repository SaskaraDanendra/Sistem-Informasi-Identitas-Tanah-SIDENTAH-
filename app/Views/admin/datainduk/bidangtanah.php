<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Bidang Tanah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Bidang Tanah</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Bidang Tanah | Desa Mangunarga
                        </div>

                        <div class="card-body">

                            <!-- Notifikasi Berhasil Tambah -->
                            <?php if (session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session('success'); ?>
                                </div>
                            <?php endif; ?>

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kohir</th>
                                        <th>Kelas Desa</th>
                                        <th>Luas (M²)</th>
                                        <th>SPPT</th>
                                        <th>Nama Pemilik</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($bidang_tanah as $bidang_tanah1) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $bidang_tanah1->persil; ?></td>
                                            <td><?= $bidang_tanah1->kelas_desa; ?></td>
                                            <td><?= $bidang_tanah1->luas; ?></td>
                                            <td><strong><?= $bidang_tanah1->sppt; ?></strong></td>
                                            <td><a href="<?= base_url('data_letter/detail_letterc/' . $bidang_tanah1->id_dataC) ?>"><?= $bidang_tanah1->nama; ?></a></td>
                                            <td width="5%" class="text-center">
                                                <a href=" <?= base_url('data_letter/detail_letterc/' . $bidang_tanah1->id_dataC) ?>" type="button" class="btn btn-secondary">
                                                    <i class=" fa fa-eye"></i> Detail</a>
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

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Letter C</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('datainduk1/tambah1') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="no_letter_c">Nomor Letter C</label>
                            <input type="text" name="no_letter_c" id="no_letter_c" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_pemilik_baru">Nomor Pemilik Baru</label>
                            <input type="text" name="no_pemilik_baru" id="no_pemilik_baru" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="filescan">File Scan</label>
                            <input type="file" name="filescan" id="filescan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>