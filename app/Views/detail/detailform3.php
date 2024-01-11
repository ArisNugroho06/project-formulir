<!-- $db = db_connect();

foreach ($dataAssessmentpsa as $row) {
}; -->


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PENOLAKAN TINDAKAN ANESTESI LOKAL</title>

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

    <script type="text/javascript">
        $(function f1() {
            $("input[name='t_013']").click(function f1() {
                if ($("#t_013_status").is(":checked")) {
                    $("#v_15").removeAttr("disabled");
                    $("#v_16").removeAttr("disabled");
                    $("#v_17").removeAttr("disabled");
                    $("#v_18").removeAttr("disabled");
                    $("#t_014_laki").removeAttr("disabled");
                    $("#t_014_perempuan").removeAttr("disabled");
                    $("#v_23").focus();
                } else {
                    $("#v_15").attr("disabled", true);
                    $("#v_15").val("");
                    $("#v_16").attr("disabled", true);
                    $("#v_16").val("");
                    $("#v_17").attr("disabled", true);
                    $("#v_17").val("");
                    $("#v_18").attr("disabled", true);
                    $("#v_18").val("");
                    $("#t_014_laki").attr("disabled", true);
                    $("#t_014_laki").prop("checked", false);
                    $("#t_014_perempuan").attr("disabled", true);
                    $("#t_014_perempuan").prop("checked", false);
                }
            });
        });
    </script>

</head>

