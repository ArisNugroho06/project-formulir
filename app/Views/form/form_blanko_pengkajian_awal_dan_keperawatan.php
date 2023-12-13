<!-- $db = db_connect();
foreach ($dataAssessmentformptk as $row) {
}; -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PENGKAJIAN AWAL KEPERAWATAN DAN MEDIS RAWAT JALAN</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>jQuery UI Signature Basics</title>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">
    <!--[if IE]>
    <script src="excanvas.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

    <script type="text/javascript">
        $(function f1() {
            $("input[name='t_01']").click(function f1() {
                if ($("#t_01_lainnya").is(":checked")) {
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
        $(function f4() {
            $("input[name='t_06']").click(function f4() {
                if ($("#t_06_lainnya").is(":checked")) {
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
        $(function f5() {
            $("input[name='t_07']").click(function f5() {
                if ($("#t_07_lainnya").is(":checked")) {
                    $("#v_06").removeAttr("disabled");
                    $("#v_06").focus();
                } else {
                    $("#v_06").attr("disabled", true);
                    $("#v_06").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f6() {
            $("input[name='t_08']").click(function f6() {
                if ($("#t_08_lainnya").is(":checked")) {
                    $("#v_07").removeAttr("disabled");
                    $("#v_07").focus();
                } else {
                    $("#v_07").attr("disabled", true);
                    $("#v_07").val("");
                    $("#v_07").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f7() {
            $("input[name='t_09']").click(function f7() {
                if ($("#t_09_ya").is(":checked")) {
                    $("#v_08").removeAttr("disabled");
                    $("#v_08").focus();
                } else {
                    $("#v_08").attr("disabled", true);
                    $("#v_08").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f8() {
            $("input[name='t_010']").click(function f8() {
                if ($("#t_010_ya").is(":checked")) {
                    $("#v_09").removeAttr("disabled");
                    $("#v_09").focus();
                    $("#v_10").removeAttr("disabled");
                    $("#v_11").removeAttr("disabled");
                } else {
                    $("#v_09").attr("disabled", true);
                    $("#v_09").val("");
                    $("#v_10").attr("disabled", true);
                    $("#v_10").val("");
                    $("#v_11").attr("disabled", true);
                    $("#v_11").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f9() {
            $("input[name='t_011']").click(function f9() {
                if ($("#t_011_ya").is(":checked")) {
                    $("#v_12").removeAttr("disabled");
                    $("#v_12").focus();
                    $("#v_13").removeAttr("disabled");
                } else {
                    $("#v_12").attr("disabled", true);
                    $("#v_12").val("");
                    $("#v_13").attr("disabled", true);
                    $("#v_13").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f10() {
            $("input[name='t_012']").click(function f10() {
                if ($("#t_012_ya").is(":checked")) {
                    $("#v_14").removeAttr("disabled");
                    $("#v_14").focus();
                } else {
                    $("#v_14").attr("disabled", true);
                    $("#v_14").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f11() {
            $("input[name='t_013']").click(function f11() {
                if ($("#t_013_ya").is(":checked")) {
                    $("#t_014_obat").removeAttr("disabled");
                    $("#t_015_makanan").removeAttr("disabled");
                    $("#t_016_lainnya").removeAttr("disabled");
                } else {
                    $("#t_014_obat").attr("disabled", true);
                    $("#t_014_obat").prop("checked", false);
                    $("#t_015_makanan").attr("disabled", true);
                    $("#t_015_makanan").prop("checked", false);
                    $("#t_016_lainnya").attr("disabled", true);
                    $("#t_016_lainnya").prop("checked", false);
                    $("#v_15").attr("disabled", true);
                    $("#v_15").val("");
                    $("#v_16").attr("disabled", true);
                    $("#v_16").val("");
                    $("#v_17").attr("disabled", true);
                    $("#v_17").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f12() {
            $("input[name='t_014']").click(function f12() {
                if ($("#t_014_obat").is(":checked")) {
                    $("#v_15").removeAttr("disabled");
                    $("#v_15").focus();
                } else {
                    $("#v_15").attr("disabled", true);
                    $("#v_15").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f13() {
            $("input[name='t_015']").click(function f13() {
                if ($("#t_015_makanan").is(":checked")) {
                    $("#v_16").removeAttr("disabled");
                    $("#v_16").focus();
                } else {
                    $("#v_16").attr("disabled", true);
                    $("#v_16").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f14() {
            $("input[name='t_016']").click(function f14() {
                if ($("#t_016_lainnya").is(":checked")) {
                    $("#v_17").removeAttr("disabled");
                    $("#v_17").focus();
                } else {
                    $("#v_17").attr("disabled", true);
                    $("#v_17").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f15() {
            $("input[name='t_017']").click(function f15() {
                if ($("#t_017_nyerikronis").is(":checked")) {
                    $("#v_19").removeAttr("disabled");
                    $("#v_19").focus();
                    $("#v_20").removeAttr("disabled");
                    $("#v_21").removeAttr("disabled");
                } else {
                    $("#v_19").attr("disabled", true);
                    $("#v_19").val("");
                    $("#v_20").attr("disabled", true);
                    $("#v_20").val("");
                    $("#v_21").attr("disabled", true);
                    $("#v_21").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f16() {
            $("input[name='t_018']").click(function f16() {
                if ($("#t_018_nyeriakut").is(":checked")) {
                    $("#v_22").removeAttr("disabled");
                    $("#v_23").removeAttr("disabled");
                    $("#v_24").removeAttr("disabled");
                    $("#v_22").focus();
                } else {
                    $("#v_22").attr("disabled", true);
                    $("#v_22").val("");
                    $("#v_23").attr("disabled", true);
                    $("#v_23").val("");
                    $("#v_24").attr("disabled", true);
                    $("#v_24").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f16() {
            $("input[name='t_019']").click(function f16() {
                if ($("#t_019_skornyeri").is(":checked")) {
                    $("#t_020").removeAttr("disabled");
                    $("#t_020").focus();
                } else {
                    $("#t_020").attr("disabled", true);
                    $("#t_020").val("0");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f17() {
            $("input[name='t_025']").click(function f17() {
                if ($("#t_025_lainnya").is(":checked")) {
                    $("#v_25").removeAttr("disabled");
                    $("#v_25").focus();
                } else {
                    $("#v_25").attr("disabled", true);
                    $("#v_25").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f18() {
            $("input[name='t_029']").click(function f18() {
                if ($("#t_029_ya").is(":checked")) {
                    $("#v_26").removeAttr("disabled");
                    $("#v_26").focus();
                } else {
                    $("#v_26").attr("disabled", true);
                    $("#v_26").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f19() {
            $("input[name='t_030']").click(function f19() {
                if ($("#t_030_bantuan").is(":checked")) {
                    $("#v_27").removeAttr("disabled");
                    $("#v_27").focus();
                } else {
                    $("#v_27").attr("disabled", true);
                    $("#v_27").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f20() {
            $("input[name='t_034']").click(function f20() {
                if ($("#t_034_ya").is(":checked")) {
                    $("#t_035").removeAttr("disabled");
                    $("#t_036").removeAttr("disabled");
                    $("#t_037").removeAttr("disabled");
                    $("#t_038").removeAttr("disabled");
                    $("#t_039").removeAttr("disabled");
                    $("#t_040").removeAttr("disabled");
                    $("#t_041").removeAttr("disabled");
                    $("#t_042").removeAttr("disabled");
                    $("#t_043").removeAttr("disabled");
                    $("#t_044").removeAttr("disabled");
                } else {
                    $("#t_035").attr("disabled", true);
                    $("#t_035").prop("checked", false);
                    $("#t_036").attr("disabled", true);
                    $("#t_036").prop("checked", false);
                    $("#t_037").attr("disabled", true);
                    $("#t_037").prop("checked", false);
                    $("#t_038").attr("disabled", true);
                    $("#t_038").prop("checked", false);
                    $("#t_039").attr("disabled", true);
                    $("#t_039").prop("checked", false);
                    $("#t_040").attr("disabled", true);
                    $("#t_040").prop("checked", false);
                    $("#t_041").attr("disabled", true);
                    $("#t_041").prop("checked", false);
                    $("#t_042").attr("disabled", true);
                    $("#t_042").prop("checked", false);
                    $("#t_043").attr("disabled", true);
                    $("#t_043").prop("checked", false);
                    $("#t_044").attr("disabled", true);
                    $("#t_044").prop("checked", false);
                    $("#v_29").attr("disabled", true);
                    $("#v_29").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f21() {
            $("input[name='t_043']").click(function f21() {
                if ($("#t_043").is(":checked")) {
                    $("#v_29").removeAttr("disabled");
                    $("#v_29").focus();
                } else {
                    $("#v_29").attr("disabled", true);
                    $("#v_29").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f22() {
            $("input[name='t_045']").click(function f22() {
                if ($("#t_045_ya").is(":checked")) {
                    $("#v_30").removeAttr("disabled");
                    $("#v_30").focus();
                } else {
                    $("#v_30").attr("disabled", true);
                    $("#v_30").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f23() {
            $("input[name='t_046']").click(function f23() {
                if ($("#t_046_ya").is(":checked")) {
                    $("#t_047").removeAttr("disabled");
                    $("#t_048").removeAttr("disabled");
                    $("#t_049").removeAttr("disabled");
                    $("#t_050").removeAttr("disabled");
                    $("#t_051").removeAttr("disabled");
                    $("#t_052").removeAttr("disabled");
                    $("#t_053").removeAttr("disabled");
                    $("#t_054").removeAttr("disabled");
                } else {
                    $("#t_047").attr("disabled", true);
                    $("#t_047").prop("checked", false);
                    $("#t_048").attr("disabled", true);
                    $("#t_048").prop("checked", false);
                    $("#t_049").attr("disabled", true);
                    $("#t_049").prop("checked", false);
                    $("#t_050").attr("disabled", true);
                    $("#t_050").prop("checked", false);
                    $("#t_051").attr("disabled", true);
                    $("#t_051").prop("checked", false);
                    $("#t_052").attr("disabled", true);
                    $("#t_052").prop("checked", false);
                    $("#t_053").attr("disabled", true);
                    $("#t_053").prop("checked", false);
                    $("#t_054").attr("disabled", true);
                    $("#t_054").prop("checked", false);
                    $("#v_31").attr("disabled", true);
                    $("#v_31").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f24() {
            $("input[name='t_054']").click(function f24() {
                if ($("#t_054").is(":checked")) {
                    $("#v_31").removeAttr("disabled");
                    $("#v_31").focus();
                } else {
                    $("#v_31").attr("disabled", true);
                    $("#v_31").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f25() {
            $("input[name='t_055']").click(function f25() {
                if ($("#t_055_ya").is(":checked")) {
                    $("#v_32").removeAttr("disabled");
                    $("#v_32").focus();
                } else {
                    $("#v_32").attr("disabled", true);
                    $("#v_32").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f26() {
            $("input[name='t_060']").click(function f26() {
                if ($("#t_060_tindakan").is(":checked")) {
                    $("#v_33").removeAttr("disabled");
                    $("#v_33").focus();
                } else {
                    $("#v_33").attr("disabled", true);
                    $("#v_33").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f27() {
            $("input[name='t_063']").click(function f27() {
                if ($("#t_063_lainnya").is(":checked")) {
                    $("#v_34").removeAttr("disabled");
                    $("#v_34").focus();
                } else {
                    $("#v_34").attr("disabled", true);
                    $("#v_34").val("");
                }
            });
        });
    </script>

    <script>
        $(function() {
            $('input.jumlah').click(function() {

                var nilai1 = parseInt($('input[name="t_031"]:checked').val());
                var nilai2 = parseInt($('input[name="t_032"]:checked').val());

                if (isNaN(nilai1)) {
                    nilai1 = 0;
                }

                if (isNaN(nilai2)) {
                    nilai2 = 0;
                }

                $('#t_033').val(nilai1 + nilai2);
            });
        });
    </script>

    <script>
        $("#temperature, #weight, #height").keydown(function(e) {
            !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
        });
    </script>

</head>

<body>

    <div class="container mt-5">
        <a class="btn btn-primary" href="<?= site_url('home/index') ?>" role="button">Back</a>
    </div>

    <div class="container mt-5">
        <form action="<?= site_url('formulir/addaksi') ?>" method="post">
            <table class="table text">
                <tr>
                    <td width="5%" align="right">
                        <img src="<?= base_url('assets/logo.jpeg') ?>" width="65px">
                    </td>
                    <td width="65%">
                        <h5>RSUD Dr. M. Yunus Bengkulu </h5>
                        <h5>Badan Layanan Umum Daerah</h5>
                        <strong>
                            <p style="font-size:12px">Jl. Bhayangkara Bengkulu 38229 Telp. (0736) 52004 - 52006 Fax. (0736) 52007</p>
                        </strong>
                    </td>
                    <td width="30%">
                        <h6>RM. 01 RAWAT JALAN</h6>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <h6><label class="col-form-label">Nomor RM</label></h6>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $psn[0]->NO_REGISTRATION; ?>" readonly>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h4 class="text-center">PENGKAJIAN AWAL KEPERAWATAN DAN MEDIS <br> RAWAT JALAN</h4>
                    </td>
                </tr>
            </table>

            <table class="table table-bordered" style="border:2px solid black">
                <tr>
                    <td width="40%">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="col-form-label">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $psn[0]->THENAME; ?>" readonly>
                            </div>
                        </div>
                    </td>
                    <td width="15%" align="center">
                        <label class="form-label">Jenis Kelamin</label>
                        <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $psn[0]->GENDER; ?>" readonly>

                        <!-- <select class="form-control" name="t_01">
                            <option selected>Pilih</option> 
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select> -->
                    </td>
                    <td width="15%" align="center">
                        <label class="form-label">Umur</label>
                        <input type="text" class="form-control" name="ageyear" id="ageyear" value="<?php echo $psn[0]->AGEYEAR . 't  ' .  $psn[0]->AGEMONTH . 'b  ' . $psn[0]->AGEDAY . 'h'; ?>" readonly>
                        <input type="hidden" name="agemonth" id="agemonth" value="<?php echo $psn[0]->AGEMONTH; ?>">
                        <input type="hidden" name="ageday" id="ageday" value="<?php echo $psn[0]->AGEDAY; ?>">
                    </td>
                    <td colspan="3" width="30%" align="center">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <label class="form-label">Tempat</label>
                                <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" value="<?php echo $psn[0]->PLACE_OF_BIRTH; ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="<?php echo $psn[0]->DATE_OF_BIRTH; ?>" readonly>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="col-form-label">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" type="text" rows="2" cols="6" name="theaddress" id="theaddress" readonly><?php echo $psn[0]->THEADDRESS; ?></textarea>
                            </div>
                        </div>
                    </td>
                    <td colspan="2" align="center">
                        <label class="form-label">Status Perkawinan</label>
                        <input type="text" class="form-control" name="maritalstatusid" id="maritalstatusid" value="<?php echo $psn[0]->MARITALSTATUSID; ?>" readonly>
                    </td>
                    <td align="center">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="job_id" id="job_id" value="<?php echo $psn[0]->JOB_ID; ?>" readonly>
                    </td>
                    <td align="center">
                        <label class="form-label">Agama</label>
                        <input type="text" class="form-control" name="kode_agama" id="kode_agama" value="<?php echo $psn[0]->KODE_AGAMA; ?>" readonly>
                    </td>
                    <td align="center">
                        <label class="form-label">Suku Bangsa</label>
                        <input type="text" class="form-control" name="nation_id" id="nation_id" value="<?php echo $psn[0]->NATION_ID; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <!-- <select class="form-control" name="t_02">
                                <option selected>Pilih</option>
                                <option value="1">Nama Keluarga</option>
                                <option value="2">Teman Dekat</option>
                            </select> -->
                                <label for="">Nama Keluarga</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="alloanamnesis_contact" id="alloanamnesis_contact" value="<?php echo $psn[0]->ALLOANAMNESIS_CONTACT; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td colspan="2" align="center">
                        <label class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" name="alloanamnesis_address" id="alloanamnesis_address" readonly><?php echo $psn[0]->ALLOANAMNESIS_ADDRESS; ?></textarea>
                    </td>
                    <td colspan="3" align="center">
                        <label class="form-label">Hubungan Keluarga</label>
                        <input type="text" class="form-control" name="alloanamnesis_hub" id="alloanamnesis_hub" value="<?php echo $psn[0]->ALLOANAMNESIS_HUB; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="col-form-label">Nama Ayah</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="father" id="father" value="<?php echo $psn[0]->FATHER; ?>" readonly>
                            </div>
                        </div>
                    </td>
                    <td colspan="2" align="center">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="mother" id="mother" value="<?php echo $psn[0]->MOTHER; ?>" readonly>
                    </td>
                    <td colspan="3" align="center">
                        <label class="form-label">Mulai Tanggal Berobat</label>
                        <input type="datetime-local" class="form-control" name="visit_date" id="visit_date" value="<?php echo $psn[0]->VISIT_DATE; ?>" readonly>
                    </td>
                </tr>
            </table>
    </div>

    <div class="container">
        <table class="table table-bordered" style="border:2px solid black">
            <tr>
                <td width="40%">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <label class="col-form-label">Tanggal dan Jam Datang Pasien</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" value="<?php echo $psn[0]->EXAMINATION_DATE; ?>" readonly>
                        </div>
                    </div>
                </td>
                <td width="25%">
                    <div class="row align-items-center">
                        <p>Sumber Data</p>
                        <div class="form-check-inline">
                            <div class="form-check">
                                <label for="t_01_pasien">Pasien</label>
                                <input class="form-check-input" type="radio" id="t_01_pasien" name="t_01" value="1">
                            </div>
                            <div class="form-check">
                                <label for="t_01_keluarga">Keluarga</label>
                                <input class="form-check-input" type="radio" id="t_01_keluarga" name="t_01" value="2">
                            </div>
                            <div class="form-check">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="form-check-inline">
                                            <label for="t_01_lainnya">Lainnya</label>
                                            <input class="form-check-input" type="radio" id="t_01_lainnya" name="t_01" value="3">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="v_01" id="v_01" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td width="35%">
                    <!-- <div class="row align-items-center"> -->
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <label class="col-form-label">Rujukan</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="ppkrujukan" name="ppkrujukan" value="<?php echo $psn[0]->PPKRUJUKAN; ?>" readonly>
                        </div>
                    </div>
                    <!-- <p>Rujukan</p> -->

                    <!-- <div class="form-check-inline">
                                <div class="form-check">
                                    <label for="t_05_tidak">Tidak</label>
                                    <input class="form-check-input" type="radio" id="t_05_tidak" name="t_05">     
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <label for="t_05_ya">Ya,</label>
                                            <input class="form-check-input" type="radio" id="t_05_ya" name="t_05">
                                        </div> 
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="form-check-inline">
                                                <label for="t_06_rs">RS</label>
                                                <input class="form-check-input" type="checkbox" id="t_06_rs" name="t_06" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                          <input class="form-control" type="text" name="v_21" id="v_21" disabled="disabled">
                                        </div>
                                    </div>
                                </div>  
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <label for="t_06_puskesmas">Puskesmas</label>
                                            <input class="form-check-input" type="checkbox" id="t_06_puskesmas" name="t_06" disabled="disabled">
                                        </div> 
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <label for="t_06_dokter">Dokter</label>
                                            <input class="form-check-input" type="checkbox" id="t_06_dokter" name="t_06" disabled="disabled">
                                        </div>
                                    </div>
                                </div>  -->
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <label class="col-form-label">Diagnosa Rujukan</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="conclusion" id="conclusion" value="<?php echo $psn[0]->CONCLUSION; ?>" readonly>
                        </div>
                    </div>
                    <!-- </div>
                    </div> -->
                </td>
            </tr>
        </table>

        <table class="table table-bordered" style="border:2px solid black">
            <tr>
                <td>
                    <div class="row align-items-center">
                        <div class="col-md-1">
                            <strong><label class="col-form-label"> POLIKLINIK</label></strong>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="clinic_id" id="clinic_id" value="<?php echo $psn[0]->CLINIC_ID; ?>" readonly>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <!-- <td>
                    <h5>POLIKLINIK</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="t_07_obgyn" name="t_07">
                        <strong><p><label for="t_07_obgyn">Obgyn</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_obgynonkologi" name="t_07">
                        <strong><p><label for="t_07_obgynonkologi">Obgyn Onkologi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_penydalam" name="t_07">
                        <strong><p><label for="t_07_penydalam">Peny Dalam</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_anak" name="t_07">
                        <strong><p><label for="t_07_anak">Anak</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_bedah" name="t_07">
                        <strong><p><label for="t_07_bedah">Bedah</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_bedahonkologi" name="t_07">
                        <strong><p><label for="t_07_bedahonkologi">Bedah Onkologi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_bedahsyaraf" name="t_07">
                        <strong><p><label for="t_07_bedahsyaraf">Bedah Syaraf</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_syaraf" name="t_07">
                        <strong><p><label for="t_07_syaraf">Syaraf</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_jantung" name="t_07">
                        <strong><p><label for="t_07_jantung">Jantung</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_tht" name="t_07">
                        <strong><p><label for="t_07_tht">THT</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_mata" name="t_07">
                        <strong><p><label for="t_07_mata">Mata</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_urologi" name="t_07">
                        <strong><p><label for="t_07_urologi">Urologi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_paru" name="t_07">
                        <strong><p><label for="t_07_paru">Paru</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_gigi" name="t_07">
                        <strong><p><label for="t_07_gigi">Gigi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_prostodonsia" name="t_07">
                        <strong><p><label for="t_07_prostodonsia">Prostodonsia</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_orthodonsia" name="t_07">
                        <strong><p><label for="t_07_orthodonsia">Orthodonsia</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_endodonsia" name="t_07">
                        <strong><p><label for="t_07_endodonsia">Endodonsia</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_jiwa" name="t_07">
                        <strong><p><label for="t_07_jiwa">Jiwa</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_geriatri" name="t_07">
                        <strong><p><label for="t_07_geriatri">Geriatri</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_anestesi" name="t_07">
                        <strong><p><label for="t_07_anestesi">Anestesi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_tumbang" name="t_07">
                        <strong><p><label for="t_07_tumbang">Tumbang</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_gastroenterohehepatologi" name="t_07">
                        <strong><p><label for="t_07_gastroenterohehepatologi">Gastroenterohehepatologi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_ortopedi" name="t_07">
                        <strong><p><label for="t_07_ortopedi">Ortopedi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_kulit" name="t_07">
                        <strong><p><label for="t_07_kulit">Kulit</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_balita" name="t_07">
                        <strong><p><label for="t_07_balita">Balita</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_tbmdr" name="t_07">
                        <strong><p><label for="t_07_tbmdr">TBMDR</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_gizi" name="t_07">
                        <strong><p><label for="t_07_gizi">Gizi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_fisioterapi" name="t_07">
                        <strong><p><label for="t_07_fisioterapi">Fisioterapi</label></p></strong>
                        <input class="form-check-input" type="radio" id="t_07_hemodialisa" name="t_07">
                        <strong><p><label for="t_07_hemodialisa">Hemodialisa</label></p></strong>
                    </div>
                </td> -->
                <td>

                    <u>
                        <h5>A. PENGKAJIAN AWAL KEPERAWATAN</h5>
                    </u>

                    <div class="container">
                        <h6><label class="col-form-label">1. KELUHAN UTAMA : </label></h6>
                        <textarea class="form-control" name="anamnase" id="anamnase" cols="6" rows="3" readonly><?php echo $psn[0]->ANAMNASE; ?></textarea>

                        <h6><label class="col-form-label">2. PEMERIKSAAN FISIK</label></h6>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;BB</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" name="weight" id="weight">
                                    </div>
                                    <div class="col-md-1">
                                        <label>Kg</label>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;TD</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" name="tension_upper" id="tension_upper">
                                    </div>
                                    <div class="col-md-1">
                                        <label>/</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" name="tension_below" id="tension_below">
                                    </div>
                                    <div class="col-md-1">
                                        <label>mmHg</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;TB</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="height" id="height">
                                    </div>
                                    <div class="col-md-1">
                                        <label>cm</label>
                                    </div>
                                </div>
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
                            </div>

                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <label class="col-form-label">P</label>
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
                                        <label class="col-form-label">Suhu</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="temperature" id="temperature">
                                    </div>
                                    <div class="col-md-1">
                                        <label>C</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">3. RIWAYAT PSIKOSOSIAL, KULTURAL DAN SPIRITUAL</label></h6>
                        <div class="container">
                            <p>a. Status Psikologi</p>
                            <div class="row align-items-center mb-2">
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_02_cemas" name="t_02" value="1">
                                                <label for="t_02_cemas">Cemas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_03_takut" name="t_03" value="1">
                                                <label for="t_03_takut">Takut</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_04_sedih" name="t_04" value="1">
                                                <label for="t_04_sedih">Sedih</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>b. Status Sosial</p>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <label class="col-form-label">Hubungan pasien dengan anggota keluarga</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" id="t_05_tidakbaik" name="t_05" value="0">
                                        <label for="t_05_tidakbaik">Tidak Baik</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" id="t_05_baik" name="t_05" value="1">
                                        <label for="t_05_baik">Baik</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <label class="col-form-label">Kerabat terdekat yang dapat yang dapat dihubungi :</label>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Nama</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_02" id="v_02">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label class="col-form-label">Hubungan</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_03" id="v_03">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Telepon</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" name="v_04" id="v_04">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>c. Kultur/Budaya (Suku Bangsa)</p>
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_06_serawai">Serawai</label>
                                                    <input class="form-check-input" type="radio" id="t_06_serawai" name="t_06" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_06_rejang">Rejang</label>
                                                    <input class="form-check-input" type="radio" id="t_06_rejang" name="t_06" value="2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_06_palembang">Palembang</label>
                                                    <input class="form-check-input" type="radio" id="t_06_palembang" name="t_06" value="3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_06_lainnya">Lainnya</label>
                                                    <input class="form-check-input" type="radio" id="t_06_lainnya" name="t_06" value="7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control" type="text" name="v_05" id="v_05" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_06_sunda">Sunda</label>
                                                    <input class="form-check-input" type="radio" id="t_06_sunda" name="t_06" value="4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_06_batak">Batak</label>
                                                    <input class="form-check-input" type="radio" id="t_06_batak" name="t_06" value="5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_06_jawa">Jawa</label>
                                                    <input class="form-check-input" type="radio" id="t_06_jawa" name="t_06" value="6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>d. Spiritual (Agama) </p>
                            <div class="row align-items-center mb-2">
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_07_islam">Islam</label>
                                                    <input class="form-check-input" type="radio" id="t_07_islam" name="t_07" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_07_katholik">Katholik</label>
                                                    <input class="form-check-input" type="radio" id="t_07_katholik" name="t_07" value="2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_07_protestan">Protestan</label>
                                                    <input class="form-check-input" type="radio" id="t_07_protestan" name="t_07" value="3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_07_lainnya">Lainnya</label>
                                                    <input class="form-check-input" type="radio" id="t_07_lainnya" name="t_07" value="7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control" type="text" name="v_06" id="v_06" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_07_hindhu">Hindhu</label>
                                                    <input class="form-check-input" type="radio" id="t_07_hindhu" name="t_07" value="4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_07_budha">Budha</label>
                                                    <input class="form-check-input" type="radio" id="t_07_budha" name="t_07" value="5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <div class="form-check-inline">
                                                    <label for="t_07_konghucu">Konghucu</label>
                                                    <input class="form-check-input" type="radio" id="t_07_konghucu" name="t_07" value="6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">4. STATUS EKONOMI</label></h6>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <div class="form-check-inline">
                                                <label for="t_08_asuransi">Asuransi</label>
                                                <input class="form-check-input" type="radio" id="t_08_asuransi" name="t_08" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <div class="form-check-inline">
                                                <label for="t_08_jaminan">Jaminan</label>
                                                <input class="form-check-input" type="radio" id="t_08_jaminan" name="t_08" value="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <div class="form-check-inline">
                                                <label for="t_08_biayasendiri">Biaya Sendiri</label>
                                                <input class="form-check-input" type="radio" id="t_08_biayasendiri" name="t_08" value="3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="form-check">
                                            <div class="form-check-inline">
                                                <label for="t_08_lainnya">Lainnya, Sebutkan</label>
                                                <input class="form-check-input" type="radio" id="t_08_lainnya" name="t_08" value="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" type="text" name="v_07" id="v_07" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">5. RIWAYAT KESEHATAN</label></h6>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="col-form-label">a. Riwayat Penyakit Lalu </label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_09_tidak" name="t_09" value="0">
                                        <label for="t_09_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_09_ya" name="t_09" value="1">
                                            <label for="t_09_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Penyakit</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_08" id="v_08" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <label class="col-form-label">• Pernah Dirawat </label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_010_tidak" name="t_010" value="0">
                                            <label for="t_010_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_010_ya" name="t_010" value="1">
                                                <label for="t_010_ya">Ya,</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika Ya : </label>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <label class="col-form-label">Diagnosa</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" name="v_09" id="v_09" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Kapan</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="date" name="v_10" id="v_10" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Di</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="text" name="v_11" id="v_11" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <label class="col-form-label">• Pernah Dioperasi </label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_011_tidak" name="t_011" value="0">
                                            <label for="t_011_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_011_ya" name="t_011" value="1">
                                                <label for="t_011_ya">Ya,</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika Ya : </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5">
                                                        <label class="col-form-label">Jenis Operasi</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input class="form-control" type="text" name="v_12" id="v_12" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Kapan</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="date" name="v_13" id="v_13" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <label class="col-form-label">• Masih Dalam Pengobatan </label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_012_tidak" name="t_012" value="0">
                                            <label for="t_012_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_012_ya" name="t_012" value="1">
                                                <label for="t_012_ya">Ya,</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <label class="col-form-label">Obat</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="v_14" id="v_14" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">6. RIWAYAT ALERGI</label></h6>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-1">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_013_tidak" name="t_013" value="0">
                                            <label for="t_013_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_013_ya" name="t_013" value="1">
                                            <label for="t_013_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_014_obat" name="t_014" disabled="disabled" value="1">
                                            <label for="t_014_obat">Obat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="v_15" id="v_15" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_015_makanan" name="t_015" disabled="disabled" value="1">
                                            <label for="t_015_makanan">Makanan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="v_16" id="v_16" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_016_lainnya" name="t_016" disabled="disabled" value="1">
                                            <label for="t_016_lainnya">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="v_17" id="v_17" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-1">
                                <label class="col-form-label">Reaksi</label>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="v_18" id="v_18">
                            </div>
                        </div>

                        <h6><label class="col-form-label">7. SKALA NYERI</label></h6>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="<?= base_url('assets/gb2.png') ?>" width="100%">
                                    <img src="<?= base_url('assets/gb3.png') ?>" width="100%">
                                </div>
                                <div class="col-md-6">
                                    <div class="row align-item-center">
                                        <div class="container" style="border: 2px solid black">
                                            <p> 1-3 : Nyeri Ringan, Analgetik <br>
                                                4-7 : Nyeri Sedang, Perlu Analgetik Injeksi <br>
                                                8-10 : Nyeri Berat, Konsul Tim Nyeri
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_017_nyerikronis" name="t_017" value="1">
                                            <label for="t_017_nyerikronis">Nyeri Kronis</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Lokasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_19" id="v_19" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <label class="col-form-label">Frekuensi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_20" id="v_20" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Durasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_21" id="v_21" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_018_nyeriakut" name="t_018" value="1">
                                            <label for="t_018_nyeriakut">Nyeri Kronis</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Lokasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_22" id="v_22" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <label class="col-form-label">Frekuensi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_23" id="v_23" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Durasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_24" id="v_24" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="row align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_019_skornyeri" name="t_019" value="1">
                                                    <label for="t_019_skornyeri">Skor Nyeri (0-10)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row align-items-center">
                                                <input type="range" id="t_020" name="t_020" min="0" max="10" list="markers" value="0" style="width: 100%;" disabled="disabled" />
                                                <datalist id="markers">
                                                    <option value="0"></option>
                                                    <option value="1"></option>
                                                    <option value="2"></option>
                                                    <option value="3"></option>
                                                    <option value="4"></option>
                                                    <option value="5"></option>
                                                    <option value="6"></option>
                                                    <option value="7"></option>
                                                    <option value="8"></option>
                                                    <option value="9"></option>
                                                    <option value="10"></option>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Nyeri Hilang</p>
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_021_minumobat" name="t_021" value="1">
                                            <label for="t_021_minumobat">Minum Obat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_022_istirahat" name="t_022" value="1">
                                            <label for="t_022_istirahat">Istirahat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_023_musik" name="t_023" value="1">
                                            <label for="t_023_musik">Mendengarkan Musik</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_024_posisi" name="t_024" value="1">
                                            <label for="t_024_posisi">Berubah Posisi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_025_lainnya" name="t_025" value="1">
                                            <label for="t_025_lainnya">Lainnya,</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Sebutkan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" name="v_25" id="v_25" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">8. RISIKO CIDERA / JATUH (TIME UP AND GO)</label></h6>
                        <div class="container">
                            <p>a. Perhatikan cara berjalan pasien saat akan duduk di kursi ?</p>
                            <div class="container">
                                <p>Apakah pasien tampak tidak seimbang (sempoyongan) </p>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" id="t_026_tidak" name="t_026" value="0">
                                            <label for="t_026_tidak">Tidak</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" id="t_026_ya" name="t_026" value="1">
                                            <label for="t_026_ya">Ya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>b. Apakah pasien memegang pinggiran kursi atau meja atau benda lain sebagai penopang ?</p>
                            <div class="container">
                                <div class="col-md-6">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" id="t_027_tidak" name="t_027" value="0">
                                        <label for="t_027_tidak">Tidak</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" id="t_027_ya" name="t_027" value="1">
                                        <label for="t_027_ya">Ya</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col">Hasil : </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_028_hasil1" name="t_028" value="1">
                                            <label for="t_028_hasil1">Tidak Beresiko (tidak ditemukan a dan b)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_028_hasil2" name="t_028" value="2">
                                            <label for="t_028_hasil2">Resiko Tinggi (a dan b ditemukan)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_028_hasil3" name="t_028" value="3">
                                            <label for="t_028_hasil3">Resiko Rendah (ditemukan a atau b)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <label class="col-form-label">Diberitahukan ke Dokter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_029_tidak" name="t_029" value="0">
                                            <label for="t_029_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_029_ya" name="t_029" value="1">
                                                <label for="t_029_ya">Ya,</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <label class="col-form-label">Jam</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control" type="time" name="v_26" id="v_26" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">9. STATUS FUNGSIONAL</label></h6>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Aktivitas dan Mobilitas </label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <div class="form-check-inline">
                                            <label for="t_030_mandiri">Mandiri </label>
                                            <input class="form-check-input" type="radio" id="t_030_mandiri" name="t_030" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <div class="form-check-inline">
                                                <label for="t_030_bantuan">Perlu Bantuan </label>
                                                <input class="form-check-input" type="radio" id="t_030_bantuan" name="t_030" value="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label class="col-form-label">Sebutkan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" name="v_27" id="v_27" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Alat Bantu Jalan, Sebutkan</label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" name="v_28" id="v_28">
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">10. NUTRISI</label></h6>
                        <div class="container">
                            <strong>
                                <p>SKRINING Gizi (berdasarkan Malnutrisi Screening Tools / MST)</p>
                            </strong>
                            <p>(Lingkari Skor sesuai dengan jawaban, Total Skor adalah jumlah skor yang dilingkari)</p>

                            <table class="table table-bordered" style="border:2px solid black">
                                <tr class="text-center">
                                    <th width="10%">No</th>
                                    <th width="60%">Parameter</th>
                                    <th width="15%">Skor</th>
                                    <th width="15%">Ceklist</th>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Apakah pasien mengalami penurunan berat badan yang tidak diinginkan dalam 6 bulan terakhir</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>a. Tidak penurunan berat badan</td>
                                    <td class="text-center"><label for="b">0</label></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="0" id="t_031_penurunanbb" name="t_031">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>b. Tidak yakin / tidak tahu / terasa baju longgar</td>
                                    <td class="text-center">2</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="2" id="t_031_tidakyakintidaktahu" name="t_031">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>c. Jika ya, berapa penurunan berat badan tersebut</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>1 - 5 Kg</td>
                                    <td class="text-center">1</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="1" id="t_031_turun1-5" name="t_031">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>8 - 10 Kg</td>
                                    <td class="text-center">2</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="2" id="t_031_turun8-10" name="t_031">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>11 - 15 Kg</td>
                                    <td class="text-center">5</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="5" id="t_031_turun11-15" name="t_031">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>> 15 Kg</td>
                                    <td class="text-center">4</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="4" id="t_031_turun>15" name="t_031">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Tidak yakin penurunannya</td>
                                    <td class="text-center">2</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="2" id="t_031_tdkyakinturun" name="t_031">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>2. Apakah asupan makan berkurang karena berkurangnya nafsu makan?</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>a. Tidak</td>
                                    <td class="text-center">0</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="0" id="t_032_tidak" name="t_032">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>b. Ya</td>
                                    <td class="text-center">1</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="1" id="t_032_ya" name="t_032">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>--------------------+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-center"><strong>Total Skor</strong></td>
                                    <td>
                                        <center><input class="text-center" type="text" size="7px" id="t_033" name="t_033" readonly></center>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td colspan="3">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <label class="col-form-label">Pasien Dengan Diagnosis Khusus </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="t_034_tidak" name="t_034" value="0">
                                                        <label for="t_034_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="t_034_ya" name="t_034" value="1">
                                                            <label for="t_034_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <label class="col-form-label">Jika Ya : </label>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_035" name="t_035" disabled="disabled" value="1">
                                                                    <label for="t_035">DM</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_036" name="t_036" disabled="disabled" value="1">
                                                                    <label for="t_036">Ginjal</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_037" name="t_037" disabled="disabled" value="1">
                                                                    <label for="t_037">Hati</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_038" name="t_038" disabled="disabled" value="1">
                                                                    <label for="t_038">Paru</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_039" name="t_039" disabled="disabled" value="1">
                                                                    <label for="t_039">Stroke</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_040" name="t_040" disabled="disabled" value="1">
                                                                    <label for="t_040">Kanker</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_041" name="t_041" disabled="disabled" value="1">
                                                                    <label for="t_041">Geriatri</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_042" name="t_042" disabled="disabled" value="1">
                                                                    <label for="t_042">Jantung</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_043" name="t_043" disabled="disabled" value="1">
                                                                    <label for="t_043">Lainnya</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="v_29" id="v_29" disabled="disabled">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row align-items-center">
                                                            <div class="col-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_044" name="t_044" disabled="disabled" value="1">
                                                                    <label for="t_044">Penurunan Imunitas</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p>Bila skor >2 dan atau pasien dengan diagnosis / kondisi khusus dilakukan pengkajian lanjut oleh tim terapi gizi</p>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="col-form-label">Sudah Dilaporkan ke Tim Gizi</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_045_tidak" name="t_045" value="0">
                                        <label for="t_045_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_045_ya" name="t_045" value="1">
                                            <label for="t_045_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Kapan</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="datetime-local" name="v_30" id="v_30" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6><label class="col-form-label">11. KEBUTUHAN KOMUNIKASI DAN EDUKASI</label></h6>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <label class="col-form-label">Terdapat hambatan dalam pembelajaran :</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_046_tidak" name="t_046" value="0">
                                        <label for="t_046_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_046_ya" name="t_046" value="1">
                                            <label for="t_046_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <label class="col-form-label">Jika Ya : </label>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_047" name="t_047" disabled="disabled" value="1">
                                                    <label for="t_047">Pendengaran</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_048" name="t_048" disabled="disabled" value="1">
                                                    <label for="t_048">Pengelihatan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_049" name="t_049" disabled="disabled" value="1">
                                                    <label for="t_049">Kognitif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_050" name="t_050" disabled="disabled" value="1">
                                                    <label for="t_050">Fisik</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_051" name="t_051" disabled="disabled" value="1">
                                                    <label for="t_051">Budaya</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_052" name="t_052" disabled="disabled" value="1">
                                                    <label for="t_052">Emosi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_053" name="t_053" disabled="disabled" value="1">
                                                    <label for="t_053">Bahasa</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_054" name="t_054" disabled="disabled" value="1">
                                                    <label for="t_054">Lainnya</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" name="v_31" id="v_31" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="col-form-label">Dibutuhkan Penerjemah</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_055_tidak" name="t_055" value="0">
                                        <label for="t_055_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_055_ya" name="t_055" value="1">
                                            <label for="t_055_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Sebutkan</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_32" id="v_32" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="col-form-label">Bahasa Isyarat </label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_056_tidak" name="t_056" value="0">
                                        <label for="t_056_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_056_ya" name="t_056" value="1">
                                            <label for="t_056_ya">Ya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Kebutuhan edukasi (pilih topik edukasi pada kotak yang tersedia)</p>
                            <div class="row align-items-center">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_057_diagnosa" name="t_057" value="1">
                                                    <label for="t_057_diagnosa">Diagnosa dan managemen penyakit</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_058_obat" name="t_058" value="1">
                                                    <label for="t_058_obat">Obat-obatan/terapi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_059_diet" name="t_059" value="1">
                                                    <label for="t_059_diet">Diet dan Nutrisi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-md-7">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_060_tindakan" name="t_060" value="1">
                                                    <label for="t_060_tindakan">Tindakan Keperawatan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input class="form-control" type="text" name="v_33" id="v_33" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_061_rehabilitasi" name="t_061" value="1">
                                                    <label for="t_061_rehabilitasi">Rehabilitasi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_062_managemennyari" name="t_062" value="1">
                                                    <label for="t_062_managemennyari">Managemen Nyeri</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_063_lainnya" name="t_063" value="1">
                                                    <label for="t_063_lainnya">Lain-lain, Sebutkan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="v_34" id="v_34" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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