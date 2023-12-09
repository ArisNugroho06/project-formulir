<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Formulir</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-5.0.2-dist/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <?= $this->include('navbar') ?>


    <div class="container" style="margin: 0 auto;">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form3.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Penolakan Tindakan kedokteran</h5>
                        <br>
                        <a href="<?= site_url('formulir/formptk') ?>" class="btn btn-primary">Isi Formulir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form3.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Persetujuan Tindakan Anestesi Lokal</h5>
                        <br>
                        <a href="<?= site_url('formulir/formpsa') ?>" class="btn btn-primary">Isi Formulir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form3.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Penolakan Tindakan Anestesi Lokal</h5>
                        <br>
                        <a href="<?= site_url('formulir/formpta') ?>" class="btn btn-primary">Isi Formulir</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form3.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Pengkajian Awal dan Keperawatan</h5>
                        <br>
                        <a href="<?= site_url('formulir/formbpak') ?>" class="btn btn-primary">Isi Formulir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form3.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Tindakan Invasif Di Luar Kamar Operasi</h5>
                        <br>
                        <a href="<?= site_url('formulir/formtidk') ?>" class="btn btn-primary">Isi Formulir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form3.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Pengkajian Keperawatan dan Medis Rawat Jalan</h5>
                        <br>
                        <a href="<?= site_url('formulir/formpkmrj') ?>" class="btn btn-primary">Isi Formulir</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form3.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Catatan Perkembangan Pasien Terintegrasi Rawat Jalan</h5>
                        <br>
                        <a href="<?= site_url('formulir/formcpptrj') ?>" class="btn btn-primary">Isi Formulir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('bootstrap-5.0.2-dist/js/bootstrap.min.js') ?>" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url('jquery-3.7.1.min.js') ?>"></script>

</body>

</html>