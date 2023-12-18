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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-5.0.2-dist/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/cdn/11.5.0/css/font-awesome.min.css">


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

        /* Dropdown Button */
        .dropbtn {
            background-color: #ffc107;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            border-radius: 15px;

        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 500px;
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #fff;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #0000ff;
        }
    </style>
</head>

<body>

    <?= $this->include('navbar') ?>

    <div class="container container-fluid fixed">
        <div class="row align-items-center mt-5">

            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/datapasien') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Data Pasien<br>ISI FORMULIR<br><br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/form1') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Penolakan Tindakan Kedokteran <br><br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/form2') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Persetujuan Tindakan Anestesi Lokal <br><br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/form3') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Penolakan Tindakan Anestesi Lokal <br><br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-xl-3 col-md-3 mb-2">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/form4') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Tindakan Invasif Diuar Kamar Operasi <br><br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 mb-2">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/form5') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Pengkajian Awal dan keperawatan <br><br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 mb-2">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/form6') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Pengkajian Keperawatan dan Medis Rawat Jalan<br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 mb-2">
                <div class="card border border-5 border-warning border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="<?= site_url('formulir/form7') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Catatan Perkembangan Pasien Terintegrasi Rawat Jalan<br><br></a>
                                <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : 00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="container-fluid fixed">
        <footer class="">
            <p class="text-center text-body-secondary">&copy; 2023 RSUD Dr. M. Yunus Bengkulu</p>
        </footer>
    </div>


    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('bootstrap-5.0.2-dist/js/bootstrap.min.js') ?>" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url('jquery-3.7.1.min.js') ?>"></script>

</body>

</html>