<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>OBSERVASI PERSALINAN PACUAN</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url('js/jquery.signature.js') ?>"></script>



</head>

<body>

    <div class="container mt-5">
        <form action="<?= site_url('#') ?>" method="post" autocomplete="off">
            <?php csrf_field(); ?>
            <h6 align="right">RM 7.1</h6>
            <table class="table table-bordered mb-0" style="border: 1px solid black">
                <tr>
                    <td align="center" width="25%">
                        <img class="mt-2" src="<?= base_url('assets/logopku.png') ?>" width="90px">
                        <p class="mt-2">Sehat-Amanah <br> Tanggung Jawab-Islami</p>
                    </td>
                    <td class="text-center">
                        <h5 class="mt-4">RS. PKU MUHAMMADIYAH SAMPANGAN <br> SURAKARTA </h5>
                        <p>Semanggi RT 002 / RW 020 Pasar Kliwon<br> Telp 0271-633894 Fax. : 0271-630229 <br> SURAKARTA</p>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered mb-0" style="border: 1px solid black; border-bottom:0px">
                <tr>
                    <td width="35%" rowspan="2">
                        <h4 class="text-center mt-3">OBSERVASI PERSALINAN / <br> PACUAN</h4>
                    </td>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>No. RM</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_01" id="v_01">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Tgl. Lahir</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="date" name="v_02" id="v_02">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_03" id="v_03">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Kelas</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_04" id="v_04">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label for="">Masuk Kamar Bersalin Tanggal</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" type="date" name="v_05" id="v_05">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label for="">Jam (WIB)</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" type="time" name="v_06" id="v_06">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered mb-5 mt-0" style="border: 1px solid black;">
                <thead>
                    <tr class="text-center" style="vertical-align: middle;">
                        <td rowspan="2">TGl/JAM</td>
                        <td rowspan="2">N</td>
                        <td rowspan="2">TENSI</td>
                        <td rowspan="2">S</td>
                        <td colspan="4">H I S</td>
                        <td rowspan="2">CERVIX</td>
                        <td rowspan="2">DJJ</td>
                        <td rowspan="2">KETERANGAN</td>
                    </tr>
                    <tr class="text-center" style="vertical-align: middle;">
                        <td>FREQ</td>
                        <td>LAMA</td>
                        <td>KEKUATAN</td>
                        <td>SIMETRI</td>
                    </tr>
                </thead>

                <tbody id="tbody">
                    <tr>
                        <td>
                            <input class="form-control" type="datetime-local" name="v_07" id="v_07">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_08" id="v_08">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_09" id="v_09">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_10" id="v_10">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_11" id="v_11">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_12" id="v_12">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_13" id="v_13">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_14" id="v_14">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_15" id="v_15">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_16" id="v_16">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="v_17" id="v_17">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="11" align="center">
                            <button type="button" class="btn btn-success" onclick="addRow('tbody')">Tambah Baris</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

<script type="text/javascript">
    var i = 17;

    function addRow(tableID) {

        i1 = i + 1;
        i2 = i + 2;
        i3 = i + 3;
        i4 = i + 4;
        i5 = i + 5;
        i6 = i + 6;
        i7 = i + 7;
        i8 = i + 8;
        i9 = i + 9;
        i10 = i + 10;
        i11 = i + 11;

        $("#" + tableID).append($("<tr>")
            .append($("<td>").html('<div class="form-group"><input type="datetime-local" class="form-control" id="v_' + i1 + '" name="v_' + i1 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i2 + '" name="v_' + i2 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i3 + '" name="v_' + i3 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i4 + '" name="v_' + i4 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i5 + '" name="v_' + i5 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i6 + '" name="v_' + i6 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i7 + '" name="v_' + i7 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i8 + '" name="v_' + i8 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i9 + '" name="v_' + i9 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i10 + '" name="v_' + i10 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i11 + '" name="v_' + i11 + '"></div>'))

        )
        i += 11;
    }
</script>


</html>