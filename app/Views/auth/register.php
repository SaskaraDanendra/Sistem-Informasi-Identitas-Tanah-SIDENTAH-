<?= $this->extend('auth/template'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: rgba(255, 255, 255, 0.8);">
                    <div class=" card-header" style="background-color: rgba(25, 134, 84, 0.9);">
                        <h3 class="text-center font-weight-success my-4" style="color:aliceblue;">Registrasi Akun</h3>
                    </div>
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.4);">
                        <!-- Alert Message-->
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="inputFirstName" type="email" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" />
                                        <label for="inputFirstName"><?= lang('Auth.email') ?></label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="inputLastName" type="text" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" />
                                        <label for="inputLastName"><?= lang('Auth.username') ?></label>
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="inputPassword" type="password" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" />
                                        <label for="inputPassword"><?= lang('Auth.password') ?></label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="inputPasswordConfirm" type="password" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" />
                                        <label for="inputPasswordConfirm"><?= lang('Auth.repeatPassword') ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Create Account</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3" style="background-color: rgba(255, 255, 255, 0.5);">
                        <div class="small">
                            <p>Sudah Punya Akun?<a href="<?= base_url('login'); ?>"> Kembali ke login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection('content'); ?>