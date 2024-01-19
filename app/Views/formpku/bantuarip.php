<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DIAGNOSA GANGGUAN CEMAS</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

</head>

<body>

    <div class="container mt-5 mb-5">
        <form action="<?= site_url('#') ?>" method="post" autocomplete="off">
            <?php csrf_field(); ?>
            <h6 align="right">RM 3.2.9</h6>
            <div class="row">
                <div class="col-md-3" align="center">
                    <img class="mt-2" src="<?= base_url('assets/logopku.png') ?>" width="90px">

                    <p class="mt-2">Sehat-Amanah <br> Tanggung Jawab-Islami</p>
                </div>
                <div class="col-md-5 mt-2">
                    <h5>RS. PKU MUHAMMADIYAH SAMPANGAN</h5>
                    <p>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta <br> Telp 0271-633894 Fax. : 0271-625229 <br> Jawa Tengah 57117</p>
                </div>
                <div class="col-md-4 align-items-center">
                    <div class="container mt-1" style="border:1px solid black; padding-top:70px; height:150px; border-radius: 10px">
                        <p class="text-center">Label Identitas Pasien</p>
                    </div>
                </div>
            </div>
            <br>
            <h6>D. RESIKO JATUH</h6>
            <table class="table table-bordered mt-0 mb-0" style="border:1px solid black">
                <tr class="text-center">
                    <th rowspan="19" width="3%"></th>
                    <th width="5%">No</th>
                    <th colspan="2">ASESMEN FAKTOR RESIKO JATUH DEWASA</th>
                    <th width="15%">Nilai</th>
                    <th>Skor Pasien</th>
                </tr>

                <tr style="vertical-align: middle;">
                    <td rowspan="2" class="text-center">1</td>
                    <td rowspan="2" width="25%">Riwayat jatuh (tidak termasuk) kecelakaan kerja dan lalu lintas</td>
                    <td>Tidak</td>
                    <td class="text-center">0</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="0"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Ya</td>
                    <td class="text-center">25</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="25"></td>
                </tr>

                <tr style="vertical-align: middle;">
                    <td rowspan="2" class="text-center">2</td>
                    <td rowspan="2" width="25%">Diagnose Sekunder</td>
                    <td>Tidak</td>
                    <td class="text-center">0</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="0"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Ya</td>
                    <td class="text-center">25</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="25"></td>
                </tr>

                <tr style="vertical-align: middle;">
                    <td rowspan="3" class="text-center">3</td>
                    <td rowspan="3" width="25%">Menggunakan Alat Bantu</td>
                    <td>Tidak ada/Bedrest/dibantu perawat</td>
                    <td class="text-center">0</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="0"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Kruk/Tungkat</td>
                    <td class="text-center">15</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="15"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Alat sekitar mis : Kursi Roda (Perabot)</td>
                    <td class="text-center">25</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="25"></td>
                </tr>

                <tr style="vertical-align: middle;">
                    <td rowspan="3" class="text-center">4</td>
                    <td rowspan="3" width="25%">Gaya Berjalan</td>
                    <td>Normal/Bedrest/Kursi roda</td>
                    <td class="text-center">0</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="0"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Lemah</td>
                    <td class="text-center">10</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="10"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Terganggu</td>
                    <td class="text-center">20</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="20"></td>
                </tr>

                <tr style="vertical-align: middle;">
                    <td rowspan="2" class="text-center">5</td>
                    <td rowspan="2" width="25%">Status mental</td>
                    <td>Menyadari kemampan</td>
                    <td class="text-center">0</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="0"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Dimensia(Lupa)/Agitasi/Konfius(gelisah)</td>
                    <td class="text-center">15</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="15"></td>
                </tr>

                <tr style="vertical-align: middle;">
                    <td rowspan="2" class="text-center">6</td>
                    <td rowspan="2" width="25%">Menggunakan infuse/ heparin (pengencer darah)</td>
                    <td>Tidak</td>
                    <td class="text-center">0</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="0"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Ya</td>
                    <td class="text-center">20</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="20"></td>
                </tr>

                <tr style="vertical-align: middle;">
                    <td rowspan="3" class="text-center">7</td>
                    <td rowspan="3" width="25%">Medikasi</td>
                    <td>Sedative</td>
                    <td class="text-center">10</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="10"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Post anastesiumum dan reginal dalam 24 jam terakhir</td>
                    <td class="text-center">20</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="20"></td>
                </tr>
                <tr style="vertical-align: middle;">
                    <td>Tidak</td>
                    <td class="text-center">0</td>
                    <td class="text-center"><input class="form-check-input" type="radio" id="t_0" name="t_0" value="0"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">
                        <h6>TOTAL SKOR</h6>
                    </td>
                    <td>190</td>
                    <td>
                        <input class="form-control" type="text" name="t_0" id="t_0" readonly>
                    </td>
                </tr>

                <tr>
                    <td colspan="6">
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <b>Resiko Jatuh : </b>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="t_0" name="t_0" value="1">
                                    <b><label for="t_0">Rendah, skor : 0-24</label></b>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="t_0" name="t_0" value="2">
                                    <b><label for="t_0">Sedang, skor : 33-34</label></b>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                                    <b><label for="t_0">Tinggi, > 44</label></b>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered mt-0 mb-0" style="border:1px solid black">
                <tr>
                    <td colspan="6">
                        <h6>E. ASESMEN NYERI</h6>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <label>Nyeri : </label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                                        <label for="t_0">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                                                <label for="t_0">Ya, Bila Ya, Skala : </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" name="v_02" id="v_02">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="5" width="3%"></td>
                    <td>Deskripsi Nyeri</td>
                    <td>P</td>
                    <td>
                        <input class="form-control" type="text" name="v_02" id="v_02">
                    </td>
                    <td colspan="2">Karakteristik Nyeri</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Q</td>
                    <td>
                        <input class="form-control" type="text" name="v_02" id="v_02">
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                            <label for="t_0">Tidak Nyeri</label>
                        </div>
                    </td>
                    <td>Skor : 0</td>
                </tr>
                <tr>
                    <td></td>
                    <td>R</td>
                    <td>
                        <input class="form-control" type="text" name="v_02" id="v_02">
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                            <label for="t_0">Nyeri Ringan</label>
                        </div>
                    </td>
                    <td>Skor : 1-3</td>
                </tr>
                <tr>
                    <td></td>
                    <td>S</td>
                    <td>
                        <input class="form-control" type="text" name="v_02" id="v_02">
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                            <label for="t_0">Nyeri Sedang</label>
                        </div>
                    </td>
                    <td>Skor : 4-6</td>
                </tr>
                <tr>
                    <td></td>
                    <td>T</td>
                    <td>
                        <input class="form-control" type="text" name="v_02" id="v_02">
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                            <label for="t_0">Nyeri Berat</label>
                        </div>
                    </td>
                    <td>Skor : 7-10</td>
                </tr>
            </table>
            <table class="table table-bordered mt-0 mb-0" style="border:1px solid black">
                <tr>
                    <td colspan="4">
                        <h6>F. ASESMEN NUTRISI</h6>
                        <div class="container">
                            <p>Asesmen nutrisi pasien dewasa (Malnutrition Universal Scoring Treatment)</p>
                        </div>
                    </td>
                </tr>
                <tr class="text-center">
                    <td width="3%" rowspan="5"></td>
                    <th width="45%">PENILAIAN</th>
                    <th width="15%">SKOR</th>
                    <th>Resiko Mal Nutrisi</th>
                </tr>
                <tr>
                    <td>IMT</td>
                    <td>
                        <select class="form-select" name="t_0">
                            <option selected>Pilih</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </td>
                    <td rowspan="3" style="vertical-align: middle;">
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                            <label for="t_0">Resiko rendah Skor : 0</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                            <label for="t_0">Resiko sedang skor : 1</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" id="t_0" name="t_0" value="3">
                            <label for="t_0">Resiko, tinggi, skor : 2</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Presentasi kehilangan BB yang tidak diharapkan</td>
                    <td>
                        <select class="form-select" name="t_0">
                            <option selected>Pilih</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Efek penyakit yang diterima</td>
                    <td>
                        <select class="form-select" name="t_0">
                            <option selected>Pilih</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Total Skor</td>
                    <td><input class="form-control" type="text" name="t_0" id="t_0" readonly></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>