<body>

    <div class="container mt-5">
        <a class="btn btn-primary" href="<?= site_url('dataformulir/form3') ?>" role="button">Back</a>
    </div>


    <div class="container mt-5" style="text-align: center">
        <h2>RSUD Dr. M. YUNUS BENGKULU</h2>
    </div>
    <div class="container mt-3">
        <form action="<?= site_url('insert/create') ?>" method="post" autocomplete="off">
            <?php csrf_field(); ?>
            <input type="hidden" id="form" name="form" value="F3">
            <table class="table table-bordered" style="border: 1px solid black">
                <tr>
                    <td width="50%">
                        <div class="row mb-5">
                            <div class="col">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h1 class="text-center">PENOLAKAN TINDAKAN ANESTESI LOKAL</h1>
                            </div>
                    </td>
                    <td width="50%">
                        <div class="col">

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">No RM</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $detail['NO_REGISTRATION'] ?>" readonly>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Nama Lengkap</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $detail['THENAME'] ?>" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <label class="col-form-label">Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $detail['DATE_OF_BIRTH'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <label class="col-form-label">Umur</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="ageyear" id="ageyear" value="<?php echo $detail['AGEYEAR'] . 't ' .  $detail['AGEMONTH'] . 'b ' . $detail['AGEDAY'] . 'h' ?>" readonly>
                                            <input type="hidden" name="agemonth" id="agemonth" value="<?php echo $detail['AGEMONTH'] ?>">
                                            <input type="hidden" name="ageday" id="ageday" value="<?php echo $detail['AGEDAY'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $detail['GENDER'] ?>" readonly>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Alamat</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="theaddress" id="theaddress" cols="6" rows="2" readonly><?php echo $detail['THEADDRESS'] ?></textarea>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Dokter Penanggung Jawab Pasien</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="v_01" id="v_01" value="<?php echo $detail['V_01'] ?>" readonly>
                                </div>
                            </div>

                            <hr>

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Ruangan</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="class_room_id" id="class_room_id" value="<?php echo $detail['CLASS_ROOM_ID'] ?>" readonly>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label class="col-form-label">Tanggal dan Jam</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" value="<?php echo $detail['EXAMINATION_DATE'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    </td>
    </tr>
    </table>

    <h4 class="text-center">PEMBERIAN INFORMASI</h4>

    <div class="row align-items-center">
        <div class="col-md-2">
            <label class="col-form-label">Dokter Pelaksana Tindakan</label>
        </div>
        <div class="col-md-10">
            <input class="form-control" type="text" name="v_02" id="v_02" value="<?php echo $detail['V_02'] ?>" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-7">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <label class="col-form-label">Penanggung Jawab *</label>
                </div>
                <div class="col-md-8">
                    <select class="form-control" id="t_01" name="t_01" disabled>
                        <?php
                        // Menggunakan operator ternary untuk menentukan nilai terpilih
                        $selectedOption1 = ($detail['T_01'] == 1) ? 'selected' : '';
                        $selectedOption2 = ($detail['T_01'] == 2) ? 'selected' : '';

                        echo "<option value='1' $selectedOption1>Penerima Informasi</option>";
                        echo "<option value='2' $selectedOption2>Pemberi Persetujuan</option>";
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <input class="form-control" type="text" name="v_03" id="v_03" value="<?php echo $detail['V_03'] ?>" readonly>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered" style="border: 1px solid black">
        <thead class="text-center">
            <tr>
                <th width="5%">No</th>
                <th width="35%">Jenis Informasi</th>
                <th width="45%">Isi Informasi</th>
                <th width="15%">Tanda (v)</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Diagnosis (WD & DD)</td>
                <td>
                    <div class="form-group">
                        <input class="form-control" type="text" name="v_04" id="v_04" value="<?php echo $detail['V_04'] ?>" readonly>
                    </div>
                </td>
                <td class="text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_02" name="t_02" <?php echo ($detail['T_02'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">2</th>
                <td>Dasar Diagnosis</td>
                <td>
                    <div class="form-group">
                        <input class="form-control" type="text" name="v_05" id="v_05" value="<?php echo $detail['V_05'] ?>" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_03" name="t_03" <?php echo ($detail['T_03'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">3</th>
                <td>Tindakan Kedokteran</td>
                <td>
                    <div class="form-group">
                        <input class="form-control" type="text" name="v_06" id="v_06" value="<?php echo $detail['V_06'] ?>" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_04" name="t_04" <?php echo ($detail['T_04'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">4</th>
                <td>Indikasi Tindakan</td>
                <td>
                    <div class="form-group">
                        <input class="form-control" type="text" id="v_07" name="v_07" value="<?php echo $detail['V_07'] ?>" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_05" name="t_05" <?php echo ($detail['T_05'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>
            <tr>

            <tr>
                <th scope="row">5</th>
                <td>
                    <p>Tata Cara</p>
                </td>
                <td>
                    <p>Lokal Anestesi</p>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_06" name="t_06" <?php echo ($detail['T_06'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">6</th>
                <td>Tujuan</td>
                <td>
                    <div class="form-group">
                        <input class="form-control" type="text" name="v_08" id="v_08" value="<?php echo $detail['V_08'] ?>" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_07" name="t_07" <?php echo ($detail['T_07'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">7</th>
                <td>Risiko Komplikasi</td>
                <td>
                    <p>LOKAL ANESTESI: <br>
                        Hampir selalu terjadi, dampak minimal: <br>
                        1. Alergi/Reaksi Hipersensitif (Gatal-gatal) <br>
                        2. Nyeri <br>
                        3. Bengkak (odema, Hematom) <br>
                        4. Tehnik yang gagal <br>
                        Jarang terjadi, dampak yang besar: <br>
                        1. Perdarahan <br>
                        2. Infeksi <br>
                        3. Shock <br>
                        4. Penyembuhan luka terganggu <br>
                        5. Koma <br>
                        6. Kematian <br>

                    </p>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_08" name="t_08" <?php echo ($detail['T_08'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">9</th>
                <td>
                    <p>Prognosis</p>
                </td>
                <td>
                    <div class="form-group">
                        <input class="form-control" type="text" name="v_09" id="v_09" value="<?php echo $detail['V_09'] ?>" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_09" name="t_09" <?php echo ($detail['T_09'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">10</th>
                <td>
                    <p>Alternatif dan Risiko</p>
                </td>
                <td>
                    <div class="form-group">
                        <input class="form-control" type="text" name="v_10" id="v_10" value="<?php echo $detail['V_10'] ?>" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_010" name="t_010" <?php echo ($detail['T_010'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">11</th>
                <td>
                    <h6>Lain-lain</h6>
                </td>
                <td>
                    <p>Dokter anestesi bekerjasama dengan dokter operator dalam mengelola faktor-faktor yang ada untuk meminimalkan risiko yang mungkin timbul dengan mengutamakan keselamatan pasien</p>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="t_011" name="t_011" <?php echo ($detail['T_011'] == "1" ? 'checked' : ''); ?> disabled>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered" style="border: 1px solid black">
        <tr>
            <td>
                <p>Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jelas,
                    dan memberikan kesempatan untuk bertanya dan berdiskusi
                </p>
            </td>
            <td class="text-center" width="15%">
                <p>Tanda Tangan</p>
                <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
            </td>
        </tr>
        <tr>
            <td>
                <p>Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana diatas
                    kemudian yang saya berikan tanda paraf di kolom kanannya, dan telah memahaminya
                </p>
            </td>
            <td>
                <p class="text-center" width="15%">
                    Tanda Tangan
                </p>
                <canvas id="canvas1" width="150" height="90" style="border:1px solid #000;"></canvas>
            </td>
        </tr>
        <tr>
            <th colspan="2">* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</th>
        </tr>
    </table>


    <table class="table table-bordered" style="border: 1px solid black">
        <tr>
            <td>
                <h3 class="text-center">PENOLAKAN TINDAKAN ANESTESI LOKAL</h3>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Yang bertanda tangan dibawah ini, Saya, nama <input type="text" name="v_11" id="v_11" value="<?php echo $detail['V_11'] ?>" readonly> umur <input type="text" name="v_12" id="v_12" value="<?php echo $detail['V_12'] ?>" readonly> tahun,
                    <input type="radio" class="form-check-input" name="t_012" id="t_012_laki" <?php if ($detail['T_012'] == "1") echo 'checked' ?> disabled>
                    <label for="t_012_laki">Laki-laki</label>
                    <input type="radio" class="form-check-input" name="t_012" id="t_012_perempuan" <?php if ($detail['T_012'] == "2") echo 'checked' ?> disabled>
                    <label for="t_012_perempuan">Perempuan</label>,
                    alamat <input type="text" name="v_13" id="v_13" value="<?php echo $detail['V_13'] ?>" readonly> dengan ini menyatakan <strong>PENOLAKAN</strong> untuk dilakukannya tindakan <input type="text" name="v_14" id="v_14" value="<?php echo $detail['V_14'] ?>" readonly> terhadap
                    <input type="radio" class="form-check-input" name="t_013" id="t_013_saya" <?php if ($detail['T_013'] == "1") echo 'checked' ?> disabled>
                    <label for="t_013_saya">saya /</label>
                    <input type="radio" class="form-check-input" name="t_013" id="t_013_status" <?php if ($detail['T_013'] == "2") echo 'checked' ?> disabled>
                    <label><input type="text" name="v_15" id="v_15" disabled="disabled" value="<?php echo $detail['V_15'] ?>" readonly></label>
                    saya <br>
                    bernama <input type="text" name="v_16" id="v_16" disabled="disabled" value="<?php echo $detail['V_16'] ?>" readonly> umur <input type="text" name="v_17" id="v_17" disabled="disabled" value="<?php echo $detail['V_17'] ?>" readonly> tahun,
                    <input type="radio" class="form-check-input" name="t_014" id="t_014_laki" disabled="disabled" <?php if ($detail['T_014'] == "1") echo 'checked' ?> disabled>
                    <label for="t_014_laki">Laki-laki</label>
                    <input type="radio" class="form-check-input" name="t_014" id="t_014_perempuan" disabled="disabled" <?php if ($detail['T_014'] == "2") echo 'checked' ?> disabled>
                    <label for="t_014_perempuan">Perempuan</label>,
                    alamat <input type="text" name="v_18" id="v_18" disabled="disabled" value="<?php echo $detail['V_18'] ?>" readonly>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Saya memahami perlunya dan manfaat tindakan tersebut sebagaimana telah dijelaskan seperti diatas kepada saya termasuk risiko dan komplikasi yang mungkin timbul.
                    Saya juga menyadari bahwa dokter melakukan suatu upaya dan oleh karena ilmu kedokteran bukanlah ilmu pasti, maka keberhasilan tindakan kedokteran bukanlah keniscayaan, melainkan sangat bergantung kepada izin Tuhan Yang Maha Esa.
                </p>
            </td>
        </tr>
    </table>

    <div class="container mt-5">
        <table class="table text-center">
            <tr>
                <p>Bengkulu, <input type="datetime-local" name="v_19" id="v_19" value="<?php echo $detail['V_19'] ?>" readonly></p>
            </tr>
            <tr>
                <td>Yang Menyatakan</td>
                <td>Dokter</td>
                <td>Saksi 1</td>
                <td>Saksi 2</td>
            </tr>
            <tr>
                <td>
                    <canvas id="canvas2" width="150" height="90" style="border:1px solid #000;"></canvas>
                </td>
                <td>
                    <canvas id="canvas3" width="150" height="90" style="border:1px solid #000;"></canvas>
                </td>
                <td>
                    <canvas id="canvas4" width="150" height="90" style="border:1px solid #000;"></canvas>
                </td>
                <td>
                    <canvas id="canvas5" width="150" height="90" style="border:1px solid #000;"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="v_20" id="v_20" value="<?php echo $detail['V_20'] ?>" readonly>
                </td>
                <td>
                    <input type="text" name="v_21" id="v_21" value="<?php echo $detail['V_21'] ?>" readonly>
                </td>
                <td>
                    <input type="text" name="v_22" id="v_22" value="<?php echo $detail['V_22'] ?>" readonly>
                </td>
                <td>
                    <input type="text" name="v_23" id="v_23" value="<?php echo $detail['V_23'] ?>" readonly>
                </td>
            </tr>
        </table>
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

<script>
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var imageUrl = '<?= $detail['TTD'] ?>';
    var img = new Image();
    img.src = imageUrl;
    img.onload = function() {
        context.drawImage(img, 0, 0, canvas.width, canvas.height);
    };
</script>

<script>
    var canvas1 = document.getElementById('canvas1');
    var context1 = canvas1.getContext('2d');
    var imageUrl1 = '<?= $detail['TTD_1'] ?>';
    var img1 = new Image();
    img1.src = imageUrl1;
    img1.onload = function() {
        context1.drawImage(img1, 0, 0, canvas1.width, canvas1.height);
    };
</script>

<script>
    var canvas2 = document.getElementById('canvas2');
    var context2 = canvas2.getContext('2d');
    var imageUrl2 = '<?= $detail['TTD_2'] ?>';
    var img2 = new Image();
    img2.src = imageUrl2;
    img2.onload = function() {
        context2.drawImage(img2, 0, 0, canvas2.width, canvas2.height);
    };
</script>

<script>
    var canvas3 = document.getElementById('canvas3');
    var context3 = canvas3.getContext('2d');
    var imageUrl3 = '<?= $detail['TTD_3'] ?>';
    var img3 = new Image();
    img3.src = imageUrl3;
    img3.onload = function() {
        context3.drawImage(img3, 0, 0, canvas3.width, canvas3.height);
    };
</script>

<script>
    var canvas4 = document.getElementById('canvas4');
    var context4 = canvas4.getContext('2d');
    var imageUrl4 = '<?= $detail['TTD_4'] ?>';
    var img4 = new Image();
    img4.src = imageUrl4;
    img4.onload = function() {
        context4.drawImage(img4, 0, 0, canvas4.width, canvas4.height);
    };
</script>

<script>
    var canvas5 = document.getElementById('canvas5');
    var context5 = canvas5.getContext('2d');
    var imageUrl5 = '<?= $detail['TTD_5'] ?>';
    var img5 = new Image();
    img5.src = imageUrl5;
    img5.onload = function() {
        context5.drawImage(img5, 0, 0, canvas5.width, canvas5.height);
    };
</script>

</html>