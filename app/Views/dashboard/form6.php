<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid fixed mt-2">
    <a class="btn btn-primary" href="<?= site_url('home/index') ?>" role="button">Back</a>
</div>

<h3 class="text-center text-uppercase mt-2">Formulir Pengkajian Keperawatan dan Medis Rawat Jalan Bagian II</h3>

<div class="container-fluid fixed">
    <div class="row align-items-center mt-4">
        <div class="col-md-8"><?= $pager->links('assessment_info', 'pagination') ?></div>

        <div class="col-md-4 float-end">
            <form action="" method="post" autocomplete="off">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Pasien . . ." name="keyword">
                    <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-danger mt-3" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif ?>

<div class="container-fluid fixed">
    <table class="table table-hover table-bordered d mt-3 mb-10" style="border:3px solid black">


        <thead class="text-center table-secondary">
            <tr>
                <th width="10%">No</th>
                <th>BODY_ID</th>
                <th width="10%">RM</th>
                <th>Nama</th>
                <th width="14%">Keterangan</th>
            </tr>
        </thead>

        <?php $i = 1 + (2 * ($currentPage - 1)); ?>
        <?php foreach ($data as $row) { ?>

            <tbody>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['BODY_ID'] ?></td>
                    <td><?= $row['NO_REGISTRATION'] ?></td>
                    <td><?= $row['THENAME'] ?></td>
                    <td align="center">
                        <div class="btn-group" role="group">
                            <a href="<?= site_url('detail/form6/' . $row['no']) ?>" class="btn btn-info"><i class="bi bi-eye-fill text-primary"></i></a>
                            <a href="<?= site_url('update/form6/' . $row['no']) ?>" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></a>
                            <a href="<?= site_url('detail/deletef6/' . $row['no']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash-fill text-light"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        <?php }; ?>
    </table>
</div>

<?= $this->endSection(); ?>