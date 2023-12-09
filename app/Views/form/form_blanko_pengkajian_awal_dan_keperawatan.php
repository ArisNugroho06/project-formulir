<?php
$db = db_connect();
foreach ($dataAssessmentformptk as $row) {
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
            $("input[name='t_04']").click(function f1() {
                if ($("#t_04_lainnya").is(":checked")) {
                    $("#v_19").removeAttr("disabled");
                    $("#v_19").focus();
                } else {
                    $("#v_19").attr("disabled", true);
                    $("#v_19").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f2() {
            $("input[name='t_05']").click(function f2() {
                if ($("#t_05_ya").is(":checked")) {
                    $("#t_06_rs").removeAttr("disabled");
                    $("#t_06_puskesmas").removeAttr("disabled");
                    $("#t_06_dokter").removeAttr("disabled");
                } else {
                    $("#t_06_rs").attr("disabled", true);
                    $("#t_06_rs").prop("checked", false);
                    $("#t_06_puskesmas").attr("disabled", true);
                    $("#t_06_puskesmas").prop("checked", false);
                    $("#t_06_dokter").attr("disabled", true);
                    $("#t_06_dokter").prop("checked", false);
                    $("#v_21").attr("disabled", true);
                    $("#v_21").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f3() {
            $("input[name='t_06']").click(function f3() {
                if ($("#t_06_rs").is(":checked")) {
                    $("#v_21").removeAttr("disabled");
                } else {
                    $("#v_21").attr("disabled", true);
                    $("#v_21").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f4() {
            $("input[name='t_010']").click(function f4() {
                if ($("#t_010_lainnya").is(":checked")) {
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
        $(function f5() {
            $("input[name='t_011']").click(function f5() {
                if ($("#t_011_lainnya").is(":checked")) {
                    $("#v_34").removeAttr("disabled");
                    $("#v_34").focus();
                } else {
                    $("#v_34").attr("disabled", true);
                    $("#v_34").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f6() {
            $("input[name='t_012']").click(function f6() {
                if ($("#t_012_lainnya").is(":checked")) {
                    $("#v_35").removeAttr("disabled");
                    $("#v_35").focus();
                } else {
                    $("#v_35").attr("disabled", true);
                    $("#v_35").val("");
                    $("#v_35").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f7() {
            $("input[name='t_013']").click(function f7() {
                if ($("#t_013_ya").is(":checked")) {
                    $("#v_36").removeAttr("disabled");
                    $("#v_36").focus();
                } else {
                    $("#v_36").attr("disabled", true);
                    $("#v_36").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f8() {
            $("input[name='t_014']").click(function f8() {
                if ($("#t_014_ya").is(":checked")) {
                    $("#v_37").removeAttr("disabled");
                    $("#v_37").focus();
                    $("#v_38").removeAttr("disabled");
                    $("#v_39").removeAttr("disabled");
                } else {
                    $("#v_37").attr("disabled", true);
                    $("#v_37").val("");
                    $("#v_38").attr("disabled", true);
                    $("#v_38").val("");
                    $("#v_39").attr("disabled", true);
                    $("#v_39").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f9() {
            $("input[name='t_015']").click(function f9() {
                if ($("#t_015_ya").is(":checked")) {
                    $("#v_40").removeAttr("disabled");
                    $("#v_40").focus();
                    $("#v_41").removeAttr("disabled");
                } else {
                    $("#v_40").attr("disabled", true);
                    $("#v_40").val("");
                    $("#v_41").attr("disabled", true);
                    $("#v_41").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f10() {
            $("input[name='t_016']").click(function f10() {
                if ($("#t_016_ya").is(":checked")) {
                    $("#v_42").removeAttr("disabled");
                    $("#v_42").focus();
                } else {
                    $("#v_42").attr("disabled", true);
                    $("#v_42").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f11() {
            $("input[name='t_017']").click(function f11() {
                if ($("#t_017_ya").is(":checked")) {
                    $("#t_018_obat").removeAttr("disabled");
                    $("#t_018_makanan").removeAttr("disabled");
                    $("#t_018_lainnya").removeAttr("disabled");
                } else {
                    $("#t_018_obat").attr("disabled", true);
                    $("#t_018_obat").prop("checked", false);
                    $("#t_018_makanan").attr("disabled", true);
                    $("#t_018_makanan").prop("checked", false);
                    $("#t_018_lainnya").attr("disabled", true);
                    $("#t_018_lainnya").prop("checked", false);
                    $("#v_43").attr("disabled", true);
                    $("#v_43").val("");
                    $("#v_44").attr("disabled", true);
                    $("#v_44").val("");
                    $("#v_45").attr("disabled", true);
                    $("#v_45").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f12() {
            $("input[name='t_018']").click(function f12() {
                if ($("#t_018_obat").is(":checked")) {
                    $("#v_43").removeAttr("disabled");
                    $("#v_43").focus();
                } else {
                    $("#v_43").attr("disabled", true);
                    $("#v_43").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f13() {
            $("input[name='t_018']").click(function f13() {
                if ($("#t_018_makanan").is(":checked")) {
                    $("#v_44").removeAttr("disabled");
                    $("#v_44").focus();
                } else {
                    $("#v_44").attr("disabled", true);
                    $("#v_44").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f14() {
            $("input[name='t_018']").click(function f14() {
                if ($("#t_018_lainnya").is(":checked")) {
                    $("#v_45").removeAttr("disabled");
                    $("#v_45").focus();
                } else {
                    $("#v_45").attr("disabled", true);
                    $("#v_45").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f15() {
            $("input[name='t_019']").click(function f15() {
                if ($("#t_019_nyerikronis").is(":checked")) {
                    $("#v_47").removeAttr("disabled");
                    $("#v_47").focus();
                    $("#v_48").removeAttr("disabled");
                    $("#v_49").removeAttr("disabled");
                } else {
                    $("#v_47").attr("disabled", true);
                    $("#v_47").val("");
                    $("#v_48").attr("disabled", true);
                    $("#v_48").val("");
                    $("#v_49").attr("disabled", true);
                    $("#v_49").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f16() {
            $("input[name='t_019']").click(function f16() {
                if ($("#t_019_nyeriakut").is(":checked")) {
                    $("#v_50").removeAttr("disabled");
                    $("#v_51").removeAttr("disabled");
                    $("#v_52").removeAttr("disabled");
                    $("#v_50").focus();
                } else {
                    $("#v_50").attr("disabled", true);
                    $("#v_50").val("");
                    $("#v_51").attr("disabled", true);
                    $("#v_51").val("");
                    $("#v_52").attr("disabled", true);
                    $("#v_52").val("");
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
            $("input[name='t_021']").click(function f17() {
                if ($("#t_021_lainnya").is(":checked")) {
                    $("#v_53").removeAttr("disabled");
                    $("#v_53").focus();
                } else {
                    $("#v_53").attr("disabled", true);
                    $("#v_53").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f18() {
            $("input[name='t_025']").click(function f18() {
                if ($("#t_025_ya").is(":checked")) {
                    $("#v_54").removeAttr("disabled");
                    $("#v_54").focus();
                } else {
                    $("#v_54").attr("disabled", true);
                    $("#v_54").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f19() {
            $("input[name='t_026']").click(function f19() {
                if ($("#t_026_bantuan").is(":checked")) {
                    $("#v_55").removeAttr("disabled");
                    $("#v_55").focus();
                } else {
                    $("#v_55").attr("disabled", true);
                    $("#v_55").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f20() {
            $("input[name='t_030']").click(function f20() {
                if ($("#t_030_ya").is(":checked")) {
                    $("#t_031_dm").removeAttr("disabled");
                    $("#t_031_ginjal").removeAttr("disabled");
                    $("#t_031_hati").removeAttr("disabled");
                    $("#t_031_paru").removeAttr("disabled");
                    $("#t_031_stroke").removeAttr("disabled");
                    $("#t_031_kanker").removeAttr("disabled");
                    $("#t_031_geriatri").removeAttr("disabled");
                    $("#t_031_jantung").removeAttr("disabled");
                    $("#t_031_lainnya").removeAttr("disabled");
                    $("#t_031_penurunanimunitas").removeAttr("disabled");
                } else {
                    $("#t_031_dm").attr("disabled", true);
                    $("#t_031_dm").prop("checked", false);
                    $("#t_031_ginjal").attr("disabled", true);
                    $("#t_031_ginjal").prop("checked", false);
                    $("#t_031_hati").attr("disabled", true);
                    $("#t_031_hati").prop("checked", false);
                    $("#t_031_paru").attr("disabled", true);
                    $("#t_031_paru").prop("checked", false);
                    $("#t_031_stroke").attr("disabled", true);
                    $("#t_031_stroke").prop("checked", false);
                    $("#t_031_kanker").attr("disabled", true);
                    $("#t_031_kanker").prop("checked", false);
                    $("#t_031_geriatri").attr("disabled", true);
                    $("#t_031_geriatri").prop("checked", false);
                    $("#t_031_jantung").attr("disabled", true);
                    $("#t_031_jantung").prop("checked", false);
                    $("#t_031_lainnya").attr("disabled", true);
                    $("#t_031_lainnya").prop("checked", false);
                    $("#t_031_penurunanimunitas").attr("disabled", true);
                    $("#t_031_penurunanimunitas").prop("checked", false);
                    $("#v_57").attr("disabled", true);
                    $("#v_57").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f21() {
            $("input[name='t_031']").click(function f21() {
                if ($("#t_031_lainnya").is(":checked")) {
                    $("#v_57").removeAttr("disabled");
                } else {
                    $("#v_57").attr("disabled", true);
                    $("#v_57").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f22() {
            $("input[name='t_032']").click(function f22() {
                if ($("#t_032_ya").is(":checked")) {
                    $("#v_58").removeAttr("disabled");
                    $("#v_58").focus();
                } else {
                    $("#v_58").attr("disabled", true);
                    $("#v_58").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f23() {
            $("input[name='t_033']").click(function f23() {
                if ($("#t_033_ya").is(":checked")) {
                    $("#t_034_pendengaran").removeAttr("disabled");
                    $("#t_034_budaya").removeAttr("disabled");
                    $("#t_034_pengelihatan").removeAttr("disabled");
                    $("#t_034_emosi").removeAttr("disabled");
                    $("#t_034_kognitif").removeAttr("disabled");
                    $("#t_034_bahasa").removeAttr("disabled");
                    $("#t_034_fisik").removeAttr("disabled");
                    $("#t_034_lainnya").removeAttr("disabled");
                    $("#t_034_pendengaran").focus();
                } else {
                    $("#t_034_pendengaran").attr("disabled", true);
                    $("#t_034_pendengaran").prop("checked", false);
                    $("#t_034_budaya").attr("disabled", true);
                    $("#t_034_budaya").prop("checked", false);
                    $("#t_034_pengelihatan").attr("disabled", true);
                    $("#t_034_pengelihatan").prop("checked", false);
                    $("#t_034_emosi").attr("disabled", true);
                    $("#t_034_emosi").prop("checked", false);
                    $("#t_034_kognitif").attr("disabled", true);
                    $("#t_034_kognitif").prop("checked", false);
                    $("#t_034_bahasa").attr("disabled", true);
                    $("#t_034_bahasa").prop("checked", false);
                    $("#t_034_fisik").attr("disabled", true);
                    $("#t_034_fisik").prop("checked", false);
                    $("#t_034_lainnya").attr("disabled", true);
                    $("#t_034_lainnya").prop("checked", false);
                    $("#v_59").attr("disabled", true);
                    $("#v_59").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f24() {
            $("input[name='t_034']").click(function f24() {
                if ($("#t_034_lainnya").is(":checked")) {
                    $("#v_59").removeAttr("disabled");
                    $("#v_59").focus();
                } else {
                    $("#v_59").attr("disabled", true);
                    $("#v_59").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f25() {
            $("input[name='t_035']").click(function f25() {
                if ($("#t_035_ya").is(":checked")) {
                    $("#v_60").removeAttr("disabled");
                    $("#v_60").focus();
                } else {
                    $("#v_60").attr("disabled", true);
                    $("#v_60").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f26() {
            $("input[name='t_037']").click(function f26() {
                if ($("#t_037_tindakan").is(":checked")) {
                    $("#v_61").removeAttr("disabled");
                } else {
                    $("#v_61").attr("disabled", true);
                    $("#v_61").val("");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function f27() {
            $("input[name='t_037']").click(function f27() {
                if ($("#t_037_lainnya").is(":checked")) {
                    $("#v_62").removeAttr("disabled");
                } else {
                    $("#v_62").attr("disabled", true);
                    $("#v_62").val("");
                }
            });
        });
    </script>

    <script>
        $(function() {
            $('input.jumlah').click(function() {

                var nilai1 = parseInt($('input[name="t_027"]:checked').val());
                var nilai2 = parseInt($('input[name="t_028"]:checked').val());

                if (isNaN(nilai1)) {
                    nilai1 = 0;
                }

                if (isNaN(nilai2)) {
                    nilai2 = 0;
                }

                $('#t_029').val(nilai1 + nilai2);
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
                                <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
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
                                <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $row->THENAME; ?>" readonly>
                            </div>
                        </div>
                    </td>
                    <td width="15%" align="center">
                        <label class="form-label">Jenis Kelamin</label>
                        <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $row->GENDER; ?>" readonly>

                        <!-- <select class="form-control" name="t_01">
                            <option selected>Pilih</option> 
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select> -->
                    </td>
                    <td width="15%" align="center">
                        <label class="form-label">Umur</label>
                        <input type="text" class="form-control" name="ageyear" id="ageyear" value="<?php echo $row->AGEYEAR . 't  ' .  $row->AGEMONTH . 'b  ' . $row->AGEDAY . 'h'; ?>" readonly>
                    </td>
                    <td colspan="3" width="30%" align="center">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <label class="form-label">Tempat</label>
                                <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" value="<?php echo $row->PLACE_OF_BIRTH; ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="<?php echo $row->DATE_OF_BIRTH; ?>" readonly>
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
                                <textarea class="form-control" type="text" rows="2" cols="6" name="theaddress" id="theaddress" readonly><?php echo $row->THEADDRESS; ?></textarea>
                            </div>
                        </div>
                    </td>
                    <td colspan="2" align="center">
                        <label class="form-label">Status Perkawinan</label>
                        <input type="text" class="form-control" name="maritalstatusid" id="maritalstatusid" value="<?php echo $row->MARITALSTATUSID; ?>" readonly>
                    </td>
                    <td align="center">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="job_id" id="job_id" value="<?php echo $row->JOB_ID; ?>" readonly>
                    </td>
                    <td align="center">
                        <label class="form-label">Agama</label>
                        <input type="text" class="form-control" name="kode_agama" id="kode_agama" value="<?php echo $row->KODE_AGAMA; ?>" readonly>
                    </td>
                    <td align="center">
                        <label class="form-label">Suku Bangsa</label>
                        <input type="text" class="form-control" name="nation_id" id="nation_id" value="<?php echo $row->NATION_ID; ?>" readonly>
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
                                        <input class="form-control" type="text" name="alloanamnesis_contact" id="alloanamnesis_contact" value="<?php echo $row->ALLOANAMNESIS_CONTACT; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td colspan="2" align="center">
                        <label class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" name="alloanamnesis_address" id="alloanamnesis_address" readonly><?php echo $row->ALLOANAMNESIS_ADDRESS; ?></textarea>
                    </td>
                    <td colspan="3" align="center">
                        <label class="form-label">Hubungan Keluarga</label>
                        <input type="text" class="form-control" name="alloanamnesis_hub" id="alloanamnesis_hub" value="<?php echo $row->ALLOANAMNESIS_HUB; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="col-form-label">Nama Ayah</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="father" id="father" value="<?php echo $row->FATHER; ?>" readonly>
                            </div>
                        </div>
                    </td>
                    <td colspan="2" align="center">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="mother" id="mother" value="<?php echo $row->MOTHER; ?>" readonly>
                    </td>
                    <td colspan="3" align="center">
                        <label class="form-label">Mulai Tanggal Berobat</label>
                        <input type="datetime-local" class="form-control" name="visit_date" id="visit_date" value="<?php echo $row->VISIT_DATE; ?>" readonly>
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
                            <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" value="<?php echo $row->EXAMINATION_DATE; ?>" readonly>
                        </div>
                    </div>
                </td>
                <td width="25%">
                    <div class="row align-items-center">
                        <p>Sumber Data</p>
                        <div class="form-check-inline">
                            <div class="form-check">
                                <label for="t_04_pasien">Pasien</label>
                                <input class="form-check-input" type="radio" id="t_04_pasien" name="t_04" value="1">
                            </div>
                            <div class="form-check">
                                <label for="t_04_keluarga">Keluarga</label>
                                <input class="form-check-input" type="radio" id="t_04_keluarga" name="t_04" value="2">
                            </div>
                            <div class="form-check">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="form-check-inline">
                                            <label for="t_04_lainnya">Lainnya</label>
                                            <input class="form-check-input" type="radio" id="t_04_lainnya" name="t_04" value="3">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="v_19" id="v_19" disabled="disabled">
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
                            <input class="form-control" type="text" id="ppkrujukan" name="ppkrujukan" value="<?php echo $row->PPKRUJUKAN; ?>" readonly>
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
                            <input class="form-control" type="text" name="conclusion" id="conclusion" value="<?php echo $row->CONCLUSION; ?>" readonly>
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
                            <input class="form-control" type="text" name="clinic_id" id="clinic_id" value="<?php echo $row->CLINIC_ID; ?>" readonly>
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
                        <textarea class="form-control" name="anamnase" id="anamnase" cols="6" rows="3" readonly><?php echo $row->ANAMNASE; ?></textarea>

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
                                                <input class="form-check-input" type="checkbox" id="t_08_cemas" name="t_08" value="1">
                                                <label for="t_08_cemas">Cemas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_08_takut" name="t_08" value="2">
                                                <label for="t_08_takut">Takut</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="t_08_sedih" name="t_08" value="3">
                                                <label for="t_08_sedih">Sedih</label>
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
                                        <input class="form-check-input" type="radio" id="t_09_tidakbaik" name="t_09" value="0">
                                        <label for="t_09_tidakbaik">Tidak Baik</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" id="t_09_baik" name="t_09" value="1">
                                        <label for="t_09_baik">Baik</label>
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
                                            <input class="form-control" type="text" name="v_30" id="v_30">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label class="col-form-label">Hubungan</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_31" id="v_31">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Telepon</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" name="v_32" id="v_32">
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
                                                    <label for="t_010_serawai">Serawai</label>
                                                    <input class="form-check-input" type="radio" id="t_010_serawai" name="t_010" value="1">
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
                                                    <label for="t_010_rejang">Rejang</label>
                                                    <input class="form-check-input" type="radio" id="t_010_rejang" name="t_010" value="2">
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
                                                    <label for="t_010_palembang">Palembang</label>
                                                    <input class="form-check-input" type="radio" id="t_010_palembang" name="t_010" value="3">
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
                                                    <label for="t_010_lainnya">Lainnya</label>
                                                    <input class="form-check-input" type="radio" id="t_010_lainnya" name="t_010" value="7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control" type="text" name="v_33" id="v_33" disabled="disabled">
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
                                                    <label for="t_010_sunda">Sunda</label>
                                                    <input class="form-check-input" type="radio" id="t_010_sunda" name="t_010" value="4">
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
                                                    <label for="t_010_batak">Batak</label>
                                                    <input class="form-check-input" type="radio" id="t_010_batak" name="t_010" value="5">
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
                                                    <label for="t_010_jawa">Jawa</label>
                                                    <input class="form-check-input" type="radio" id="t_010_jawa" name="t_010" value="6">
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
                                                    <label for="t_011_islam">Islam</label>
                                                    <input class="form-check-input" type="radio" id="t_011_islam" name="t_011" value="1">
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
                                                    <label for="t_011_katholik">Katholik</label>
                                                    <input class="form-check-input" type="radio" id="t_011_katholik" name="t_011" value="2">
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
                                                    <label for="t_011_protestan">Protestan</label>
                                                    <input class="form-check-input" type="radio" id="t_011_protestan" name="t_011" value="3">
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
                                                    <label for="t_011_lainnya">Lainnya</label>
                                                    <input class="form-check-input" type="radio" id="t_011_lainnya" name="t_011" value="7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control" type="text" name="v_34" id="v_34" disabled="disabled">
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
                                                    <label for="t_011_hindhu">Hindhu</label>
                                                    <input class="form-check-input" type="radio" id="t_011_hindhu" name="t_011" value="4">
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
                                                    <label for="t_011_budha">Budha</label>
                                                    <input class="form-check-input" type="radio" id="t_011_budha" name="t_011" value="5">
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
                                                    <label for="t_011_konghucu">Konghucu</label>
                                                    <input class="form-check-input" type="radio" id="t_011_konghucu" name="t_011" value="6">
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
                                                <label for="t_012_asuransi">Asuransi</label>
                                                <input class="form-check-input" type="radio" id="t_012_asuransi" name="t_012" value="1">
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
                                                <label for="t_012_jaminan">Jaminan</label>
                                                <input class="form-check-input" type="radio" id="t_012_jaminan" name="t_012" value="2">
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
                                                <label for="t_012_biayasendiri">Biaya Sendiri</label>
                                                <input class="form-check-input" type="radio" id="t_012_biayasendiri" name="t_012" value="3">
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
                                                <label for="t_012_lainnya">Lainnya, Sebutkan</label>
                                                <input class="form-check-input" type="radio" id="t_012_lainnya" name="t_012" value="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" type="text" name="v_35" id="v_35" disabled="disabled">
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
                                        <input class="form-check-input" type="radio" id="t_013_tidak" name="t_013" value="0">
                                        <label for="t_013_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_013_ya" name="t_013" value="1">
                                            <label for="t_013_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Penyakit</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_36" id="v_36" disabled="disabled">
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
                                            <input class="form-check-input" type="radio" id="t_014_tidak" name="t_014" value="0">
                                            <label for="t_014_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_014_ya" name="t_014" value="1">
                                                <label for="t_014_ya">Ya,</label>
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
                                                        <input class="form-control" type="text" name="v_37" id="v_37" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Kapan</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="date" name="v_38" id="v_38" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Di</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="text" name="v_39" id="v_39" disabled="disabled">
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
                                            <input class="form-check-input" type="radio" id="t_015_tidak" name="t_015" value="0">
                                            <label for="t_015_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_015_ya" name="t_015" value="1">
                                                <label for="t_015_ya">Ya,</label>
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
                                                        <input class="form-control" type="text" name="v_40" id="v_40" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Kapan</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="date" name="v_41" id="v_41" disabled="disabled">
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
                                            <input class="form-check-input" type="radio" id="t_016_tidak" name="t_016" value="0">
                                            <label for="t_016_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_016_ya" name="t_016" value="1">
                                                <label for="t_016_ya">Ya,</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <label class="col-form-label">Obat</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="v_42" id="v_42" disabled="disabled">
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
                                            <input class="form-check-input" type="radio" id="t_017_tidak" name="t_017" value="0">
                                            <label for="t_017_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_017_ya" name="t_017" value="1">
                                            <label for="t_017_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_018_obat" name="t_018" disabled="disabled" value="1">
                                            <label for="t_018_obat">Obat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="v_43" id="v_43" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_018_makanan" name="t_018" disabled="disabled" value="2">
                                            <label for="t_018_makanan">Makanan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="v_44" id="v_44" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_018_lainnya" name="t_018" disabled="disabled" value="3">
                                            <label for="t_018_lainnya">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="v_45" id="v_45" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-1">
                                <label class="col-form-label">Reaksi</label>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="v_46" id="v_46">
                            </div>
                        </div>

                        <h6><label class="col-form-label">7. SKALA NYERI</label></h6>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="aset/gb2.png" width="100%">
                                    <img src="aset/gb3.png" width="100%">
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
                                            <input class="form-check-input" type="checkbox" id="t_019_nyerikronis" name="t_019" value="1">
                                            <label for="t_019_nyerikronis">Nyeri Kronis</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Lokasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_47" id="v_47" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <label class="col-form-label">Frekuensi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_48" id="v_48" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Durasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_49" id="v_49" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_019_nyeriakut" name="t_019" value="2">
                                            <label for="t_019_nyeriakut">Nyeri Kronis</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Lokasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_50" id="v_50" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <label class="col-form-label">Frekuensi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="v_51" id="v_51" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Durasi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_52" id="v_52" disabled="disabled">
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
                                                    <input class="form-check-input" type="checkbox" id="t_019_skornyeri" name="t_019" value="3">
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
                                            <input class="form-check-input" type="checkbox" id="t_021_istirahat" name="t_021" value="2">
                                            <label for="t_021_istirahat">Istirahat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_021_musik" name="t_021" value="3">
                                            <label for="t_021_musik">Mendengarkan Musik</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_021_posisi" name="t_021" value="4">
                                            <label for="t_021_posisi">Berubah Posisi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="t_021_lainnya" name="t_021" value="5">
                                            <label for="t_021_lainnya">Lainnya</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label class="col-form-label">Sebutkan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" name="v_53" id="v_53" disabled="disabled">
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
                                            <input class="form-check-input" type="radio" id="t_022_tidak" name="t_022" value="0">
                                            <label for="t_022_tidak">Tidak</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" id="t_022_ya" name="t_022" value="1">
                                            <label for="t_022_ya">Ya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>b. Apakah pasien memegang pinggiran kursi atau meja atau benda lain sebagai penopang ?</p>
                            <div class="container">
                                <div class="col-md-6">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" id="t_023_tidak" name="t_023" value="0">
                                        <label for="t_023_tidak">Tidak</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" id="t_023_ya" name="t_023" value="1">
                                        <label for="t_023_ya">Ya</label>
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
                                            <input class="form-check-input" type="radio" id="t_024_hasil1" name="t_024" value="1">
                                            <label for="t_024_hasil1">Tidak Beresiko (tidak ditemukan a dan b)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_024_hasil2" name="t_024" value="2">
                                            <label for="t_024_hasil2">Resiko Tinggi (a dan b ditemukan)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_024_hasil3" name="t_024" value="3">
                                            <label for="t_024_hasil3">Resiko Rendah (ditemukan a atau b)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <label class="col-form-label">Diberitahukan ke Dokter</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_025_tidak" name="t_025" value="0">
                                            <label for="t_025_tidak">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="row align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_025_ya" name="t_025" value="1">
                                                <label for="t_025_ya">Ya,</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <label class="col-form-label">Jam</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control" type="time" name="v_54" id="v_54" disabled="disabled">
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
                                            <label for="t_026_mandiri">Mandiri </label>
                                            <input class="form-check-input" type="radio" id="t_026_mandiri" name="t_026" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <div class="form-check-inline">
                                                <label for="t_026_bantuan">Perlu Bantuan </label>
                                                <input class="form-check-input" type="radio" id="t_026_bantuan" name="t_026" value="2">
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
                                            <input class="form-control" type="text" name="v_55" id="v_55" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="col-form-label">Alat Bantu Jalan, Sebutkan</label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" name="v_56" id="v_56">
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
                                            <input class="form-check-input jumlah" type="radio" value="0" id="t_027_penurunanbb" name="t_027">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>b. Tidak yakin / tidak tahu / terasa baju longgar</td>
                                    <td class="text-center">2</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="2" id="t_027_tidakyakintidaktahu" name="t_027">
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
                                            <input class="form-check-input jumlah" type="radio" value="1" id="t_027_turun1-5" name="t_027">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>8 - 10 Kg</td>
                                    <td class="text-center">2</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="2" id="t_027_turun8-10" name="t_027">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>11 - 15 Kg</td>
                                    <td class="text-center">5</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="5" id="t_027_turun11-15" name="t_027">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>> 15 Kg</td>
                                    <td class="text-center">4</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="4" id="t_027_turun>15" name="t_027">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Tidak yakin penurunannya</td>
                                    <td class="text-center">2</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="2" id="t_027_tdkyakinturun" name="t_027">
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
                                            <input class="form-check-input jumlah" type="radio" value="0" id="t_028_tidak" name="t_028">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>b. Ya</td>
                                    <td class="text-center">1</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input jumlah" type="radio" value="1" id="t_028_ya" name="t_028">
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
                                        <center><input class="text-center" type="text" size="7px" id="t_029" name="t_029" readonly></center>
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
                                                        <input class="form-check-input" type="radio" id="t_030_tidak" name="t_030" value="0">
                                                        <label for="t_030_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="t_030_ya" name="t_030" value="1">
                                                            <label for="t_030_ya">Ya</label>
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
                                                                    <input class="form-check-input" type="checkbox" id="t_031_dm" name="t_031" disabled="disabled" value="1">
                                                                    <label for="t_031_dm">DM</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_ginjal" name="t_031" disabled="disabled" value="2">
                                                                    <label for="t_031_ginjal">Ginjal</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_hati" name="t_031" disabled="disabled" value="3">
                                                                    <label for="t_031_hati">Hati</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_paru" name="t_031" disabled="disabled" value="4">
                                                                    <label for="t_031_paru">Paru</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_stroke" name="t_031" disabled="disabled" value="5">
                                                                    <label for="t_031_stroke">Stroke</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_kanker" name="t_031" disabled="disabled" value="6">
                                                                    <label for="t_031_kanker">Kanker</label>
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
                                                                    <input class="form-check-input" type="checkbox" id="t_031_geriatri" name="t_031" disabled="disabled" value="7">
                                                                    <label for="t_031_geriatri">Geriatri</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_jantung" name="t_031" disabled="disabled" value="8">
                                                                    <label for="t_031_jantung">Jantung</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_lainnya" name="t_031" disabled="disabled" value="10">
                                                                    <label for="t_031_lainnya">Lainnya</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="v_57" id="v_57" disabled="disabled">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row align-items-center">
                                                            <div class="col-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="t_031_penurunanimunitas" name="t_031" disabled="disabled" value="9">
                                                                    <label>Penurunan Imunitas</label>
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
                                        <input class="form-check-input" type="radio" id="t_032_tidak" name="t_032" value="0">
                                        <label for="t_032_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_032_ya" name="t_032" value="1">
                                            <label for="t_032_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Kapan</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="datetime-local" name="v_58" id="v_58" disabled="disabled">
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
                                        <input class="form-check-input" type="radio" id="t_033_tidak" name="t_033" value="0">
                                        <label for="t_033_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_033_ya" name="t_033" value="1">
                                            <label for="t_033_ya">Ya,</label>
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
                                                    <input class="form-check-input" type="checkbox" id="t_034_pendengaran" name="t_034" disabled="disabled" value="1">
                                                    <label for="t_034_pendengaran">Pendengaran</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_034_pengelihatan" name="t_034" disabled="disabled" value="2">
                                                    <label for="t_034_pengelihatan">Pengelihatan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_034_kognitif" name="t_034" disabled="disabled" value="3">
                                                    <label for="t_034_kognitif">Kognitif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_034_fisik" name="t_034" disabled="disabled" value="4">
                                                    <label for="t_034_fisik">Fisik</label>
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
                                                    <input class="form-check-input" type="checkbox" id="t_034_budaya" name="t_034" disabled="disabled" value="5">
                                                    <label for="t_034_budaya">Budaya</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_034_emosi" name="t_034" disabled="disabled" value="6">
                                                    <label for="t_034_emosi">Emosi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_034_bahasa" name="t_034" disabled="disabled" value="7">
                                                    <label for="t_034_bahasa">Bahasa</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_034_lainnya" name="t_034" disabled="disabled" value="8">
                                                    <label for="t_034_lainnya">Lainnya</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" name="v_59" id="v_59" disabled="disabled">
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
                                        <input class="form-check-input" type="radio" id="t_035_tidak" name="t_035" value="0">
                                        <label for="t_035_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_035_ya" name="t_035" value="1">
                                            <label for="t_035_ya">Ya,</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Sebutkan</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="v_60" id="v_60" disabled="disabled">
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
                                        <input class="form-check-input" type="radio" id="t_036_tidak" name="t_036" value="0">
                                        <label for="t_036_tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="t_036_ya" name="t_036" value="1">
                                            <label for="t_036_ya">Ya</label>
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
                                                    <input class="form-check-input" type="checkbox" id="t_037_diagnosa" name="t_037" value="1">
                                                    <label for="t_037_diagnosa">Diagnosa dan managemen penyakit</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_037_obat" name="t_037" value="2">
                                                    <label for="t_037_obat">Obat-obatan/terapi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_037_diet" name="t_037" value="3">
                                                    <label for="t_037_diet">Diet dan Nutrisi</label>
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
                                                    <input class="form-check-input" type="checkbox" id="t_037_tindakan" name="t_037" value="4">
                                                    <label for="t_037_tindakan">Tindakan Keperawatan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input class="form-control" type="text" name="v_61" id="v_61" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_037_rehabilitasi" name="t_037" value="5">
                                                    <label for="t_037_rehabilitasi">Rehabilitasi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="t_037_managemennyari" name="t_037" value="6">
                                                    <label for="t_037_managemennyari">Managemen Nyeri</label>
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
                                                    <input class="form-check-input" type="checkbox" id="t_037_lainnya" name="t_037" value="7">
                                                    <label for="t_037_lainnya">Lain-lain, Sebutkan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="v_62" id="v_62" disabled="disabled">
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