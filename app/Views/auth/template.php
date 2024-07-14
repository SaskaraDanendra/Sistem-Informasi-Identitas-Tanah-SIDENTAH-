<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="<?= base_url('asset-admin') ?>/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('asset-admin/img/image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #layoutAuthentication_footer {
            color: white;
        }

        #layoutAuthentication_footer a {
            color: white;
            text-decoration: none;
        }

        #layoutAuthentication_footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">

            <!-- Render Halaman Dinamis -->
            <?= $this->renderSection('content'); ?>

        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-success mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-white">Copyright &copy; Inovasi PTMGRMD 2024 | Desa Mangunarga</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('asset-admin') ?>/js/scripts.js"></script>
</body>

</html>