<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid fixed mt-5">
    <a class="btn btn-info" href="<?= site_url('home/index') ?>" role="button">Back</a>
</div>

<h3 class="text-center text-uppercase mt-5">Formulir Pengkajian Awal dan keperawatan Rawat Jalan Bagian I</h3>

<div class="container-fluid fixed">
    <table class="table table-bordered mt-5 mb-10" style="border:3px solid black">

        <!-- <form class="d-flex mt-3 mb-3" action=" site_url('formulir/search') " method="post">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <input class="form-control me-2" type="search" name="idpasien" placeholder="Cari Data Pasien" aria-label="Search">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-outline-primary" type="submit">Cari</button>
                            </div>

                        </div>
                    </div>
            </form> -->


        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>BODY_ID</th>
                <th>RM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Tgl & Jam Datang Pasien</th>
                <th>Keluhan</th>
                <th>Poliklinik</th>
                <th width="14%">Keterangan</th>
            </tr>
        </thead>

        <?php $i = 1;
        foreach ($data as $row) { ?>

            <tbody>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['BODY_ID'] ?></td>
                    <td><?= $row['NO_REGISTRATION'] ?></td>
                    <td><?= $row['THENAME'] ?></td>
                    <td><?= $row['THEADDRESS'] ?></td>
                    <td><?= $row['GENDER'] ?></td>
                    <td><?= $row['EXAMINATION_DATE'] ?></td>
                    <td><?= $row['ANAMNASE'] ?></td>
                    <td><?= $row['CLINIC_ID'] ?></td>
                    <td align="center">
                        <a href="<?= site_url('detail/form5/' . $row['NO_REGISTRATION']) ?>" class="btn btn-info"><i class="bi bi-eye-fill text-primary"></i></a>
                        <a href="<?= site_url('update/form5/' . $row['NO_REGISTRATION']) ?>" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></a>
                        <a href="<?= site_url('detail/deletef5/' . $row['no']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash-fill text-light"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php }; ?>
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