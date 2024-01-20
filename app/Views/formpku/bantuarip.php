<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FORMULIR OBSERVASI, KEISITIMEWAAN, DAN TINDAKAN</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

</head>

<body>

    <div class="container-fluid flex mt-5">
        <form action="<?= site_url('#') ?>" method="post" autocomplete="off">
            <?php csrf_field(); ?>
            <h6 align="right">RM 7.4</h6>
            <table class="table mb-0">
                <tr>
                    <td align="center" width="20%">
                        <img class="mt-2" src="<?= base_url('assets/logopku.png') ?>" width="90px">
                        <p class="mt-2">Sehat-Amanah <br> Tanggung Jawab-Islami</p>
                    </td>
                    <td width="60%">
                        <h5 class="mt-4">RS. PKU MUHAMMADIYAH SAMPANGAN</h5>
                        <p>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta <br> Telp 0271-633894 Fax. : 0271-630229 <br> Jawa Tengah 57117</p>
                    </td>
                    <td width="20%">
                        <div class="col-md-12 align-items-center" style="padding-top:30px">
                            <div class="container mt-1" style="border:1px solid black; padding-top:40px; height:100px; border-radius: 10px">
                                <p class="text-center">Label Identitas Pasien</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h6 class="text-center">FORMULIR OBSERVASI, KEISITIMEWAAN, DAN TINDAKAN</h6>
                    </td>
                </tr>
            </table>
            <div class="bd-example">
                <div class="table-responsive">
                    <table class="table table-bordered mt-3" style="border:1px solid black">
                        <tr class="text-center" style="vertical-align: middle">
                            <td rowspan="2">Tanggal/Jam</td>
                            <td colspan="4">Tanda Vital</td>
                            <td rowspan="2">Kesadaran</td>
                            <td rowspan="2">SPO2 (Saturasi)</td>
                            <td rowspan="2">Pupil</td>
                            <td colspan="2">Reflek</td>
                            <td rowspan="2">Oral Hygiene</td>
                            <td rowspan="2">Mandi</td>
                            <td rowspan="2">Buang Air Kecil</td>
                            <td rowspan="2">Buang Air Besar</td>
                            <td rowspan="2">Mobilisasi</td>
                            <td rowspan="2">Nutrisi</td>
                            <td rowspan="2">Nama/TTD</td>
                            <td rowspan="2">Jam</td>
                            <td rowspan="2">Observasi, Keistimewaan, Tindakan</td>
                            <td rowspan="2">Nama/TTD</td>
                        </tr>
                        <tr class="text-center" style="vertical-align: middle">
                            <td>TENSI</td>
                            <td>NADI</td>
                            <td>SUHU</td>
                            <td>PERNAFASAN</td>
                            <td>MOTORIK</td>
                            <td>SENSORIK</td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-control" type="datetime-local" name="v_01" id="v_01">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="v_02" id="v_02">/
                                <input class="form-control" type="text" name="v_02" id="v_02">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="v_03" id="v_03">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="v_04" id="v_04">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="v_05" id="v_05">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="v_06" id="v_06">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="v_07" id="v_07">
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
                                <canvas id="canvas" width="150" height="75" style="border:1px solid #000;"></canvas>
                                <input type="hidden" id="ttd" name="ttd">
                                <input class="form-control" type="text" name="v_17" id="v_17">
                            </td>
                            <td>
                                <input class="form-control" type="time" name="v_18" id="v_18">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="v_19" id="v_19">
                            </td>
                            <td>
                                <canvas id="canvas1" width="150" height="75" style="border:1px solid #000;"></canvas>
                                <input type="hidden" id="ttd_1" name="ttd_1">
                                <input class="form-control" type="text" name="v_20" id="v_20">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

<script>
    var canvas = document.getElementById('canvas');
    const canvasDataInput = document.getElementById('ttd');
    var context = canvas.getContext('2d');

    var drawing = false;

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = '#000';

        // Draw a line
        context.lineTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
        context.stroke();
        context.beginPath();
        context.moveTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context.beginPath();
    }

    function saveSignatureData() {
        const canvasData = canvas.toDataURL('image/png');
        canvasDataInput.value = canvasData;
    }
</script>

<script>
    var canvas1 = document.getElementById('canvas1');
    const canvasDataInput1 = document.getElementById('ttd_1');
    var context1 = canvas1.getContext('2d');
    var drawing = false;

    canvas1.addEventListener('mousedown', startDrawing);
    canvas1.addEventListener('mousemove', draw);
    canvas1.addEventListener('mouseup', stopDrawing);
    canvas1.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context1.lineWidth = 2;
        context1.lineCap = 'round';
        context1.strokeStyle = '#000';

        context1.lineTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
        context1.stroke();
        context1.beginPath();
        context1.moveTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context1.beginPath();
    }

    function saveSignatureData1() {
        const canvasData1 = canvas1.toDataURL('image/png');

        canvasDataInput1.value = canvasData1;
    }
</script>

</html>