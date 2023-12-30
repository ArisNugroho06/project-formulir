<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid fixed mt-5">
    <a class="btn btn-info" href="<?= site_url('home/index') ?>" role="button">Back</a>
</div>

<h3 class="text-center text-uppercase mt-5">Formulir Pengkajian Keperawatan dan Medis Rawat Jalan Bagian II</h3>

<div class="container-fluid fixed">
    <table class="table table-bordered mt-5 mb-10" style="border:3px solid black">


        <thead class="text-center">
            <tr>
                <th width="10%">No</th>
                <th>BODY_ID</th>
                <th width="10%">RM</th>
                <th>Nama</th>
                <th width="14%">Keterangan</th>
            </tr>
        </thead>

        <?php $i = 1;
        foreach ($data as $row) { ?>

            <tbody>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['BODY_ID'] ?></td>
                    <td><?= $row['NO_REGISTRATION'] ?></td>
                    <td><?= $row['THENAME'] ?></td>
                    <td align="center">
                        <a href="<?= site_url('detail/form6/' . $row['NO_REGISTRATION']) ?>" class="btn btn-info"><i class="bi bi-eye-fill text-primary"></i></a>
                        <a href="<?= site_url('update/form6/' . $row['NO_REGISTRATION']) ?>" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></a>
                        <a href="<?= site_url('detail/deletef6/' . $row['no']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash-fill text-light"></i></a>
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