<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DOKUMEN PEMBERIAN INFORMASI INFORMASI JATUH PASIEN</title>

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
            <h6 align="right">RM 8e</h6>
            <table class="table table-bordered mb-0" style="border: 1px solid black">
                <tr>
                    <td align="center">
                        <img class="mt-2" src="<?= base_url('assets/logopku.png') ?>" width="90px">
                        <p class="mt-2">Sehat-Amanah <br> Tanggung Jawab-Islami</p>
                    </td>
                    <td>
                        <h5 class="mt-4">RS. PKU MUHAMMADIYAH SAMPANGAN</h5>
                        <p>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta <br> Telp 0271-633894 Fax. : 0271-630229 <br> Jawa Tengah 57117</p>
                    </td>
                    <td width="30%">
                        <div class="col-md-12 align-items-center">
                            <div class="container mt-1" style="border:1px solid black; padding-top:70px; height:160px; border-radius: 10px">
                                <p class="text-center">Label Identitas Pasien</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h5 class="text-center">DOKUMEN PEMBERIAN INFORMASI INFORMASI JATUH PASIEN</h5>
                    </td>
                </tr>
            </table>

            <table class="table table-bordered mb-5" style="border: 1px solid black">
                <tr>
                    <td colspan="4">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Pemberi Informasi</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_01" id="v_01">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <select class="form-select" name="t_01">
                                    <option selected>Pilih</option>
                                    <option value="1">Penerima Informasi</option>
                                    <option value="2">Pemberi Persetujuan</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_02" id="v_02">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Diberikan pada tanggal / jam</label>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="datetime-local" name="v_03" id="v_03">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="text-center">
                    <th width="5%">No</th>
                    <th width="30%">JENIS INFORMASI</th>
                    <th>ISI INFORMASI</th>
                    <th width="15%">CEKLIST</th>
                </tr>
                <tr>
                    <td rowspan="15" class="text-center">1.</td>
                    <td rowspan="15">Faktor Resiko Pasien Jatuh</td>
                    <td>Gangguan Pendengaran</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_02" id="t_02" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Gangguan pengelihatan</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_03" id="t_03" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Terpasang chateter urine</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_04" id="t_04" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Terpasang infuse/CVP</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_05" id="t_05" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Menggunakan obat pencahar</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_06" id="t_06" value="1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Usia</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_04" id="v_04">
                            </div>
                        </div>
                    </td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_07" id="t_07" value="1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Mobilisasi</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_05" id="v_05">
                            </div>
                        </div>
                    </td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_08" id="t_08" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Tergantung pada kursi roda</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_09" id="t_09" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Riwayat jaruh dalam 30 hari</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_010" id="t_010" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Rasa baal pada ekstremitas</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_011" id="t_011" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Menggunakan obat sedasi</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_012" id="t_012" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Perlu bantuan ambulasi</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_013" id="t_013" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Perlu bantuan dalam proses eliminasi</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_014" id="t_014" value="1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label>Post Operasi</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="v_06" id="v_06">
                            </div>
                        </div>
                    </td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_015" id="t_015" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Riwayat kejang/vertigo/depresi/pingsan/pusing/delirium/disoriensi lingkungan</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_016" id="t_016" value="1">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2.</td>
                    <td>Tingkat Resiko Jatuh</td>
                    <td>Rendah/ Sedang / Tinggi</td>
                    <td>
                        <select class="form-select" name="t_017">
                            <option selected>Pilih</option>
                            <option value="1">Rendah</option>
                            <option value="2">Sedang</option>
                            <option value="0">Tinggi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" rowspan="6">3.</td>
                    <td rowspan="6">Tingkat pencegahan resiko jatuh</td>
                    <td>Orientasi lingkungan dan fasilitas ruang perawatan (letak bel, posisi tempat tidur, dengan posisi terendah dan roda terkunci, letak kamar masi)</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_018" id="t_018" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Pemasangan tanda resiko jatuh (gelang pasien)</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_019" id="t_019" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Pemasangan pengaman/ pagar tempat tidur</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_020" id="t_020" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Mendekatkan semua kebutuhan pasien (bed side cabinet, alat-alatyang dibutuhkan pasien)</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_021" id="t_021" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Anjuran untuk menggunakan sandal anti licin</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_022" id="t_022" value="1">
                    </td>
                </tr>
                <tr>
                    <td>Bantuan perawat (beri tahu perawat bila membutuhkan sesuatu)</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_023" id="t_023" value="1">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4.</td>
                    <td>Tujuan tindakan pencegahan resiko jatuh</td>
                    <td>Pasien aman dari resiko jatuh selama menjalani perawatan di rumah sakit</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_024" id="t_024" value="1">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5.</td>
                    <td>Akibat dari resiko jatuh</td>
                    <td>Timbulnya cedera</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_025" id="t_025" value="1">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">6. </td>
                    <td>Lain-lain</td>
                    <td>
                        <textarea class="form-control" name="v_07" id="v_07" style="height: 100px"></textarea>
                    </td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="checkbox" class="form-check-input" name="t_026" id="t_026" value="1">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Dengan ini menyatakan bahwa saya telah menyatakan hal-hal di atas secara benar dan jelas dan memberikan kesempatan untuk bertanya dan/atau berdiskusi</td>
                    <td>
                        <p class="text-center">Tanda Tangan <br> Pemberi Informasi</p>
                        <canvas id="canvas" width="150" height="100" style="border:1px solid #000;"></canvas>
                        <input type="hidden" id="ttd" name="ttd">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Dengan ini menyatakan bahwa saya telah meneria informasi sebagaimana di atas yang saya beri tanda/paraf di kolom kanannya dan telah memahaminya</td>
                    <td>
                        <p class="text-center">Tanda Tangan <br> Penerima Informasi</p>
                        <canvas id="canvas1" width="150" height="100" style="border:1px solid #000;"></canvas>
                        <input type="hidden" id="ttd_1" name="ttd_1">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"> Ket : Bila pasien tidak kompeten atau tidak mau menerima informasi maka penerima informasi adalah wali atau keluarga terdekat</td>
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