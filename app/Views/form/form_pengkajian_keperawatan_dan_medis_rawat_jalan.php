<?php
$db = db_connect();

foreach ($dataAssessmentpkmrj as $row) {
};
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PENGKAJIAN KEPERAWATAN DAN MEDIS RAWAT JALAN/title>

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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

        <script>
            $(function() {
                var sig = $('#sig').signature();
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
                var sig = $('#sig1').signature();
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
            var i = 18;
            var no = 1;

            function addRow(tableID) {

                i1 = no + 1;
                i2 = i + 1;
                i3 = i + 2;

                $("#" + tableID).append($("<tr>")
                    .append($("<td>").html(i1))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i + '" placeholder="Nama Obat"></div>'))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i2 + '" placeholder="Dosis"></div>'))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i3 + '" placeholder="Lama Penggunaan"></div>'))

                )

                i += 3;
                no += 1;


            }
        </script>

        <script type="text/javascript">
            var j = 59;
            var no1 = 1;

            function addRow1(tableID) {

                j1 = no1 + 1;
                j2 = j + 1;

                $("#" + tableID).append($("<tr>")
                    .append($("<td>").html(j1))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + j + '" placeholder="Diagnosa Medis"></div>'))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + j2 + '" placeholder="Tata Laksana Medis"></div>'))
                )
                j += 2;
                no1 += 1;
            }
        </script>

        <script>
            $("#temperature, #weight, #height").keydown(function(e) {
                !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
            });
        </script>

        <script type="text/javascript">
            $(function f1() {
                $("input[name='t_02']").click(function f1() {
                    if ($("#t_02_lainnya").is(":checked")) {
                        $("#v_05").removeAttr("disabled");
                        $("#v_05").focus();
                    } else {
                        $("#v_05").attr("disabled", true);
                        $("#v_05").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f2() {
                $("input[name='t_03']").click(function f2() {
                    if ($("#t_03_lainnya").is(":checked")) {
                        $("#v_06").removeAttr("disabled");
                    } else {
                        $("#v_06").attr("disabled", true);
                        $("#v_06").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f3() {
                $("input[name='t_03']").click(function f3() {
                    if ($("#t_03_lainnyaa").is(":checked")) {
                        $("#v_07").removeAttr("disabled");
                    } else {
                        $("#v_07").attr("disabled", true);
                        $("#v_07").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f4() {
                $("input[name='t_03']").click(function f4() {
                    if ($("#t_03_lainnyaaa").is(":checked")) {
                        $("#v_08").removeAttr("disabled");
                    } else {
                        $("#v_08").attr("disabled", true);
                        $("#v_08").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f5() {
                $("input[name='t_06']").click(function f5() {
                    if ($("#t_06_ada").is(":checked")) {
                        $("#Riwayat_alergi").removeAttr("disabled");
                        $("#Riwayat_alergi").focus();
                    } else {
                        $("#Riwayat_alergi").attr("disabled", true);
                        $("#Riwayat_alergi").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f6() {
                $("input[name='t_010']").click(function f5() {
                    if ($("#t_010_rujuk").is(":checked")) {
                        $("#v_77").removeAttr("disabled");
                        $("#v_77").focus();
                    } else {
                        $("#v_77").attr("disabled", true);
                        $("#v_77").val("");
                    }
                });
            });
        </script>

</head>

<body>

    <div class="container mt-5">
        <a class="btn btn-primary" href="<?= site_url('home/index') ?>" role="button">Back</a>
    </div>

    <div class="container mt-5">
        <table class="table text">
            <tr>
                <td width="5%" align="right">
                    <img src="<?= base_url('assets/logo.jpeg') ?>" width="65px">
                </td>
                <td width="60%" colspan="4">
                    <h5>RSUD Dr. M. Yunus Bengkulu </h5>
                    <h5>Badan Layanan Umum Daerah</h5>
                    <strong>
                        <p style="font-size:12px">Jl. Bhayangkara Bengkulu 38229 Telp. (0736) 52004 - 52006 Fax. (0736) 52007</p>
                    </strong>
                </td>
                <td width="35%" rowspan="4">
                    <h6>RM. 01 Lanjutan RAWAT JALAN</h6>
                    <br>

                    <div class="container" style="border:2px solid black; border-radius: 20px;">
                        <div class="row">
                            <div class="col-5">
                                <label>No.RM</label>
                            </div>
                            <div class="col-7">
                                <input class="form-control" type="text" name="no_Registration" id="no_Registration" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label>Nama Lengkap</label>
                            </div>
                            <div class="col-7">
                                <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $row->THENAME; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label>Tanggal Lahir</label>
                            </div>
                            <div class="col-7">
                                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row->DATE_OF_BIRTH; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label>NIK</label>
                            </div>
                            <div class="col-7">
                                <input class="form-control" type="text" name="thenik" id="thenik" value="<?php echo $row->THENIK; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <h4 class="text-center">PENGKAJIAN AWAL KEPERAWATAN DAN MEDIS <br> RAWAT JALAN</h4>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <strong>
                        <p class="text-center">(Harus dilengkapi 2 jam setelah pasien berobat dipoli rawat jalan)</p>
                    </strong>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="row align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="t_01_nonkronis" name="t_01">
                            <label for="t_01_nonkronis">Non Kronis (1 Bulan)</label>
                        </div>
                    </div>
                </td>
                <td></td>
                <td>
                    <div class="row align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="t_01_kronis" name="t_01">
                            <label for="t_01_kronis">Kronis (3 Bulan)</label>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </table>

        <table class="table table-bordered" style="border: 2px solid black">
            <tr>
                <td>
                    <h6><label class="col-form-label">12. DAFTAR MASALAH KEPERAWATAN</label></h6>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_nyeriakut" name="t_02">
                                            <label for="t_02_nyeriakut">Nyeri Akut/Kronis</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_jalannnafas" name="t_02">
                                            <label for="t_02_jalannnafas">Bersihan Jalan Napas tidak Efektif</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_integritaskulit" name="t_02">
                                            <label for="t_02_integritaskulit">Gangguan Integritas Kulit</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_hipertermi" name="t_02">
                                            <label for="t_02_hipertermi">Hipertermi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_nafas" name="t_02">
                                            <label for="t_02_nafas">Pola Napas tidak Efektif</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_nutrisi" name="t_02">
                                            <label for="t_02_nutrisi">Risiko / Defisit Nutrsi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_nausia" name="t_02">
                                            <label for="t_02_nausia">Nausia</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_elektrolit" name="t_02">
                                            <label for="t_02_elektrolit">Resiko Ketidakseimbangan Cairan dan Elektrolit</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_ansietas" name="t_02">
                                            <label for="t_02_ansietas">Ansietas</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_eliminasi" name="t_02">
                                            <label for="t_02_eliminasi">Gangguan Eliminasi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_mobilitas" name="t_02">
                                            <label for="t_02_mobilitas">Gangguan Mobilitas Fisik</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_lainnya" name="t_02">
                                            <label for="t_02_lainnya">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_05" id="v_05" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_02_pertumbuhan" name="t_02">
                                            <label for="t_02_pertumbuhan">Gangguan pertumbuhan / perkembangan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6><label class="col-form-label">13. RENCANA KEPERAWATAN</label></h6>
                    <div class="container">
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_monitor" name="t_03">
                                            <label for="t_03_monitor">Monitor Tanda Vital</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_managemen" name="t_03">
                                            <label for="t_03_managemen">Ajarkan Managemen Nyeri</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_bbtb" name="t_03">
                                            <label for="t_03_bbtb">Timbang BB / Ukur TB</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_luka" name="t_03">
                                            <label for="t_03_luka">Perawatan Luka</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_nafasbatuk" name="t_03">
                                            <label for="t_03_nafasbatuk">Ajarkan Nafas Dalam dan Batuk Efektif</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_lainnya" name="t_03">
                                            <label for="t_03_lainnya">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_06" id="v_06" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_lainnyaa" name="t_03">
                                            <label for="t_03_lainnyaa">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_07" id="v_07" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_03_lainnyaaa" name="t_03">
                                            <label for="t_03_lainnyaaa">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_08" id="v_08" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>B. DATA MEDIS</h5>
                </td>
            </tr>
            <tr class="text-center">
                <td>
                    <p>Berikan Tanda (√) pada Kolom yang Anda Anggap Masuk</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <label class="col-form-label">Tanggal berobat di ruang poliklinik : </label>
                                </div>
                                <div class="col-md-5">
                                    <input class="form-control" type="date" name="v_09" id="v_09">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <label class="col-form-label">Jam</label>
                                </div>
                                <div class="col-md-5">
                                    <input class="form-control" type="time" name="v_10" id="v_10">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <strong><label class="col-form-label">Anamnesa : </label></strong>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="t_04_autoanamnesa" name="t_04">
                                    <strong><label for="t_04_autoanamnesa">Auto Anamnesa</label></strong>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_04_aloanamnesa" name="t_04">
                                        <strong><label for="t_04_aloanamnesa">Alo Anamnesa</label></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <label class="col-form-label">Keluhan Utama</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" name="anamnase" id="anamnase" cols="5" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <label class="col-form-label">Riwayat Penyakit Sekarang</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" name="v_12" id="v_12" cols="5" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <label class="col-form-label">Riwayat Penyakit Dahulu</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" name="v_13" id="v_13" cols="5" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <label class="col-form-label">Riwayat Penyakit Keluargas</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" name="v_14" id="v_14" cols="5" rows="2"></textarea>
                        </div>
                    </div>

                    <br>
                    <p>Riwayat Pengobatan (termasuk obat yang sedang dikonsumsi)</p>
                    <table class="w-full table table-striped table-bordered table-hover text-center" style="border: 1px solid black" id="table">
                        <thead>
                            <tr>
                                <th width="10%">Nomor</th>
                                <th width="35%">Nama Obat</th>
                                <th width="20">Dosis</th>
                                <th width="35">Lama Penggunaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbody2">
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="v_15" placeholder="Nama Obat">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="v_16" placeholder="Dosis">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="v_17" placeholder="Lama Penggunaan">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" align="center">
                                    <button type="button" class="btn btn-primary" onclick="addRow('tbody2')">Tambah Baris</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="row">
                        <div class="col-md-2">
                            <label class="col">Riwayat Alergi</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="t_06_tidak" name="t_06">
                                <label for="t_06_tidak">Tidak Ada</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="t_06_ada" name="t_06">
                                <label for="t_06_ada">Ada, Sebutkan</label>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-10">
                                    <textarea class="form-control" name="Riwayat_alergi" id="Riwayat_alergi" cols="10" rows="4" disabled="disabled"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <h6 class="text-center">PEMERIKSAAN FISIK</h6>
                    <p>Status Generalis</p>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <label>Keadaan Umum</label>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_07_baik" name="t_07">
                                            <label for="t_07_baik">Baik</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_07_sedang" name="t_07">
                                            <label for="t_07_sedang">Sedang</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_07_kurang" name="t_07">
                                            <label for="t_07_kurang">Kurang</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_07_buruk" name="t_07">
                                            <label for="t_07_buruk">Buruk</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <label>Keadaan Gizi</label>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_08_baik" name="t_08">
                                            <label for="t_08_baik">Baik</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_08_sedang" name="t_08">
                                            <label for="t_08_sedang">Sedang</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_08_kurang" name="t_08">
                                            <label for="t_08_kurang">Kurang</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_08_buruk" name="t_08">
                                            <label for="t_08_buruk">Buruk</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <label class="col-form-label">OCS</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">E</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_45" id="v_45">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">M</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_46" id="v_46">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">V</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_47" id="v_47">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">Tekanan Darah</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="text" name="tension_upper" id="tension_upper">
                                    </div>
                                    <div class="col-md-1">
                                        <label>/</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="form-control" type="text" name="tension_below" id="tension_below">
                                    </div>
                                    <div class="col-md-1">
                                        <label>mmHg</label>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">Suhu</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="temperature" id="temperature">
                                    </div>
                                    <div class="col-md-1">
                                        <label>C</label>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">Berat Badan</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="weight" id="weight">
                                    </div>
                                    <div class="col-md-1">
                                        <label>Kg</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">Nadi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="nadi" id="nadi">
                                    </div>
                                    <div class="col-md-1">
                                        <label>x/menit</label>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">Pernafasan</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="nafas" id="nafas">
                                    </div>
                                    <div class="col-md-1">
                                        <label>x/menit</label>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">Tinggi Badan</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="height" id="height">
                                    </div>
                                    <div class="col-md-1">
                                        <label>cm</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <table class="table table-bordered" style="border: 2px solid black">
                        <tr>
                            <td>Kepala</td>
                            <td><input class="form-control" type="text" name="v_48" id="v_48"></td>
                        </tr>
                        <tr>
                            <td>Leher</td>
                            <td><input class="form-control" type="text" name="v_49" id="v_49"></td>
                        </tr>
                        <tr>
                            <td>Thoraks</td>
                            <td><input class="form-control" type="text" name="v_50" id="v_50"></td>
                        </tr>
                        <tr>
                            <td>Abdomen</td>
                            <td><input class="form-control" type="text" name="v_51" id="v_51"></td>
                        </tr>
                        <tr>
                            <td>Urogenitalia</td>
                            <td><input class="form-control" type="text" name="v_52" id="v_52"></td>
                        </tr>
                        <tr>
                            <td>Extremitas</td>
                            <td><input class="form-control" type="text" name="v_53" id="v_53"></td>
                        </tr>
                        <tr>
                            <td>Status Lokalis</td>
                            <td><input class="form-control" type="text" name="lokalis" id="lokalis"></td>
                        </tr>

                    </table>

                    <h6>STATUS LOKALIS</h6>
                    <table class="table table-bordered" style="border: 2px solid black">
                        <tr>
                            <td><textarea class="form-control" name="lokalis" id="lokalis" cols="6" rows="5"></textarea></td>
                        </tr>
                    </table>

                    <h6>PEMERIKSAAN PENUNJANG</h6>
                    <table class="table table-bordered" style="border: 2px solid black">
                        <tr>
                            <td><textarea class="form-control" name="v_56" id="v_56" cols="6" rows="5"></textarea></td>
                        </tr>
                    </table>

                    <h6>DAFTAR MASALAH MEDIS PRIORITAS</h6>
                    <table class="w-full table table-striped table-bordered table-hover text-center" style="border: 2px solid black">
                        <thead>
                            <tr>
                                <th width="10%">Action</th>
                                <th width="40%">MASALAH / DIAGNOSA MEDIS</th>
                                <th width="40%">TATA LAKSANA MEDIS</th>
                            </tr>
                        </thead>
                        <tbody id="tbody3">
                            <tr>
                                <td>1</td>
                                <td>
                                    <input type="text" class="form-control" name="v_57" placeholder="Diagnosa Medis">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="v_58" placeholder="Tata Laksana Medis">
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td colspan="3" align="center">
                                <button type="button" class="btn btn-primary" onclick="addRow1('tbody3')">Tambah Baris</button>
                            </td>
                        </tfoot>
                    </table>

                    <h6>RENCANA TINDAK LANJUT</h6>
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_010_masukrs" name="t_010">
                                        <label for="t_010_masukrs">Masuk Rumah Sakit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_010_rujuk" name="t_010">
                                        <label for="t_010_rujuk">Rujuk</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" type="text" name="v_77" id="v_77" disabled="disabled">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_010_kontrol" name="t_010">
                                        <label for="t_010_kontrol">Kontrol Ulang</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <table class="table table-bordered" style="border: 2px solid black">
                        <tr>
                            <td width="50%" class="text-center">
                                <label>Dokter Pemeriksa</label><br>
                                <div id="sig"></div><br>
                                <input type="text" id="v_78" name="v_78" size="25px">
                            </td>
                            <td width="50%" class="text-center">
                                <label>Perawat Yang Melakukan Pengkajian</label><br>
                                <div id="sig1"></div><br>
                                <input type="text" id="v_79" name="v_79" size="25px">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tanggal & Jam Pengkajian Selesai Dilengkapi :</p>
                            </td>
                            <td>
                                <div class="col-md-7">
                                    <input class="form-control" type="datetime-local" name="v_80" id="v_80">
                                </div>
                            </td>
                        </tr>
                    </table>

                </td>


            </tr>

        </table>

        <div class="d-grid gap-2 mb-3">
            <button class="btn btn-primary" type="button">Simpan</button>
        </div>

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