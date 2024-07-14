<?= $this->extend('auth/template'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: rgba(255, 255, 255, 0.8);">
                    <div class="card-header" style="background-color: rgba(25, 134, 84, 0.9);">
                        <h3 class="text-center font-weight-success my-4" style="color:aliceblue;">Reset Password</h3>
                    </div>
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.4);">
                        <!-- Alert Message -->
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <div class="small mb-3 text-muted">
                            <p><?= lang('Auth.enterEmailForInstructions') ?></p>
                        </div>

                        <form action="<?= url_to('forgot') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="form-floating mb-3">
                                <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="inputEmail" type="email" name="email" placeholder="<?= lang('Auth.emailAddress') ?>" />
                                <label for="inputEmail"><?= lang('Auth.emailAddress') ?></label>
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="<?= base_url('login'); ?>">Kembali ke login</a>
                                <button type="submit" class="btn btn-primary" href="">Reset Password</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection('content'); ?>