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
            <div class="col-md-6">
                <h6>CATATAN PERSALINAN</h6>
                <hr style="border:2px solid black">
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
                        <input class="form-control" type="text" name="v_01" id="v_01">
                    </div>
                </div>
                <p class="mb-2">3. Tempat persalinan</p>
                <div class="container mb-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Rumah Ibu</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Polindes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Klinik swasta</label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Puskesmas</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Rumah sakit</label>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                        <label for="t_06_pasien">Lainnya</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="v_01" id="v_01">
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
                        <input class="form-control" type="text" name="v_01" id="v_01">
                    </div>
                </div>
                <div class="row align-items-center mb-1">
                    <div class="col-md-5">
                        <label>5. Catatan</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                            <label for="t_06_pasien">Rujuk</label>
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
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">I</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="2">
                                <label for="t_06_pasien">II</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">III</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="2">
                                <label for="t_06_pasien">IV</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-1">
                    <div class="col-md-5">
                        <label>6. Alasan merujuk</label>
                    </div>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="v_01" id="v_01">
                    </div>
                </div>
                <div class="row align-items-center mb-1">
                    <div class="col-md-5">
                        <label>7. Tempat Rujukan</label>
                    </div>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="v_01" id="v_01">
                    </div>
                </div>
                <p class="mb-2">8. Pendamping saat merujuk</p>
                <div class="container mb-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Bidan</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Teman</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Suami</label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Dukun</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Keluarga</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Tidak ada</label>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-2">9. Masalah dalam kehamilan/persalinan ini :</p>
                <div class="container mb-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Gawat darurat</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Pendarahan</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">HDK</label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Infeksi</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">PMTCT</label>
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
                            <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                            <label for="t_06_pasien">Ya</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="2">
                            <label for="t_06_pasien">Tidak</label>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-1">
                    <div class="col-md-5">
                        <label>11. Masalah lain, sebutkan</label>
                    </div>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="v_01" id="v_01">
                    </div>
                </div>
                <div class="row align-items-center mb-1">
                    <div class="col-md-5">
                        <label>12. Penatalaksanaan masalah tsb</label>
                    </div>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="v_01" id="v_01">
                    </div>
                </div>
                <div class="row align-items-center mb-1">
                    <div class="col-md-5">
                        <label>13. Hasilnya</label>
                    </div>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="v_01" id="v_01">
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
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Ya, Indikasi</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="v_01" id="v_01">
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                        <label for="t_06_pasien">Tidak</label>
                    </div>
                </div>
                <p class="mb-2">15. Pendamping saat persalinan</p>
                <div class="container mb-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Suami</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Keluarga</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Teman</label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Dukun</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Tidak ada</label>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-2">16. Gawat Janin :</p>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Ya, tindakan yang dilakukan</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" name="v_0" id="v_0" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                        <label for="t_06_pasien">Tidak</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                        <label for="t_06_pasien">Pemamtauan DJJ setiap 5 - 10 menit selama kala II, hasil <input size="5px" type="text" name="v_01" id="v_01"></label>
                    </div>
                </div>
                <p class="mb-2">17. Distosia bahu</p>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Ya, tindakan yang dilakukan</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="v_01" id="v_01">
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                        <label for="t_06_pasien">Tidak</label>
                    </div>
                </div>
                <div class="row align-items-center mb-1">
                    <div class="col-md-5">
                        <label>18. Masalah lain, penatalaksanaan masalah tsb dan hasilnya</label>
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control" name="v_0" id="v_0" cols="30" rows="3"></textarea>
                    </div>
                </div>
                <br>
                <h6>KALA III</h6>
                <hr style="border:2px solid black">
                <p class="mb-2">19. Inisiasi Menyusu Dini </p>
                <div class="container mb-3">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                        <label for="t_06_pasien">Ya</label>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Tidak, alasanya</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="v_01" id="v_01">
                        </div>
                    </div>
                </div>
                <p>20. Lama Kala III : <input size="5px" type="text" name="v_01" id="v_01"> menit</p>
                <p class="mb-2">22. Pemberian Oksitorsin 10 U lm?</p>
                <div class="container">
                    <div class="row align-items-center mb-2">
                        <div class="col-md-3">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Ya, waktu</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" name="v_01" id="v_01">
                        </div>
                        <div class="col-md-5">
                            <label>menit sesudah persalinan</label>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="t_06" id="t_06_pasien" value="1">
                                <label for="t_06_pasien">Tidak, alasanya</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="v_01" id="v_01">
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-md-4">
                            <label for="t_06_pasien">Penjempitan tali pusar</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="v_01" id="v_01">
                        </div>
                        <div class="col-md-5">
                            <label>menit setelah bayi lahir</label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-6">

            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>