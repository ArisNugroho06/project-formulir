<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DIAGNOSA DEFISIT PERAWATAN DIRI</title>

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
            <h6 align="right">RM 3.4</h6>
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
                    <td>
                        <div class="col-md-12 align-items-center">
                            <div class="container mt-1" style="border:1px solid black; padding-top:70px; height:160px; border-radius: 10px">
                                <p class="text-center">Label Identitas Pasien</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h5 class="text-center">EARLY WARNING SCORING SYSTEM (ANAK)</h5>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered mb-0 mt-0 fw-bold" style="border: 1px solid black">
                <tr>
                    <td colspan="2" width="60%">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <strong><label>Tanggal</label></strong>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" type="date" name="v_01" id="v_01">
                            </div>
                        </div>
                    </td>
                    <td width="25%"></td>
                    <td width="15%" class="text-center"><strong>SKOR</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <label>Jam</label>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" type="time" name="v_02" id="v_02">
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="4" class="bg-warning text-center" width="15%" style="vertical-align: middle;">KEADAAN UMUM </td>
                    <td class="bg-info">Interaksi biasa</td>
                    <td class="text-center bg-info" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_01" id="t_01_0" value="0">
                    </td>
                    <td class="text-center bg-info">0</td>
                </tr>
                <tr>
                    <td>Somnolen</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_01" id="t_01_1" value="1">
                    </td>
                    <td class="text-center">1</td>
                </tr>
                <tr>
                    <td>Iritable</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_01" id="t_01_2" value="2">
                    </td>
                    <td class="text-center">2</td>
                </tr>
                <tr>
                    <td>Letargi, gelisah, penurunan respon terhadap nyeri </td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_01" id="t_01_3" value="3">
                    </td>
                    <td class="text-center">3</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td rowspan="4" class="bg-warning text-center" width="15%" style="vertical-align: middle;">KARDIO VASKULER</td>
                    <td>Tidak sianotik ATAU pengisian kapiler ˂ 2 detik</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_02" id="t_02_0" value="0">
                    </td>
                    <td class="text-center">0</td>
                </tr>
                <tr>
                    <td>Tampak pucat ATAU pengisian kapiler 2 detik</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_02" id="t_02_1" value="1">
                    </td>
                    <td class="text-center">1</td>
                </tr>
                <tr>
                    <td>Tampak sianotik ATAU pengisian kapiler > 2 detik ATAU Takikardi >20x diatas parameter N sesuai usia</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_02" id="t_02_2" value="2">
                    </td>
                    <td class="text-center">2</td>
                </tr>
                <tr>
                    <td class="bg-info">Sianotik dan motled ATAU pengisian kapiler > 5 detik ATAU Takikardi > 30 detik diatas parameter N sesuai usia ATAU bradikardia </td>
                    <td class="text-center bg-info" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_02" id="t_02_3" value="3">
                    </td>
                    <td class="text-center bg-info">3</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td rowspan="4" class="bg-warning text-center" width="15%" style="vertical-align: middle;">RESPIRASI</td>
                    <td>Respirasi dalam parameter normal tidak terdapat retraksi </td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_03" id="t_03_0" value="0">
                    </td>
                    <td class="text-center">0</td>
                </tr>
                <tr>
                    <td>Takipneu >10x diatas parameter RR sesua usia permenit ATAU menggunakan otot alat bantu napas ATAU menggunakan FiO2 lebih dari 30% (setara dengan 3 L/menit nasal kanul) </td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_03" id="t_03_1" value="1">
                    </td>
                    <td class="text-center">1</td>
                </tr>
                <tr>
                    <td>Takipneu >20x diatas parameter RR sesua usia / mnt ATAU ada retraksi ATAU menggunakan FiO2 lebih dari 40% (setara dengan 6 L/menit nasal kanul)</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_03" id="t_03_2" value="2">
                    </td>
                    <td class="text-center">2</td>
                </tr>
                <tr>
                    <td class="bg-info">Laju respirasi >5 dibawah nilai normal dengan retraksi berat ATAU menggunakan menggunakan FiO2 lebih dari 50% (setara dengan 8 L/mnt simple mask) </td>
                    <td class="text-center bg-info" style="vertical-align: middle;">
                        <input type="radio" class="form-check-input" name="t_03" id="t_03_3" value="3">
                    </td>
                    <td class="text-center bg-info">3</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">TOTAL SKOR</td>
                    <td>
                        <input class="form-control" type="text" name="t_04" id="t_04" readonly>
                    </td>
                    <td width="15%" class="text-center"><strong>SKOR</strong></td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">SKALA NYERI (0 - 10)</td>
                    <td colspan="2">
                        <div class="container">
                            <input type="range" id="t_05" name="t_05" min="0" max="10" list="markers" value="0" style="width: 100%;" />
                            <datalist id="markers">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </datalist>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">SATURASI O2 (SPO2)</td>
                    <td></td>
                    <td>
                        <input class="form-control" type="text" name="t-06" id="t-06">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="container" align="center">
                            <table class="table table-bordered mb-2 mt-2 fw-bold text-center" style="border: 1px solid black; width:80%">
                                <tr class="bg-info">
                                    <th></th>
                                    <th>Usia</th>
                                    <th>Nadi Saat Istirahat <br> (x/menit)</th>
                                    <th>Nafas Saat Istirahat <br> (x/menit)</th>
                                </tr>
                                <tr>
                                    <td>Neonatus</td>
                                    <td>0 - 1 Bulan</td>
                                    <td>100 - 180</td>
                                    <td>40 - 60</td>
                                </tr>
                                <tr>
                                    <td>Bayi</td>
                                    <td>1 - 12 Bulan</td>
                                    <td>100 - 180</td>
                                    <td>35 - 40</td>
                                </tr>
                                <tr>
                                    <td>Balita</td>
                                    <td>13 - 36 Bulan</td>
                                    <td>70 - 110</td>
                                    <td>25 - 30</td>
                                </tr>
                                <tr>
                                    <td>Pra-Sekolah</td>
                                    <td>4 - 6 Tahun</td>
                                    <td>70 - 110</td>
                                    <td>21 - 23</td>
                                </tr>
                                <tr>
                                    <td>Sekolah</td>
                                    <td>7 - 12 Tahun</td>
                                    <td>70 - 110</td>
                                    <td>19 - 21</td>
                                </tr>
                                <tr>
                                    <td>Remaja</td>
                                    <td>13 - 19 Tahun</td>
                                    <td>55 - 90</td>
                                    <td>16 - 18</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered mb-2 mt-0" style="border: 1px solid black">
                <tr style="background-color: yellowgreen;">
                    <td>
                        <h6>SKOR 0-2 </h6>
                    </td>
                    <td>
                        <strong>
                            SKOR 0-2 Pasien dalam kondisi stabil. Monitoring secara rutin, jika diperlukan per 4 jam dan jika perlu asesmen oleh dokter jaga bangsal
                        </strong>
                    </td>
                </tr>
                <tr class="bg-warning">
                    <td>
                        <h6>SKOR 3-4 </h6>
                    </td>
                    <td>
                        <strong>
                            Ada perubahan kondisi pasien. Lakukan evaluasi ulang setiap 2 jam atau lebih cepat. Lapor dan konsultasikan ke DPJP . Eskalasi terapi sesuai kondisi.
                        </strong>
                    </td>
                </tr>
                <tr class="bg-danger">
                    <td>
                        <h6>SKOR 5 ATAU LEBIH ATAU SKOR 3 PADA SALAH SATU PARAMETER </h6>
                    </td>
                    <td>
                        <strong>
                            Ada perubahan yang signifikan. Monitoring setiap 1 jam atau lebih cepat. Lapor dan konsultasikan pada DPJP. Lakukan resusitasi dan monitoring kontinyu pada kondisi yang mengancam jiwa.
                        </strong>
                    </td>
                </tr>
                <tr class="bg-primary">
                    <td>
                        <h6>HENTI JANTUNG </h6>
                    </td>
                    <td>
                        <strong>
                            Lakukan RJP, Aktivasi Kode Biru (888/tombol kodebiru/Nurse call)
                        </strong>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>