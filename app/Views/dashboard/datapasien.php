<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
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

<div class="container-fluid fixed mt-2">
    <a class="btn btn-primary" href="<?= site_url('home/index') ?>" role="button">Back</a>
</div>

<h3 class="text-center mt-2">DATA PASIEN</h3>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif ?>

<div class="container-fluid fixed">
    <div class="row align-items-center mt-4">
        <div class="col-md-8">
            <?= $pager->links('pasien', 'pagination') ?>
        </div>

        <div class="col-md-4">
            <form action="" method="post" autocomplete="off">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Pasien . . ." name="keyword">
                    <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid fixed">
    <table class="table table-bordered mt-3 mb-5" style="border:3px solid black">

        <thead class="text-center">
            <tr>
                <th>No</th>
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
        <?php $i = 1 + (2 * ($currentPage - 1)); ?>
        <?php foreach ($daftarpasien as $row) { ?>

            <tbody>
                <tr>
                    <td><?= $i++; ?></td>
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



<?= $this->endSection(); ?>