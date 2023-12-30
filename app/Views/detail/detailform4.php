<!-- $db = db_connect();

foreach ($dataAssessmenttidk as $row) {
}; -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulir Tindakan Invasif Di Luar KO</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>jQuery UI Signature Basics</title>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">
    <style>
        .kbw-signature {
            width: 150px;
            height: 75px;
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
            $('#disable').click(function() {
                var disable = $(this).text() === 'Disable';
                $(this).text(disable ? 'Enable' : 'Disable');
                sig.signature(disable ? 'disable' : 'enable');
            });
            $('#clear').click(function() {
                sig.signature('clear');
            });
        });
    </script>
    <script>
        $(function() {
            var sig = $('#ttd_1').signature();
            $('#disable').click(function() {
                var disable = $(this).text() === 'Disable';
                $(this).text(disable ? 'Enable' : 'Disable');
                sig.signature(disable ? 'disable' : 'enable');
            });
            $('#clear').click(function() {
                sig.signature('clear');
            });
        });
    </script>
    <script>
        $(function() {
            var sig = $('#ttd_2').signature();
            $('#disable').click(function() {
                var disable = $(this).text() === 'Disable';
                $(this).text(disable ? 'Enable' : 'Disable');
                sig.signature(disable ? 'disable' : 'enable');
            });
            $('#clear').click(function() {
                sig.signature('clear');
            });
        });
    </script>

    <script type="text/javascript">
        $(function f1() {
            $("input[name='t_07']").click(function f1() {
                if ($("#t_07_ya").is(":checked")) {
                    $("#v_09").removeAttr("disabled");
                    $("#v_10").removeAttr("disabled");
                    $("#v_11").removeAttr("disabled");
                    $("#v_12").removeAttr("disabled");
                    $("#v_13").removeAttr("disabled");
                    $("#v_14").removeAttr("disabled");
                    $("#v_09").focus();
                } else {
                    $("#v_09").attr("disabled", true);
                    $("#v_09").val("");
                    $("#v_10").attr("disabled", true);
                    $("#v_10").val("");
                    $("#v_11").attr("disabled", true);
                    $("#v_11").val("");
                    $("#v_12").attr("disabled", true);
                    $("#v_12").val("");
                    $("#v_13").attr("disabled", true);
                    $("#v_13").val("");
                    $("#v_14").attr("disabled", true);
                    $("#v_14").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f1() {
            $("input[name='t_031']").click(function f1() {
                if ($("#t_031_ya").is(":checked")) {
                    $("#v_20").removeAttr("disabled");
                    $("#v_21").removeAttr("disabled");
                    $("#v_22").removeAttr("disabled");
                    $("#v_23").removeAttr("disabled");
                    $("#v_24").removeAttr("disabled");
                    $("#t_032_laki").removeAttr("disabled");
                    $("#t_032_perempuan").removeAttr("disabled");
                    $("#v_20").focus();
                } else {
                    $("#v_20").attr("disabled", true);
                    $("#v_20").val("");
                    $("#v_21").attr("disabled", true);
                    $("#v_21").val("");
                    $("#v_22").attr("disabled", true);
                    $("#v_22").val("");
                    $("#v_23").attr("disabled", true);
                    $("#v_23").val("");
                    $("#v_24").attr("disabled", true);
                    $("#v_24").val("");
                    $("#t_032_laki").attr("disabled", true);
                    $("#t_032_laki").prop("checked", false);
                    $("#t_032_perempuanx").attr("disabled", true);
                    $("#t_032_perempuan").prop("checked", false);
                }
            });
        });
    </script>

</head>
<div class="container-fluid fixed mt-5">
    <a class="btn btn-primary" href="<?= site_url('dataformulir/form4') ?>" role="button">Back</a>
</div>

<body>
    <form action="<?= site_url('insert/create') ?>" method="post" autocomplete="off">
        <?php csrf_field(); ?>
        <input type="hidden" id="form" name="form" value="F4">


        <div class="container-fluid" style="text-align: center">
            <h4>RSUD Dr. M. YUNUS BENGKULU</h4>
        </div>
        <div class="container-fluid fixed mt-3">
            <table class="table table-bordered mb-0" style="border: 1px solid black">
                <tr>
                    <td width="50%">
                        <div class="row mb-5">
                            <div class="col">
                                <br>
                                <br>
                                <h3 class="text-center">CHECK LIST PROSEDUR KESELAMATAN PADA TINDAKAN INVASIF DI LUAR KAMAR OPERASI</h3>
                            </div>
                        </div>
                    </td>
                    <td width="50%">
                        <div class="col">

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">No. Rekam Medis</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $detail['NO_REGISTRATION'] ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <label class="col-form-label">Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $detail['THENAME'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <label class="col-form-label">Nama Keluarga</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="alloanamnesis_contact" id="alloanamnesis_contact" value="<?php echo $detail['ALLOANAMNESIS_CONTACT'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <label class="col-form-label">Tgl. Lahir</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $detail['DATE_OF_BIRTH'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <div class="col-7">
                                            <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $detail['GENDER'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Ruangan</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="class_room_id" id="class_room_id" value="<?php echo $detail['CLASS_ROOM_ID'] ?>" readonly>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3">

                                    <label>Stiker Pasien</label>
                                </div>
                                <div class="col-6">
                                    <input type="file" name="img" id="img">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <table class="table table-bordered" style="border:1px solid black">
                <tr>
                    <td width="35%">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Nama Dokter</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_01" id="v_01" value="<?php echo $detail['V_01'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Nama Tindakan</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_02" id="v_02" value="<?php echo $detail['V_02'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Diagnosa Medis</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_03" id="v_03" value="<?php echo $detail['V_03'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Tanggal Tindakan</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="v_04" id="v_04" value="<?php echo $detail['V_04'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Ruang Tindakan</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_05" id="v_05" value="<?php echo $detail['V_05'] ?>" readonly>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label"><strong>SIGN IN</strong> pukul</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="time" name="v_06" id="v_06" value="<?php echo $detail['V_06'] ?>" readonly>
                            </div>
                        </div>

                        <p>(Dilakukan di ruang persiapan, minimal oleh perawat)</p>

                        <p>1. Pasien telah dikonfirmasikan</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Identifikasi dan gelang pasien</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_01" id="t_01_ya" <?php echo ($detail['T_01'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_01_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_01" id="t_01_tidak" <?php echo ($detail['T_01'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_01_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Asal Rujukan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_02" id="t_02_ya" <?php echo ($detail['T_02'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_02_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_02" id="t_02_tidak" <?php echo ($detail['T_02'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_02_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tindakan yang akan dilakukan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_ya" <?php echo ($detail['T_03'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_03_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_tidak" <?php echo ($detail['T_03'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_03_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Formulir persetujuan tindakan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_04" id="t_04_ya" <?php echo ($detail['T_04'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_04_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_04" id="t_04_tidak" <?php echo ($detail['T_04'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_04_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Formulir persetujuan Anesthesia</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_05" id="t_05_ya" <?php echo ($detail['T_05'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_05_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_05" id="t_05_tidak" <?php echo ($detail['T_05'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_05_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <p>2. Pasien sudah puasa 4 / 6 / 8 jam</p>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Minum/makan terakhir pukul</label>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="time" name="v_07" id="v_07" value="<?php echo $detail['V_07'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Jumlah</label>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="v_08" id="v_08" value="<?php echo $detail['V_08'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;*Obat yang diminum sebelumnnya</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_06" id="t_06_ya" <?php echo ($detail['T_06'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_06_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_06" id="t_06_tidak" <?php echo ($detail['T_06'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_06_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">3. Pasien yang sudah di cek hasil lab :</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_07" id="t_07_ya" <?php echo ($detail['T_07'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_07_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_07" id="t_07_tidak" <?php echo ($detail['T_07'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_07_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Hb</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_09" id="v_09" value="<?php echo $detail['V_09'] ?>" readonly disabled="d isabled">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Trombosit</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_10" id="v_10" value="<?php echo $detail['V_10'] ?>" readonly disabled="d isabled">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;APTT</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_11" id="v_11" value="<?php echo $detail['V_11'] ?>" readonly disabled="d isabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">HT</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_12" id="v_12" value="<?php echo $detail['V_12'] ?>" readonly disabled="d isabled">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">PT</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_13" id="v_13" value="<?php echo $detail['V_13'] ?>" readonly disabled="d isabled">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">Lain2</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_14" id="v_14" value="<?php echo $detail['V_14'] ?>" readonly disabled="d isabled">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">4. Cek EKG (untuk pasien > 40 Tahun)</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_08" id="t_08_ya" <?php echo ($detail['T_08'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_08_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_08" id="t_08_tidak" value="0">
                                    <label for="t_08_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">5. Cek Pencitraan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_15" id="v_15" value="<?php echo $detail['V_15'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_09" id="t_09_ya" <?php echo ($detail['T_09'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_09_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_09" id="t_09_tidak" <?php echo ($detail['T_09'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_09_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">6. Cek Pemeriksaan Penunjang Lain </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_16" id="v_16" value="<?php echo $detail['V_16'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_010" id="t_010_ya" <?php echo ($detail['T_010'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_010_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_010" id="t_010_tidak" <?php echo ($detail['T_010'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_010_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">7. Cek Alat Bed Side Monitor</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_011" id="t_011_ya" <?php echo ($detail['T_011'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_011_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_011" id="t_011_tidak" <?php echo ($detail['T_011'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_011_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Cek Alat Instrument yang Telah Steril</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_012" id="t_012_ya" <?php echo ($detail['T_012'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_012_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_012" id="t_012_tidak" <?php echo ($detail['T_012'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_012_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Cek Mesin Suction</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_013" id="t_013_ya" <?php echo ($detail['T_013'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_013_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_013" id="t_013_tidak" <?php echo ($detail['T_013'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_013_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Cek Meja Operasi</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_014" id="t_014_ya" <?php echo ($detail['T_014'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_014_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_014" id="t_014_tidak" <?php echo ($detail['T_014'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_014_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">8. Apakah alat telah steril ?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_015" id="t_015_ya" <?php echo ($detail['T_015'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_015_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_015" id="t_015_tidak" <?php echo ($detail['T_015'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_015_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">9. Apakah persiapan obat anesthesia/sedasi?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_016" id="t_016_ya" <?php echo ($detail['T_016'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_016_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_016" id="t_016_tidak" <?php echo ($detail['T_016'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_016_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                    </td>
                    <td width="35%">


                        <p>10. Apakah pasien memiliki riwayat :</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Alergi obat (secara umum)?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_017" id="t_017_ya" <?php echo ($detail['T_017'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_017_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_017" id="t_017_tidak" <?php echo ($detail['T_017'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_017_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Alergi Premedikasi?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_018" id="t_018_ya" <?php echo ($detail['T_018'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_018_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_018" id="t_018_tidak" <?php echo ($detail['T_018'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_018_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Asthma?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_019" id="t_019_ya" <?php echo ($detail['T_019'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_019_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_019" id="t_019_tidak" <?php echo ($detail['T_019'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_019_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Lain-lain</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_17" id="v_17" value="<?php echo $detail['V_17'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_020" id="t_020_ya" <?php echo ($detail['T_020'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_020_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_020" id="t_020_tidak" <?php echo ($detail['T_020'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_020_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">11. Apakah pasien memiliki resiko jatuh?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_021" id="t_021_ya" <?php echo ($detail['T_021'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_021_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_021" id="t_021_tidak" <?php echo ($detail['T_021'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_021_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">12. Apakah pasien telah menggunakan pakaian tindakan?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_022" id="t_022_ya" <?php echo ($detail['T_022'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_022_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_022" id="t_022_tidak" <?php echo ($detail['T_022'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_022_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">13. Apakah pasien telah diinfus/IV line?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_023" id="t_023_ya" <?php echo ($detail['T_023'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_023_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_023" id="t_023_tidak" <?php echo ($detail['T_023'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_023_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">14. Apakah pasien telah melepaskan gigi palsu dan kacamata?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_024" id="t_024_ya" <?php echo ($detail['T_024'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_024_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_024" id="t_024_tidak" <?php echo ($detail['T_024'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_024_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label"><strong>TIME OUT</strong> pukul</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="time" name="v_18" id="v_18" value="<?php echo $detail['V_18'] ?>" readonly>
                            </div>
                        </div>

                        <p>(Dilakukan sebelm dokter melakukan tindakan)</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">1. Tim medis telah memperkenalkan nama dan peran masing-masing</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_025" id="t_025_ya" <?php echo ($detail['T_025'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_025_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_025" id="t_025_tidak" <?php echo ($detail['T_025'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_025_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <p>2. Dokter/perawat melakukan konfirmasi verbal : </p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Nama Pasien</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_026" id="t_026_ya" <?php echo ($detail['T_026'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_026_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_026" id="t_026_tidak" <?php echo ($detail['T_026'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_026_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Lahir</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_027" id="t_027_ya" <?php echo ($detail['T_027'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_027_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_027" id="t_027_tidak" <?php echo ($detail['T_027'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_027_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tindakan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_028" id="t_028_ya" <?php echo ($detail['T_028'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_028_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_028" id="t_028_tidak" <?php echo ($detail['T_028'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_028_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">3. Apakah hasil pemeriksaan sebelumnya tersedia</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_029" id="t_029_ya" <?php echo ($detail['T_029'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_029_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_029" id="t_029_tidak" <?php echo ($detail['T_029'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_029_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label"><strong>SIGN OUT</strong> pukul</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="time" name="v_19" id="v_19" value="<?php echo $detail['V_19'] ?>" readonly>
                            </div>
                        </div>

                        <p>Dilakukan sebelum pasien meninggalkan ruang tindakan dan diruang pemulihan diisi oleh perawat</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">1. Tim medis mengkonfirmasi secara verbal nama prosedur</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_030" id="t_030_ya" <?php echo ($detail['T_030'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_030_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_030" id="t_030_tidak" <?php echo ($detail['T_030'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_030_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">2. Label identitas pasien pada spesimen biopsi</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_031" id="t_031_ya" <?php echo ($detail['T_031'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_031_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_031" id="t_031_tidak" <?php echo ($detail['T_031'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_031_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Nama Pasien : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_20" id="v_20" value="<?php echo $detail['V_20'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Lahir : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="date" name="v_21" id="v_21" value="<?php echo $detail['V_21'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;No. Rekam Medis : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_22" id="v_22" value="<?php echo $detail['V_22'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_032" id="t_032_laki" <?php echo ($detail['T_032'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_032_laki">Laki-laki</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_032" id="t_032_perempuan" <?php echo ($detail['T_032'] == "2" ? 'checked' : ''); ?> disabled>
                                    <label for="t_032_perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Tindakan : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="date" name="v_23" id="v_23" value="<?php echo $detail['V_23'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Lokasi Pengambilan : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_24" id="v_24" value="<?php echo $detail['V_24'] ?>" readonly disabled="d isabled">
                            </div>
                        </div>

                    </td>
                    <td width="30%">

                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">3. Kondisi Alat dalam keadaan baik</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_033" id="t_033_ya" <?php echo ($detail['T_033'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_033_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_033" id="t_033_tidak" <?php echo ($detail['T_033'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_033_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">4. Foto USG bila diperlukan</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_034" id="t_034_ya" <?php echo ($detail['T_034'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_034_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_034" id="t_034_tidak" <?php echo ($detail['T_034'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_034_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">5. Observasi Pemulihan</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_035" id="t_035_ya" <?php echo ($detail['T_035'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_035_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_035" id="t_035_tidak" <?php echo ($detail['T_035'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_035_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Kesadaran :</p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="t_036_cm" name="t_036" <?php echo ($detail['T_036'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_036_cm">Compos Mentis</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_037_del" name="t_037" <?php echo ($detail['T_037'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_037_del">Delirium</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_038_coma" name="t_038" <?php echo ($detail['T_038'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_038_coma">Coma</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_039_sam" name="t_039" <?php echo ($detail['T_039'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_039_sam">Samnolen</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_040_sc" name="t_040" <?php echo ($detail['T_040'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_040_sc">Soporo coma</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Gangguan Sistem Pernafasan : </p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hipoksia</p>
                            <div class="col-md-7">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sumbatan jalan nafas </label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_041" id="t_041_ya" <?php echo ($detail['T_041'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_041_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_041" id="t_041_tidak" <?php echo ($detail['T_041'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_041_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;- Gangguan Sistem Kardiovaskuler Arithima</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_042" id="t_042_ya" <?php echo ($detail['T_042'] == "1" ? 'checked' : ''); ?> disabled>
                                    <label for="t_042_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_042" id="t_042_tidak" <?php echo ($detail['T_042'] == "0" ? 'checked' : ''); ?> disabled>
                                    <label for="t_042_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;Diketahui</p>

                        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;Operator</label>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<div id="ttd"></div>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="v_25" name="v_25" class="form-control-sm" value="<?php echo $detail['V_25'] ?>" readonly size="25px">
                        <br>
                        <br>
                        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;Perawat</label>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<div id="ttd_1"></div>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="v_26" name="v_26" class="form-control-sm" value="<?php echo $detail['V_26'] ?>" readonly size="25px">
                        <br>
                        <br>
                        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;Dokter Anastesi</label>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<div id="ttd_2"></div>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="v_27" name="v_27" class="form-control-sm" value="<?php echo $detail['V_27'] ?>" readonly size="25px">
                        <br>

                        <br>
                        <br>
                        <strong>
                            <p>Beri tanda √ pada kotak yang sesui pernyataan untuk pernyataan Ya/Tidak</p>
                        </strong>
                    </td>
                </tr>
            </table>
        </div>
    </form>


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