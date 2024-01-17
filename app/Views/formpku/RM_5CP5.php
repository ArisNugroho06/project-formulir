<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RENCANA ASUHAN KEPERAWATAN</title>

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
            <h6 align="right">RM 5CP5</h6>
            <div class="row">
                <div class="col-md-3" align="center">
                    <img class="mt-2" src="<?= base_url('assets/logopku.png') ?>" width="90px">

                    <p class="mt-2">Sehat-Amanah <br> Tanggung Jawab-Islami</p>
                </div>
                <div class="col-md-5 mt-2">
                    <h5>RS. PKU MUHAMMADIYAH SAMPANGAN</h5>
                    <p>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta <br> Telp 0271-633894 Fax. : 0271-630229 <br> Jawa Tengah 57117</p>
                </div>
                <div class="col-md-4 align-items-center">
                    <div class="container mt-1" style="border:1px solid black; padding-top:70px; height:150px; border-radius: 10px">
                        <p class="text-center">Label Identitas Pasien</p>
                    </div>
                </div>
            </div>
            <br>
            <table class="table table-bordered mb-2" style="border: 2px solid black">
                <tr>
                    <td colspan="5">
                        <h5 class="text-center">RENCANA ASUHAN KEPERAWATAN</h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-center bg-secondary" style="color:white;">
                        <h5>(D.0024) IKTERIK NEONATUS</h5>
                    </td>
                </tr>
                <tr class="text-center">
                    <th width="15%">Tgl / Jam</th>
                    <th width="20%">Diagnosis Keperawatan</th>
                    <th width="20%">Luaran / Outcome</th>
                    <th width="30%">Intervensi Keperawatan</th>
                    <th width="15%">TTD / Nama</th>
                </tr>
                <tr>
                    <td>
                        <input class="form-control" type="datetime-local" name="v_01" id="v_01">
                    </td>
                    <td>
                        <p>Ikterik neonatus b.d</p>
                        <br>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Penurunan berat badan abnormal (> 7 - 8 % pada bayi yang baru lahir menyusu ASI, > 15% pada bayi yang cukup bulan)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Pola makan tidak ditetapkan dengan baik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Usia < 7</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Kerterlambatan keluar feces mekonium</label>
                        </div>
                        <br>
                        <br>
                        <strong>
                            <p>Ditandai <br> Mayor :</p>
                        </strong>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Profil darah abnormal (hemofilis, bilirubin serum total > 2mg/dl, bilirubin serum total pada rentang resiko tinggi menurut usia)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Membrane mukosa kuning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Kulit kuning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Selera kuning</label>
                        </div>
                        <br>
                        <br>
                        <strong>
                            <p>Minor : <br> -</p>
                        </strong>
                    </td>
                    <td>
                        <p>Setelah dilakukan intervensi keperawatan selama <input size="10px" type="text" name="v_06" id="v_06">. <br> Maka integritas kulit dan jaringan meningkat, dengan kriteria hasil : <br> <br> (L.14125)</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Elastisitas meningkat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Hidrasi meningkat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Perfusi jaringan meningkat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Kerusakan jaringan menurun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Kerusakan lapisan kulit menurun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Pigmentasi abnormal menurun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Nekrosis menurun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Nyeri menurun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="t_025" name="t_025" value="1">
                            <label for="t_025">Suhu kulit membaik</label>
                        </div>
                    </td>
                </tr>
            </table>
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

</html>