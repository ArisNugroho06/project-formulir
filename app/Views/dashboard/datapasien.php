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

    <div class="container-fluid fixed mt-5">
        <a class="btn btn-info" href="<?= site_url('home/index') ?>" role="button">Back</a>
    </div>

    <h3 class="text-center my-5">DATA PASIEN</h3>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif ?>

    <div class="container-fluid fixed">
        <table class="table table-bordered mt-5 mb-10" style="border:3px solid black">

            <thead class="text-center">
                <tr>
                    <th>Isi Formulir</th>
                    <th>RM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Umur</th>
                    <th>T.T.L</th>
                    <th width="8%">T. Berobat</th>
                    <th>Rujukan</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                </tr>
            </thead>

            <?php foreach ($daftarpasien as $row) { ?>

                <tbody>
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button class="dropbtn">Formulir</button>
                                <div class="dropdown-content">
                                    <a href="<?= site_url('formulir/formptk/' . $row['NO_REGISTRATION']) ?>">Formulir Penolakan Tindakan Kedokteran</a>
                                    <a href="<?= site_url('formulir/formpsa/' . $row['NO_REGISTRATION']) ?>">Formulir Persetujuan Tindakan Anestesi Lokal</a>
                                    <a href="<?= site_url('formulir/formpta/' . $row['NO_REGISTRATION']) ?>">Formulir Penolakan Tindakan Anestesi Lokal</a>
                                    <a href="<?= site_url('formulir/formtidk/' . $row['NO_REGISTRATION']) ?>">Formulir Tindakan Invasif Diuar Kamar Operasi</a>
                                    <a href="<?= site_url('formulir/formbpak/' . $row['NO_REGISTRATION']) ?>">Formulir Pengkajian Awal Dan Keperawatan</a>
                                    <a href="<?= site_url('formulir/formpkmrj/' . $row['NO_REGISTRATION']) ?>">Formulir Pengkajian Keperawatan dan Medis Rawat Jalan</a>
                                    <a href="<?= site_url('formulir/formcpptrj/' . $row['NO_REGISTRATION']) ?>">Formulir Catatan Perkembangan Pasien Terintegrasi Rawat Jalan </a>
                                </div>
                            </div>
                        </td>
                        <td><?= $row['NO_REGISTRATION'] ?></td>
                        <td><?= $row['THENAME'] ?></td>
                        <td><?= $row['THEADDRESS'] ?></td>
                        <td><?= $row['GENDER'] ?></td>
                        <td><?= $row['AGEYEAR'] . 't  ' .  $row['AGEMONTH'] . 'b  ' . $row['AGEDAY'] . 'h' ?></td>
                        <td><?= $row['PLACE_OF_BIRTH'] . ', ' . $row['DATE_OF_BIRTH'] ?></td>
                        <td><?= $row['VISIT_DATE'] ?></td>
                        <td><?= $row['PPKRUJUKAN'] ?></td>
                        <td><?= $row['ANAMNASE'] ?></td>
                        <td><?= $row['CONCLUSION'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <div class="container-fluid fixed">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; 2023 RSUD Dr. M. Yunus Bengkulu</span>
            </div>
        </footer>
    </div>



    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('bootstrap-5.0.2-dist/js/bootstrap.min.js') ?>" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url('jquery-3.7.1.min.js') ?>"></script>

</body>

</html>