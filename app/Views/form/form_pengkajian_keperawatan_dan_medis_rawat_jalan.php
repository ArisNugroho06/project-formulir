<!-- $db = db_connect();
foreach ($dataAssessmentpkmrj as $row) {
}; -->


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
            var i = 12;
            var no = 1;

            function addRow(tableID) {

                i1 = no + 1;
                i2 = i + 1;
                i3 = i + 2;

                $("#" + tableID).append($("<tr>")
                    .append($("<td>").html(i1))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i + '" name="v_' + i + '" placeholder="Nama Obat"></div>'))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i2 + '" name="v_' + i2 + '" placeholder="Dosis"></div>'))
                    .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i2 + '" name="v_' + i3 + '" placeholder="Lama Penggunaan"></div>'))

                )

                i += 3;
                no += 1;


            }
        </script>

        <script type="text/javascript">
            var j = 49;
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
            $("#temperature, #weight, #height, #tension_upper, #tension_bellow, #nadi, #nafas").keydown(function(e) {
                !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
            });
        </script>

        <script type="text/javascript">
            $(function f1() {
                $("input[name='t_013']").click(function f1() {
                    if ($("#t_013_lainnya").is(":checked")) {
                        $("#v_01").removeAttr("disabled");
                        $("#v_01").focus();
                    } else {
                        $("#v_01").attr("disabled", true);
                        $("#v_01").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f2() {
                $("input[name='t_020']").click(function f2() {
                    if ($("#t_020_lainnya").is(":checked")) {
                        $("#v_02").removeAttr("disabled");
                        $("#v_02").focus();
                    } else {
                        $("#v_02").attr("disabled", true);
                        $("#v_02").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f3() {
                $("input[name='t_021']").click(function f3() {
                    if ($("#t_021_lainnyaa").is(":checked")) {
                        $("#v_03").removeAttr("disabled");
                        $("#v_03").focus();
                    } else {
                        $("#v_03").attr("disabled", true);
                        $("#v_03").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f4() {
                $("input[name='t_022']").click(function f4() {
                    if ($("#t_022_lainnyaaa").is(":checked")) {
                        $("#v_04").removeAttr("disabled");
                        $("#v_04").focus();
                    } else {
                        $("#v_04").attr("disabled", true);
                        $("#v_04").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f5() {
                $("input[name='t_024']").click(function f5() {
                    if ($("#t_024_ada").is(":checked")) {
                        $("#riwayat_alergi").removeAttr("disabled");
                        $("#riwayat_alergi").focus();
                    } else {
                        $("#riwayat_alergi").attr("disabled", true);
                        $("#riwayat_alergi").val("");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function f6() {
                $("input[name='t_027']").click(function f5() {
                    if ($("#t_027_rujuk").is(":checked")) {
                        $("#v_49").removeAttr("disabled");
                        $("#v_49").focus();
                    } else {
                        $("#v_49").attr("disabled", true);
                        $("#v_49").val("");
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
        <form action="<?= site_url('formulir/addaksi') ?>" method="post" autocomplete="off">
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
                                    <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $psn[0]->NO_REGISTRATION; ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>Nama Lengkap</label>
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $psn[0]->THENAME; ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $psn[0]->DATE_OF_BIRTH; ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>NIK</label>
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="text" name="thenik" id="thenik" value="<?php echo $psn[0]->THENIK; ?>" readonly>
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
                                <input class="form-check-input" type="radio" id="t_01_nonkronis" name="t_01" value="1">
                                <label for="t_01_nonkronis">Non Kronis (1 Bulan)</label>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="row align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="t_01_kronis" name="t_01" value="2">
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
                                                <input class="form-check-input" type="checkbox" id="t_02_nyeriakut" name="t_02" value="1">
                                                <label for="t_02_nyeriakut">Nyeri Akut/Kronis</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_03_jalannnafas" name="t_03" value="1">
                                                <label for="t_03_jalannnafas">Bersihan Jalan Napas tidak Efektif</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_04_integritaskulit" name="t_04" value="1">
                                                <label for="t_04_integritaskulit">Gangguan Integritas Kulit</label>
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
                                                <input class="form-check-input" type="checkbox" id="t_05_hipertermi" name="t_05" value="1">
                                                <label for="t_05_hipertermi">Hipertermi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_06_nafas" name="t_06" value="1">
                                                <label for="t_06_nafas">Pola Napas tidak Efektif</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_07_nutrisi" name="t_07" value="1">
                                                <label for="t_07_nutrisi">Risiko / Defisit Nutrsi</label>
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
                                                <input class="form-check-input" type="checkbox" id="t_08_nausia" name="t_08" value="1">
                                                <label for="t_08_nausia">Nausia</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_09_elektrolit" name="t_09" value="1">
                                                <label for="t_09_elektrolit">Resiko Ketidakseimbangan Cairan dan Elektrolit</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_010_ansietas" name="t_010" value="1">
                                                <label for="t_010_ansietas">Ansietas</label>
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
                                                <input class="form-check-input" type="checkbox" id="t_011_eliminasi" name="t_011" value="1">
                                                <label for="t_011_eliminasi">Gangguan Eliminasi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_012_mobilitas" name="t_012" value="1">
                                                <label for="t_012_mobilitas">Gangguan Mobilitas Fisik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_013_lainnya" name="t_013" value="1">
                                                <label for="t_013_lainnya">Lainnya</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_01" id="v_01" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_014_pertumbuhan" name="t_014" value="1">
                                                <label for="t_014_pertumbuhan">Gangguan pertumbuhan / perkembangan</label>
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
                                                <input class="form-check-input" type="checkbox" id="t_015_monitor" name="t_015" value="1">
                                                <label for="t_015_monitor">Monitor Tanda Vital</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_016_managemen" name="t_016" value="1">
                                                <label for="t_016_managemen">Ajarkan Managemen Nyeri</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_017_bbtb" name="t_017" value="1">
                                                <label for="t_017_bbtb">Timbang BB / Ukur TB</label>
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
                                                <input class="form-check-input" type="checkbox" id="t_018_luka" name="t_018" value="1">
                                                <label for="t_018_luka">Perawatan Luka</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_019_nafasbatuk" name="t_019" value="1">
                                                <label for="t_019_nafasbatuk">Ajarkan Nafas Dalam dan Batuk Efektif</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_020_lainnya" name="t_020" value="1">
                                                <label for="t_020_lainnya">Lainnya</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_02" id="v_02" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_021_lainnyaa" name="t_021" value="1">
                                                <label for="t_021_lainnyaa">Lainnya</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_03" id="v_03" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_022_lainnyaaa" name="t_022" value="1">
                                                <label for="t_022_lainnyaaa">Lainnya</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_04" id="v_04" disabled="disabled">
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
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Tanggal dan Jam berobat di ruang poliklinik : </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="datetime-local" name="v_05" id="v_05">
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
                                        <input class="form-check-input" type="radio" id="t_023_autoanamnesa" name="t_023" value="1">
                                        <strong><label for="t_023_autoanamnesa">Auto Anamnesa</label></strong>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_023_aloanamnesa" name="t_023" value="2">
                                            <strong><label for="t_023_aloanamnesa">Alo Anamnesa</label></strong>
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
                                <textarea class="form-control" name="anamnase" id="anamnase" cols="5" rows="3" readonly><?php echo $psn[0]->ANAMNASE; ?></textarea>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="col-form-label">Riwayat Penyakit Sekarang</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" name="v_06" id="v_06" cols="5" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="col-form-label">Riwayat Penyakit Dahulu</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" name="v_07" id="v_07" cols="5" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="col-form-label">Riwayat Penyakit Keluargas</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" name="v_08" id="v_08" cols="5" rows="2"></textarea>
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
                                            <input type="text" class="form-control" name="v_09" placeholder="Nama Obat">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="v_10" placeholder="Dosis">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="v_11" placeholder="Lama Penggunaan">
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
                                    <input class="form-check-input" type="radio" id="t_024_tidak" name="t_024" value="0">
                                    <label for="t_024_tidak">Tidak Ada</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="t_024_ada" name="t_024" value="1">
                                    <label for="t_024_ada">Ada, Sebutkan</label>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="riwayat_alergi" id="riwayat_alergi" cols="10" rows="4" disabled="disabled"></textarea>
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
                                                <input class="form-check-input" type="radio" id="t_025_baik" name="t_025" value="1">
                                                <label for="t_025_baik">Baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_025_sedang" name="t_025" value="2">
                                                <label for="t_025_sedang">Sedang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_025_kurang" name="t_025" value="3">
                                                <label for="t_025_kurang">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_025_buruk" name="t_025" value="4">
                                                <label for="t_025_buruk">Buruk</label>
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
                                                <input class="form-check-input" type="radio" id="t_026_baik" name="t_026" value="1">
                                                <label for="t_026_baik">Baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_026_sedang" name="t_026" value="2">
                                                <label for="t_026_sedang">Sedang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_026_kurang" name="t_026" value="3">
                                                <label for="t_026_kurang">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_026_buruk" name="t_026" value="4">
                                                <label for="t_026_buruk">Buruk</label>
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
                                                <input class="form-control" type="text" name="v_39" id="v_39">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <label class="col-form-label">M</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="v_40" id="v_40">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <label class="col-form-label">V</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="v_41" id="v_41">
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
                                <td><input class="form-control" type="text" name="v_42" id="v_42"></td>
                            </tr>
                            <tr>
                                <td>Leher</td>
                                <td><input class="form-control" type="text" name="v_43" id="v_43"></td>
                            </tr>
                            <tr>
                                <td>Thoraks</td>
                                <td><input class="form-control" type="text" name="v_44" id="v_44"></td>
                            </tr>
                            <tr>
                                <td>Abdomen</td>
                                <td><input class="form-control" type="text" name="v_43" id="v_43"></td>
                            </tr>
                            <tr>
                                <td>Urogenitalia</td>
                                <td><input class="form-control" type="text" name="v_44" id="v_44"></td>
                            </tr>
                            <tr>
                                <td>Extremitas</td>
                                <td><input class="form-control" type="text" name="v_45" id="v_45"></td>
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
                                <td><textarea class="form-control" name="v_46" id="v_46" cols="6" rows="5"></textarea></td>
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
                                        <input type="text" class="form-control" name="v_47" placeholder="Diagnosa Medis">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="v_48" placeholder="Tata Laksana Medis">
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
                                            <input class="form-check-input" type="radio" id="t_027_masukrs" name="t_027" value="1">
                                            <label for="t_027_masukrs">Masuk Rumah Sakit</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_027_rujuk" name="t_027" value="2">
                                            <label for="t_027_rujuk">Rujuk</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_49" id="v_49" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_027_kontrol" name="t_027" value="3">
                                            <label for="t_027_kontrol">Kontrol Ulang</label>
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
                                    <input type="text" id="v_67" name="v_67" size="25px">
                                </td>
                                <td width="50%" class="text-center">
                                    <label>Perawat Yang Melakukan Pengkajian</label><br>
                                    <div id="sig1"></div><br>
                                    <input type="text" id="v_68" name="v_68" size="25px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tanggal & Jam Pengkajian Selesai Dilengkapi :</p>
                                </td>
                                <td>
                                    <div class="col-md-7">
                                        <input class="form-control" type="datetime-local" name="v_69" id="v_69">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>


                </tr>

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