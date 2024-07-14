<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('style'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Input Data Letter C</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Input Data Letter C</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Input Data Letter C | Desa Mangunarga
                        </div>

                        <div class="card-body">
                            <!-- Notifikasi Berhasil Tambah -->
                            <div class="swal" data-swal="<?= session('success') ?>"></div>

                            <!-- Notifikasi Gagal Tambah -->
                            <?php if (session('failed')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session('failed'); ?>
                                </div>
                            <?php endif; ?>

                            <form action="<?= base_url('datainduk/create-c') ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="row">
                                    <div class="mb-3">
                                        <label for="no_letter_c">Persil</label>
                                        <input type="text" name="no_letter_c" id="no_letter_c" class="form-control <?= $validation->hasError('no_letter_c') ? 'is-invalid' : null ?>" value="<?= old('no_letter_c') ?>">
                                        <?php if ($validation->hasError('no_letter_c')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('no_letter_c'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_pemilik_baru">Kohir</label>
                                        <input type="text" name="no_pemilik_baru" id="no_pemilik_baru" class="form-control <?= $validation->hasError('no_pemilik_baru') ? 'is-invalid' : null ?>" value=" <?= old('no_pemilik_baru') ?>">
                                        <?php if ($validation->hasError('no_pemilik_baru')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('no_pemilik_baru'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : null ?>" value=" <?= old('nama') ?>">
                                        <?php if ($validation->hasError('nama')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nama'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="filescan">filescan</label>
                                        <input type="file" name="filescan" id="filescan" class="form-control <?= $validation->hasError('filescan') ? 'is-invalid' : null ?>" onchange="previewImg()">
                                        <?php if ($validation->hasError('filescan')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('filescan'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <img src="" alt="" class="preview-img mt-2" width="500px">
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control <?= $validation->hasError('keterangan') ? 'is-invalid' : null ?>"><?= old('keterangan') ?></textarea>
                                        <?php if ($validation->hasError('keterangan')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('keterangan'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->endSection() ?>

    <?= $this->Section('script'); ?>
    <script>
        function previewImg() {
            const gambar = document.querySelector('#filescan');
            const imgPreview = document.querySelector('.preview-img');

            const fileGambar = new FileReader();
            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
    <?= $this->endSection(); ?>

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
                timer: 2200
            });
        }
    </script>
    <?= $this->endSection(); ?>