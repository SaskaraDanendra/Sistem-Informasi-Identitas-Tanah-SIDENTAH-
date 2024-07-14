<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('style'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Cari Data Letter C</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Cari Data Letter C</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Letter C | Desa Mangunarga
                        </div>

                        <div class="card-body">
                            <!-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                            <i class="fa fa-plus"></i>Tambah
                            </button>-->

                            <!-- Notifikasi Berhasil Tambah -->
                            <div class="swal" data-swal="<?= session('success') ?>"></div>

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Persil</th>
                                        <th>Kohir</th>
                                        <th>Nama</th>
                                        <th>Filescan</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_induk as $data_induk1) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data_induk1->no_letter_c; ?></td>
                                            <td><?= $data_induk1->no_pemilik_baru; ?></td>
                                            <td><a href="<?= base_url('data_letter/detail_letterc/' . $data_induk1->id_dataC) ?>"><?= $data_induk1->nama; ?></a></td>
                                            <td><?= $data_induk1->filescan; ?></td>
                                            <td><?= $data_induk1->keterangan; ?></td>
                                            <td width="15%" class="text-center">
                                                <div class="btn-group" role="group">
                                                    <a href="<?= base_url('data_letter/detail_letterc/' . $data_induk1->id_dataC) ?>" type="button" class="btn btn-secondary">
                                                        <i class="fa fa-eye"></i> Detail
                                                    </a>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $data_induk1->id_dataC; ?>">
                                                        <i class="fa fa-edit"></i> Ubah
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal Ubah -->
                                        <div class="modal fade" id="ubahModal<?= $data_induk1->id_dataC; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-success text-white">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Letter C</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= base_url('datainduk1/ubah/' . $data_induk1->id_dataC) ?>" method="post">
                                                            <?= csrf_field() ?>

                                                            <input type="hidden" name="_method" value="PUT">

                                                            <div class="mb-3">
                                                                <label for="no_letter_c">Persil</label>
                                                                <input type="text" name="no_letter_c" id="no_letter_c" class="form-control" value="<?= $data_induk1->no_letter_c; ?>" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_pemilik_baru">Kohir</label>
                                                                <input type="text" name="no_pemilik_baru" id="no_pemilik_baru" class="form-control" value="<?= $data_induk1->no_pemilik_baru; ?>" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama">Nama</label>
                                                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $data_induk1->nama; ?>" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                                <textarea name="keterangan" id="keterangan" class="form-control" required><?= $data_induk1->keterangan; ?></textarea>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                                        <button type="submit" class="btn btn-success">Ubah</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                            <label for="no_letter_c">Persil</label>
                            <input type="text" name="no_letter_c" id="no_letter_c" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_pemilik_baru">Kohir</label>
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

    <?= $this->Section('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const swal = $('.swal').data('swal');

        if (swal) {
            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: swal,
                showConfirmButton: false,
                timer: 2000
            })
        }

        function hapus(id_dataC) {
            Swal.fire({
                title: "Hapus",
                text: "Yakin Data ini Akan DiHapus ?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?= base_url("datainduk1/hapus/") ?>' + id_dataC,
                        type: 'DELETE',
                        success: function() {
                            Swal.fire(
                                "Deleted!",
                                "Data Berhasil Dihapus !",
                                "success"
                            ).then(() => {
                                location.reload();
                            });
                        },
                        error: function() {
                            Swal.fire(
                                "Gagal !",
                                "Tidak Bisa Dihapus Jika Belum Melengkapi Data Bidang Tanah !",
                                "error"
                            );
                        }
                    });
                }
            });
        }
    </script>
    <?= $this->endSection(); ?>