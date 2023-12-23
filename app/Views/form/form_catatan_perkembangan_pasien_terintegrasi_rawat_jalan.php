<!-- $db = db_connect();
foreach ($dataAssessmentcpptrj as $row) {
    <canvas id="sig' + i5 + '" width="198" height="123">Your browser doesn\'t support signing</canvas>
}; -->


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CATATAN PERKEMBANGAN PASIEN TERINTEGRASI RAWAT JALAN</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>jQuery UI Signature Basics</title>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">
    <style>
        .kbw-signature {
            width: 200px;
            height: 125px;
        }
    </style>
    <!--[if IE]>
    <script src="excanvas.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

    <script>
        $(function() {
            var sig = $('#ttd').signature();
        });
    </script>

    <script>
        $(function() {
            var sig = $('#ttd_1').signature();
        });
    </script>


    <script type="text/javascript">
        // JavaScript Document
        var i = 10;
        var ttd = 0;
        var no = 1;

        function addRow(tableID) {

            i1 = i + 1;
            i2 = i + 2;
            i3 = i + 3;
            i4 = i + 4;
            i5 = ttd + 1;
            i6 = i + 5;
            i7 = no + 1;

            $("#" + tableID).append($("<tr>")
                .append($("<td>").html(i7))
                .append($("<td>").html('<div class="form-group"><input type="datetime-local" class="form-control" required="required" name="v_' + i + '" size="20px"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i1 + '" name="v_' + i1 + '" size="20px" placeholder="Profesi"></div>'))
                .append($("<td>").html('<div class="form-group"><textarea class="form-control" id="v_' + i2 + '" name="v_' + i2 + '" rows="10" cols="5" placeholder="Hasil"></textarea></div>'))
                .append($("<td>").html('<div class="form-group"><textarea class="form-control" id="v_' + i3 + '" name="v_' + i3 + '" rows="10" cols="5" placeholder="Instruksi"></textarea></div>'))
                .append($("<td>").html('<div class="form-group"><input type="datetime-local" id="v_' + i4 + '" name="v_' + i4 + '" size="25px"><br><label>DPJP</label><br><div id="ttd_' + i5 + '" class="kbw-signature"></div><br><input type="text" id="v_' + i6 + '" name="v_' + i6 + '" size="25px"></div>'))
                .append($("<script>").html('$(function() { var sig = $("#ttd_' + i5 + '").signature();  });'))
            )

            i += 6;
            ttd += 1;
            no += 1;

            // initiateSign("ttd" + i5)


        }
    </script>

</head>

<body>

    <div class="container-fluid fixed mt-5">
        <a class="btn btn-primary" href="<?= site_url('formulir/datapasien') ?>" role="button">Back</a>
    </div>

    <div class="container-fluid fixed mt-5">
        <form action="<?= site_url('insert/create') ?>" method="post" autocomplete="off">
            <?php csrf_field(); ?>
            <input type="hidden" id="form" name="form" value="F7">
            <table class="table text">
                <tr>
                    <td width="5%" align="right">
                        <img src="<?= base_url('assets/logo.jpeg') ?>" width="65px">
                    </td>
                    <td width="60%">
                        <h5>RSUD Dr. M. Yunus Bengkulu </h5>
                        <h5>Badan Layanan Umum Daerah</h5>
                        <strong>
                            <p style="font-size:12px">Jl. Bhayangkara Bengkulu 38229 Telp. (0736) 52004 - 52006 Fax. (0736) 52007</p>
                        </strong>
                    </td>
                    <td width="35%" rowspan="2">
                        <h6>RM. 01 Lanjutan RAWAT JALAN</h6>
                        <br>

                        <div class="container" style="border:2px solid black; border-radius: 20px;">
                            <div class="row">
                                <div class="col-5">
                                    <label>No.RM</label>
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $psn['NO_REGISTRATION'] ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>Nama Lengkap</label>
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $psn['THENAME'] ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $psn['DATE_OF_BIRTH'] ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>NIK</label>
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="text" name="thenik" id="thenik" value="<?php echo $psn['THENIK'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col-3">
                                <h4><label>POLIKLINIK : </label></h4>
                            </div>
                            <div class="col-8">
                                <input class="form-control" type="text" name="clinic_id" id="clinic_id" value="<?php echo $psn['CLINIC_ID'] ?>" readonly>
                            </div>
                        </div>
    </div>
    </td>
    </tr>
    <tr>
        <td colspan="3">
            <h3 class="text-center">CATATAN PERKEMBANGAN PASIEN TERINTEGRASI RAWAT JALAN</h3>
        </td>
    </tr>
    </table>

    <table class="w-full table table-striped table-bordered table-hover text-center" style="border: 2px solid black">
        <tr>
            <thead>
                <th>NO</th>
                <th width="10%">TANGGAL/JAM</th>
                <th width="10%">PROFESI</th>
                <th width="30%">
                    HASIL PEMERIKSAAN, ANALISIS, <br> RENCANA PENATALAKSANAAN PASIEN <br>
                    <p>(Dituliskan dengan format SOAP/ADIME, Disertai dengan Targer yang terukur, Evaluasi Hasil Tatalaksana dituliskan dalam Asessment. Harap Bubuhkan Stampel Nama, dan Paraf Setiap Akhir Catatan)</p>
                </th>
                <th width="30%">
                    Instruksi Tenaga Kesehatan Termasuk <br> Pasca Bedah/Prosudur <br>
                    (Instruksi Ditulis dengan Rinci dan Jelas)
                </th>
                <th width="20%">
                    VERIFIKASI DPJP <br>
                    (Bubuhkan Stempel Nama, Paraf, Tgl, Jam) <br> (DPJP Harus membaca seluruh rencana perawatan)
                </th>
            </thead>
        </tr>
        <tbody id="tbody2">
            <tr>
                <td>1</td>
                <td>
                    <div class="form-group">
                        <input type="datetime-local" class="form-control" required="required" id="v_04" name="v_04" size="20px">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" id="v_05" name="v_05" placeholder="Profesi">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" id="v_06" name="v_06" rows="10" cols="5" placeholder="Hasil"></textarea>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" id="v_07" name="v_07" rows="10" cols="5" placeholder="Instruksi"></textarea>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="datetime-local" id="v_08" name="v_08" size="25px"><br>
                        <label>DPJP</label><br>
                        <div id="ttd"></div><br>
                        <input type="text" id="v_09" name="v_09" size="25px">
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <td colspan="6" align="center">
                <button type="button" class="btn btn-primary" onclick="addRow('tbody2')">Tambah Baris</button>
            </td>
        </tfoot>
    </table>

    <div class="d-grid gap-2 mb-3">
        <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
    </div>
    </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>