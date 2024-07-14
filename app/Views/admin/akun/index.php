<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Akun User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Akun</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Akun User | Desa Mangunarga
                </div>
                <div class="card-body">
                    <a href="<?= base_url('register'); ?>" class="btn btn-sm btn-primary mb-2"><i class="fas fa-user-plus"></i> Registrasi</a>

                    <!-- Flash Message -->
                    <?php if (session('success')) : ?>
                        <div class="alert alert-success">
                            <?= session('success'); ?>
                        </div>
                    <?php endif; ?>

                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Tanggal Registrasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_akun as $akun) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $akun->email; ?></td>
                                    <td><?= $akun->username; ?></td>
                                    <td><?= $akun->created_at; ?></td>
                                    <td class="text-center" width="15%">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $akun->id ?>"><i class="fas fa-edit"></i> Ubah</button>

                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $akun->id ?>"><i class="fas fa-trash"></i> Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <?php foreach ($data_akun as $akun) : ?>
        <!-- Modal Ubah Data Akun -->
        <div class="modal fade" id="ubahModal<?= $akun->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title fs-5" id="exampleModalLabel"><i class="fas fa-edit"></i> Ubah Akun User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('akun/ubah/' . $akun->id); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= $akun->email; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= $akun->username; ?>" required minlength="">
                        </div>

                        <a href="<?= base_url('forgot') ?>">Reset Password</a>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success">Ubah</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($data_akun as $akun) : ?>
        <!-- Modal Hapus Data Akun -->
        <div class="modal fade" id="hapusModal<?= $akun->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title fs-5" id="exampleModalLabel"><i class="fas fa-trash"></i> Hapus Akun User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('akun/hapus/' . $akun->id); ?>
                        <input type="hidden" name="_method" value="DELETE">

                        <p>Yakin Data Akun : <?= $akun->email; ?>, Akan Di Hapus?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?= $this->endSection(); ?>