<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-info mt-3" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif ?>

<div class="container container-fluid fixed">
    <div class="row align-items-center mt-5">

        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card border border-5 border-info border-top-0 border-bottom-0 border-end-0 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="<?= site_url('formulir/datapasien') ?>" class="text-xs font-weight-bold text-info text-uppercase mb-1 text-decoration-none">Data Pasien<br>ISI FORMULIR<br><br><br></a>
                            <div class="h6 col-md-7 bg-info p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalpasien; ?></div>
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
                            <a href="<?= site_url('dataformulir/form1') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Penolakan Tindakan Kedokteran <br><br><br></a>
                            <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalF1; ?></div>
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
                            <a href="<?= site_url('dataformulir/form2') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Persetujuan Tindakan Anestesi Lokal <br><br><br></a>
                            <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalF2; ?></div>
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
                            <a href="<?= site_url('dataformulir/form3') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Penolakan Tindakan Anestesi Lokal <br><br><br></a>
                            <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalF3; ?></div>
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
                            <a href="<?= site_url('dataformulir/form4') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Tindakan Invasif Diuar Kamar Operasi <br><br><br></a>
                            <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalF4; ?></div>
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
                            <a href="<?= site_url('dataformulir/form5') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Pengkajian Awal dan keperawatan <br><br><br></a>
                            <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalF5; ?></div>
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
                            <a href="<?= site_url('dataformulir/form6') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Pengkajian Keperawatan dan Medis Rawat Jalan<br><br></a>
                            <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalF6; ?></div>
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
                            <a href="<?= site_url('dataformulir/form7') ?>" class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-decoration-none">Formulir Catatan Perkembangan Pasien Terintegrasi Rawat Jalan<br><br></a>
                            <div class="h6 col-md-7 bg-warning p-2 border-4 mb-0 font-weight-bold text-gray-800" style="border-radius:7px">Jumlah : <?php echo $totalF7; ?></div>
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

<?= $this->endSection(); ?>