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
            <h6 align="right">RM 7.2 BAG 2</h6>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h6 style="border:2px solid black; padding:5px">CATATAN PERSALINAN</h6>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>1. Tanggal</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_01" id="v_01">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>2. Nama Bidan</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_02" id="v_02">
                        </div>
                    </div>
                    <p class="mb-2">3. Tempat persalinan</p>
                    <div class="container mb-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_01" id="t_01_1" value="1">
                                    <label for="t_01_1">Rumah Ibu</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_01" id="t_01_2" value="2">
                                    <label for="t_01_2">Polindes</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_01" id="t_01_3" value="3">
                                    <label for="t_01_3">Klinik swasta</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_01" id="t_01_4" value="4">
                                    <label for="t_01_4">Puskesmas</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_01" id="t_01_5" value="5">
                                    <label for="t_01_5">Rumah sakit</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="t_01" id="t_01_6" value="6">
                                            <label for="t_01_6">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="v_03" id="v_03">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>4. Alamat tempat persalinan</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_04" id="v_04">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>5. Catatan</label>
                        </div>
                        <div class="col-md-7">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_02" id="t_02" value="1">
                                <label for="t_02">Rujuk</label>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center mb-1">
                            <div class="col-md-5">
                                <label> Kala</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_1" value="1">
                                    <label for="t_03_1">I</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_2" value="2">
                                    <label for="t_03_2">II</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_3" value="3">
                                    <label for="t_03_3">III</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_4" value="4">
                                    <label for="t_03_4">IV</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>6. Alasan merujuk</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_04" id="v_04">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>7. Tempat Rujukan</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_05" id="v_05">
                        </div>
                    </div>
                    <p class="mb-2">8. Pendamping saat merujuk</p>
                    <div class="container mb-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_04" id="t_04_1" value="1">
                                    <label for="t_04_1">Bidan</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_04" id="t_04_2" value="2">
                                    <label for="t_04_2">Teman</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_04" id="t_04_3" value="3">
                                    <label for="t_04_3">Suami</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_04" id="t_04_4" value="4">
                                    <label for="t_04_4">Dukun</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_04" id="t_04_5" value="5">
                                    <label for="t_04_5">Keluarga</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_04" id="t_04_6" value="6">
                                    <label for="t_04_6">Tidak ada</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mb-2">9. Masalah dalam kehamilan/persalinan ini :</p>
                    <div class="container mb-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_05" id="t_05_1" value="1">
                                    <label for="t_05_1">Gawat darurat</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_05" id="t_05_2" value="2">
                                    <label for="t_05_2">Pendarahan</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_05" id="t_05_3" value="3">
                                    <label for="t_05_3">HDK</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_05" id="t_05_4" value="4">
                                    <label for="t_05_4">Infeksi</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_05" id="t_05_5" value="5">
                                    <label for="t_05_5">PMTCT</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <h6>KALA I</h6>
                    <hr style="border:2px solid black">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label>Partogram melewati garis waspada</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_1" value="1">
                                <label for="t_06_1">Ya</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_2" value="2">
                                <label for="t_06_2">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>11. Masalah lain, sebutkan</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_06" id="v_06">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>12. Penatalaksanaan masalah tsb</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_07" id="v_07">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>13. Hasilnya</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_08" id="v_08">
                        </div>
                    </div>
                    <br>

                    <h6>KALA II</h6>
                    <hr style="border:2px solid black">
                    <p class="mb-2">14. Episiotomi </p>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_07" id="t_07_1" value="1">
                                    <label for="t_07_1">Ya, Indikasi</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_09" id="v_09">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_07" id="t_07_2" value="1">
                            <label for="t_07_2">Tidak</label>
                        </div>
                    </div>
                    <p class="mb-2">15. Pendamping saat persalinan</p>
                    <div class="container mb-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_08" id="t_08_1" value="1">
                                    <label for="t_08_1">Suami</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_08" id="t_08_2" value="2">
                                    <label for="t_08_2">Keluarga</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_08" id="t_08_3" value="3">
                                    <label for="t_08_3">Teman</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_08" id="t_08_4" value="4">
                                    <label for="t_08_4">Dukun</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="t_08" id="t_08_5" value="5">
                                    <label for="t_08_5">Tidak ada</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mb-2">16. Gawat Janin :</p>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_09" id="t_09_1" value="1">
                                    <label for="t_09_1">Ya, tindakan yang dilakukan</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="v_10" id="v_10" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_09" id="t_09_2" value="2">
                            <label for="t_09_2">Tidak</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_09" id="t_09_3" value="3">
                            <label for="t_09_3">Pemamtauan DJJ setiap 5 - 10 menit selama kala II, hasil <input size="4px" type="text" name="v_11" id="v_11"></label>
                        </div>
                    </div>
                    <p class="mb-2">17. Distosia bahu</p>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_010" id="t_010_1" value="1">
                                    <label for="t_010_1">Ya, tindakan yang dilakukan</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_11" id="v_11">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_010" id="t_010_2" value="2">
                            <label for="t_010_2">Tidak</label>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>18. Masalah lain, penatalaksanaan masalah tsb dan hasilnya</label>
                        </div>
                        <div class="col-md-7">
                            <textarea class="form-control" name="v_12" id="v_12" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <br>
                    <h6>KALA III</h6>
                    <hr style="border:2px solid black">
                    <p class="mb-2">19. Inisiasi Menyusu Dini </p>
                    <div class="container mb-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_011" id="t_011_1" value="1">
                            <label for="t_011">Ya</label>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_011" id="t_011_2" value="2">
                                    <label for="t_011_2">Tidak, alasanya</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_13" id="v_13">
                            </div>
                        </div>
                    </div>
                    <p>20. Lama Kala III : <input size="5px" type="text" name="v_14" id="v_14"> menit</p>
                    <p class="mb-2">21. Pemberian Oksitorsin 10 U lm?</p>
                    <div class="container">
                        <div class="row align-items-center mb-2">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_012" id="t_012_1" value="1">
                                    <label for="t_012_1">Ya, waktu</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="v_15" id="v_15">
                            </div>
                            <div class="col-md-5">
                                <label>menit sesudah persalinan</label>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_012" id="t_012_2" value="2">
                                    <label for="t_012_2">Tidak, alasanya</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_16" id="v_16">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-5">
                                <label for="t_06_pasien">Penjempitan tali pusar</label>
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="v_17" id="v_17">
                            </div>
                            <div class="col-md-5">
                                <label>menit setelah bayi lahir</label>
                            </div>
                        </div>
                    </div>
                    <p class="mb-2">22. Pemberian Oksitosin (2x)?</p>
                    <div class="container mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_013" id="t_013_1" value="1">
                                    <label for="t_013_1">Ya, alasanya</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_18" id="v_18">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_013" id="t_013_2" value="2">
                            <label for="t_013_2">Tidak</label>
                        </div>
                    </div>
                    <p class="mb-2">23. Penegangan tali pusat terkendali?</p>
                    <div class="container mb-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_014" id="t_014_1" value="1">
                            <label for="t_014_1">Ya</label>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_014" id="t_014_2" value="2">
                                    <label for="t_014_2">Tidak, alasanya</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_19" id="v_19">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <p class="mb-2">24. Masase fundus uteri?</p>
                    <div class="container mb-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_015" id="t_015_1" value="1">
                            <label for="t_015_1">Ya</label>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_015" id="t_015_2" value="2">
                                    <label for="t_015_2">Tidak, alasanya</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_20" id="v_20">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-7" for="">25. Plasenta lahir lengkap (intact)</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_016" id="t_016_1" value="1">
                            <label class="form-check-label" for="t_016_1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_016" id="t_016_0" value="0">
                            <label class="form-check-label" for="t_016_0">Tidak</label>
                        </div>
                    </div>
                    <div class="container mb-2">
                        <p>Jika tidak lengkap tindakan yang dilakukan :</p>
                        <textarea class="form-control" name="v_21" id="v_21" cols="30" rows="2"></textarea>
                    </div>
                    <p class="mb-2">26. Plasenta tidak lahir > 30 menit :</p>
                    <div class="container mb-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_017" id="t_017_1" value="1">
                            <label for="t_017_1">Tidak</label>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_017" id="t_017_2" value="2">
                                    <label for="t_017_2">Ya, alasanya</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_22" id="v_22">
                            </div>
                        </div>
                    </div>
                    <p class="mb-2">27. Laserasi :</p>
                    <div class="container mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_018" id="t_018_1" value="1">
                                    <label for="t_018_1">Ya, dimana</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_23" id="v_23">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_018" id="t_018_2" value="2">
                            <label for="t_018_2">Tidak</label>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-6">
                            <label class="mb-2">28. Jika laserasi parineum, derajat : </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_019" id="t_019_1" value="1">
                                <label for="t_019_1">1</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_019" id="t_019_2" value="2">
                                <label for="t_019_2">2</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_019" id="t_019_3" value="3">
                                <label for="t_019_3">3</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_019" id="t_019_4" value="4">
                                <label for="t_019_4">4</label>
                            </div>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <label for="">Tindakan</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_020" id="t_020_1" value="1">
                            <label for="t_020_1">Penjahitan dengan/tanpa anestesi</label>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_020" id="t_020_2" value="2">
                                    <label for="t_020_2">Tidak dijahit, alasan</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="v_24" id="v_24">
                            </div>
                        </div>
                    </div>
                    <p class="mb-2">29. Antoni uteri :</p>
                    <div class="container mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_021" id="t_021_1" value="1">
                                    <label for="t_021_1">Ya, tindakan</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_25" id="v_25">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_021" id="t_021_2" value="2">
                            <label for="t_021_2">Tidak</label>
                        </div>
                    </div>
                    <p class="mb-2">30. Jumlah darah yang keluar/pendarahan : <input size="5px" type="text" name="v_01" id="v_01"> mL</p>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-4">
                            <label>31. Masalah dan penatalaksanaan masalah tersebut</label>
                        </div>
                        <div class="col-md-7">
                            <textarea class="form-control" name="v_26" id="v_26" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center mb-1">
                            <div class="col-md-5">
                                <label>Hasilnya</label>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="v_27" id="v_27">
                            </div>
                        </div>
                    </div>
                    <br>

                    <h6>KALA IV</h6>
                    <hr style="border:2px solid black">
                    <p>32. Kondisi Ibu</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">KU</span>
                                    <input type="text" class="form-control" name="v_28" id="v_28">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">TD</span>
                                    <input type="text" class="form-control" name="tension_below" id="tension_below">
                                    <span class="input-group-text">/</span>
                                    <input type="text" class="form-control" name="tension_upper" id="tension_upper">
                                    <span class="input-group-text">mmHg</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nadi</span>
                                    <input type="text" class="form-control" name="nadi" id="nadi">
                                    <span class="input-group-text">x/menit</span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nafas</span>
                                    <input type="text" class="form-control" name="nafas" id="nafas">
                                    <span class="input-group-text">x/menit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>33. Masalah dan penatalaksanaan masalah</label>
                        </div>
                        <div class="col-md-7">
                            <textarea class="form-control" name="v_29" id="v_29" cols="30" rows="3"></textarea>
                        </div>
                    </div>

                    <h6>BAYI BARU LAHIR</h6>
                    <hr style="border:2px solid black">

                    <div class="mb-3">
                        <label class="col-3" for="">34. Berat Badan</label>
                        <input type="text" id="t_022" name="t_022"> gram
                    </div>

                    <div class="mb-3">
                        <label class="col-3" for="">35. Panjang Badan</label>
                        <input type="text" id="t_023" name="t_023"> cm
                    </div>

                    <div class="mb-3">
                        <label class="col-3" for="">36. Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_024" id="t_024_1" value="1">
                            <label class="form-check-label" for="t_024_1">L</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_024" id="t_024_2" value="2">
                            <label class="form-check-label" for="t_024_2">P</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-6" for="">37. Penilaian bayi baru lahir :</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_025" id="t_025_1" value="1">
                            <label class="form-check-label" for="t_025_1">Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_025" id="t_025_2" value="2">
                            <label class="form-check-label" for="t_025_2">Ada penyulit</label>
                        </div>
                    </div>


                    <div class="mb-1">
                        <p>38. Bayi lahir :</p>
                    </div>
                    <div class="container">
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="t_026" id="t_026_1" value="1">
                                <label class="form-check-label" for="t_026_1">Normal, tindakan :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_027" id="t_027_1" value="1">
                                    <label class="form-check-label" for="t_027_1">Mengeringkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_027" id="t_027_2" value="2">
                                    <label class="form-check-label" for="t_02272">Menghangatkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_027" id="t_027_3" value="3">
                                    <label class="form-check-label" for="t_027_3">Rangsangan Taktil</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_027" id="t_027_4" value="4">
                                    <label class="form-check-label" for="t_027_4">Memastikan IMD atau naluri menyusu segera</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="t_026" id="t_026_2" value="2">
                                <label class="form-check-label" for="t_026_2">Asfiksia ringat/pucat/biru/lemas, tindakan :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_028" id="t_028_1" value="1">
                                    <label class="form-check-label" for="t_028_1">Merangsang taktil</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_028" id="t_028_2" value="2">
                                    <label class="form-check-label" for="t_028_2">bebaskan jalan nafas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_028" id="t_028_3" value="3">
                                    <label class="form-check-label" for="t_028_3">Menghangatkan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="t_028" id="t_028_4" value="4">
                                    <label class="form-check-label" for="t_028_4">pakaian/selimut bayi dan tempatkan di sisi ibu</label>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                            <label for="t_06_pasien">Lain-lain, sebutkan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_30" id="v_30">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_026" id="t_026_3" value="3">
                                    <label for="t_026_3">Cacat bawaan, sebutkan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_31" id="v_31">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="t_026" id="t_026_4" value="4">
                            <label for="t_026_4">Hipotermi, tindakan</label>
                        </div>
                        <div class="container mb-2">
                            <textarea class="form-control" name="v_32" id="v_32" cols="30" rows="3"></textarea>
                        </div>
                    </div>

                    <p>39. Pemberian ASI setelah jam pertama bayi lahir</p>
                    <div class="container">
                        <div class="row align-items-center mb-2">
                            <div class="col-md-3">
                                <input type="radio" class="form-check-input" name="t_029" id="t_029_1" value="1">
                                <label for="t_029_1"> Ya, waktu</label>
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="v_33" id="v_33">
                            </div>
                            <div class="col-md-5">
                                <label>jam setelah bayi lahir</label>
                            </div>
                        </div>
                        <div class="row align-items-center mb-1">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="t_029" id="t_029_2" value="2">
                                    <label for="t_029_2">Tidak, alasan</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_34" id="v_34">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-5">
                            <label>40. Masalah lain, sebutkan</label>
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="v_35" id="v_35">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center mb-1">
                            <div class="col-md-5">
                                <label>Hasilnya</label>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="v_36" id="v_36">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border:2px solid black">
            <table id="tbody" class="table table-bordered border-black">
                <thead style="text-align:center; vertical-align:middle">
                    <tr>
                        <td>Jam ke</td>
                        <td>Waktu</td>
                        <td>Tekanan darah</td>
                        <td>Nadi</td>
                        <td>Suhu</td>
                        <td>Tinggi Fundus uteri</td>
                        <td>Kontraksi Uterus</td>
                        <td>Kandung Kemih</td>
                        <td>Darah Yang Keluar</td>
                    </tr>
                </thead>
                <tbody style="text-align:center; vertical-align:middle">
                    <tr>
                        <td>1</td>
                        <td>
                            <input class="form-control" type="time" id="v_37" name="v_37">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_38" name="v_38">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_39" name="v_39">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_40" name="v_40">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_41" name="v_41">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_42" name="v_42">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_43" name="v_43">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_44" name="v_44">
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <input class="form-control" type="time" id="v_45" name="v_45">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_46" name="v_46">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_47" name="v_47">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_48" name="v_48">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_49" name="v_49">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_50" name="v_50">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_51" name="v_51">
                        </td>
                        <td>
                            <input class="form-control" type="text" id="v_52" name="v_52">
                        </td>
                    </tr>
                </tbody>
                <tfoot style="text-align:center">
                    <td colspan="9">
                        <button type="button" class="btn btn-primary" onclick="addRow('tbody')">Tambah Baris</button>
                    </td>
                </tfoot>
            </table>
    </div>
    <script type="text/javascript">
        // JavaScript Document
        var no = 2;
        var i = 52;

        function addRow(tableID) {

            no1 = no + 1;
            i1 = i + 1;
            i2 = i + 2;
            i3 = i + 3;
            i4 = i + 4;
            i5 = i + 5;
            i6 = i + 6;
            i7 = i + 7;
            i8 = i + 8;

            $("#" + tableID).append($("<tr>")
                .append($("<td>").html(no1))
                .append($("<td>").html('<div class="form-group"><input type="time" class="form-control" id="v_' + i1 + '" name="v_' + i1 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i2 + '" name="v_' + i2 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i3 + '" name="v_' + i3 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i4 + '" name="v_' + i4 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i5 + '" name="v_' + i5 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i6 + '" name="v_' + i6 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i7 + '" name="v_' + i7 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="v_' + i8 + '" name="v_' + i8 + '"></div>'))
            )
            no += 1;
            i += 8;
        }
    </script>
    </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>