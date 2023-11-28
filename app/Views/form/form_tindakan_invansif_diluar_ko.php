<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulir Tindakan Invasif Di Luar KO</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>jQuery UI Signature Basics</title>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">
    <style>
        .kbw-signature {
            width: 100px;
            height: 50px;
        }
    </style>
    <!--[if IE]>
    <script src="excanvas.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url('js/jquery.signature.js') ?>"></script>
    <script>
        $(function() {
            var sig = $('#sig').signature();
            $('#disable').click(function() {
                var disable = $(this).text() === 'Disable';
                $(this).text(disable ? 'Enable' : 'Disable');
                sig.signature(disable ? 'disable' : 'enable');
            });
            $('#clear').click(function() {
                sig.signature('clear');
            });
        });
    </script>

    <script>
        $(function() {
            var sig = $('#sig1').signature();
            $('#disable').click(function() {
                var disable = $(this).text() === 'Disable';
                $(this).text(disable ? 'Enable' : 'Disable');
                sig.signature(disable ? 'disable' : 'enable');
            });
            $('#clear').click(function() {
                sig.signature('clear');
            });
        });
    </script>

    <script>
        $(function() {
            var sig = $('#sig2').signature();
            $('#disable').click(function() {
                var disable = $(this).text() === 'Disable';
                $(this).text(disable ? 'Enable' : 'Disable');
                sig.signature(disable ? 'disable' : 'enable');
            });
            $('#clear').click(function() {
                sig.signature('clear');
            });
        });
    </script>

</head>

<body>


    <div class="container-fluid" style="text-align: center">
        <h4>RSUD Dr. M. YUNUS BENGKULU</h4>
    </div>
    <div class="container-fluid fixed mt-3">
        <table class="table table-bordered mb-0" style="border: 1px solid black">
            <tr>
                <td width="50%">
                    <div class="row mb-5">
                        <div class="col">
                            <br>
                            <br>
                            <h3 class="text-center">CHECK LIST PROSEDUR KESELAMATAN PADA TINDAKAN INVASIF DI LUAR KAMAR OPERASI</h3>
                        </div>
                    </div>
                </td>
                <td width="50%">
                    <div class="col">
                        <form>
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">No. Rekam Medis</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="no_Registration " id="no_Registration " readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <label class="col-form-label">Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" name="thename " id="thename " readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <label class="col-form-label">Nama Keluarga</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" name="alloanamnesis_contact" id="alloanamnesis_contact" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <label class="col-form-label">Tgl. Lahir</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="date" name="v_04" id="v_04" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <div class="col-7">
                                            <input class="form-control" type="text" name="gender" id="gender" readonly>
                                            <!-- <select class="form-control" name="t_01">
                                                <option selected>Pilih</option> 
                                                <option value="1">L</option>
                                                <option value="2">P</option>
                                            </select>          -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="col-form-label">Ruangan</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="v_05" id="v_05">
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3">
                                    <form action="upload_img" method="post" enctype="multipart/form-data">
                                        <label>Stiker Pasien</label>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <input type="file" name="upload" id="upload">
                                </div>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        </table>

        <table class="table table-bordered" style="border:1px solid black">
            <tr>
                <td width="35%">
                    <form>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Nama Dokter</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_06" id="v_06">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Nama Tindakan</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_07" id="v_07">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Diagnosa Medis</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_08" id="v_08">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Tanggal Tindakan</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="v_09" id="v_09">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label">Ruang Tindakan</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="v_10" id="v_10">
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label"><strong>SIGN IN</strong> pukul</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="time" name="v_11" id="v_11">
                            </div>
                        </div>

                        <p>(Dilakukan di ruang persiapan, minimal oleh perawat)</p>

                        <p>1. Pasien telah dikonfirmasikan</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Identifikasi dan gelang pasien</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_02" id="t_02_ya">
                                    <label for="t_02_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_02" id="t_02_tidak">
                                    <label for="t_02_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Asal Rujukan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_ya">
                                    <label for="t_03_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_03" id="t_03_tidak">
                                    <label for="t_03_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tindakan yang akan dilakukan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_04" id="t_04_ya">
                                    <label for="t_04_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_04" id="t_04_tidak">
                                    <label for="t_04_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Formulir persetujuan tindakan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_05" id="t_05_ya">
                                    <label for="t_05_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_05" id="t_05_tidak">
                                    <label for="t_05_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Formulir persetujuan Anesthesia</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_06" id="t_06_ya">
                                    <label for="t_06_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_06" id="t_06_tidak">
                                    <label for="t_06_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <p>2. Pasien sudah puasa 4 / 6 / 8 jam</p>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Minum/makan terakhir pukul</label>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="time" name="v_12" id="v_12">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Jumlah</label>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="v_13" id="v_13">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;*Obat yang diminum sebelumnnya</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_07" id="t_07_ya">
                                    <label for="t_07_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_07" id="t_07_tidak">
                                    <label for="t_07_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">3. Pasien yang sudah di cek hasil lab :</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_08" id="t_08_ya">
                                    <label for="t_08_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_08" id="t_08_tidak">
                                    <label for="t_08_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Hb</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_14" id="v_14">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Trombosit</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_15" id="v_15">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;APTT</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_16" id="v_16">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">HT</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_17" id="v_17">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">PT</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_18" id="v_18">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">Lain2</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_19" id="v_19">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">4. Cek EKG (untuk pasien > 40 Tahun)</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_09" id="t_09_ya">
                                    <label for="t_09_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_09" id="t_09_tidak">
                                    <label for="t_09_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">5. Cek Pencitraan</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_20" id="v_20">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_010" id="t_010_ya">
                                    <label for="t_010_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_010" id="t_010_tidak">
                                    <label for="t_010_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">6. Cek Pemeriksaan Penunjang Lain </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_21" id="v_21">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_011" id="t_011_ya">
                                    <label for="t_011_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_011" id="t_011_tidak">
                                    <label for="t_011_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">7. Cek Alat Bed Side Monitor</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_012" id="t_012_ya">
                                    <label for="t_012_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_012" id="t_012_tidak">
                                    <label for="t_012_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Cek Alat Instrument yang Telah Steril</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_013" id="t_013_ya">
                                    <label for="t_013_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_013" id="t_013_tidak">
                                    <label for="t_013_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Cek Mesin Suction</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_014" id="t_014_ya">
                                    <label for="t_014_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_014" id="t_014_tidak">
                                    <label for="t_014_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Cek Meja Operasi</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_015" id="t_015_ya">
                                    <label for="t_015_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_015" id="t_015_tidak">
                                    <label for="t_015_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">8. Apakah alat telah steril ?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_016" id="t_016_ya">
                                    <label for="t_016_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_016" id="t_016_tidak">
                                    <label for="t_016_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">9. Apakah persiapan obat anesthesia/sedasi?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_017" id="t_017_ya">
                                    <label for="t_017_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_017" id="t_017_tidak">
                                    <label for="t_017_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
                <td width="35%">
                    <form>

                        <p>10. Apakah pasien memiliki riwayat :</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Alergi obat (secara umum)?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_018" id="t_018_ya">
                                    <label for="t_018_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_018" id="t_018_tidak">
                                    <label for="t_018_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Alergi Premedikasi?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_019" id="t_019_ya">
                                    <label for="t_019_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_019" id="t_019_tidak">
                                    <label for="t_019_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Asthma?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_020" id="t_020_ya">
                                    <label for="t_020_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_020" id="t_020_tidak">
                                    <label for="t_020_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Lain-lain</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="form-control" type="text" name="v_22" id="v_22">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_021" id="t_021_ya">
                                    <label for="t_021_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_021" id="t_021_tidak">
                                    <label for="t_021_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">11. Apakah pasien memiliki resiko jatuh?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_022" id="t_022_ya">
                                    <label for="t_022_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_022" id="t_022_tidak">
                                    <label for="t_022_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">12. Apakah pasien telah menggunakan pakaian tindakan?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_023" id="t_023_ya">
                                    <label for="t_023_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_023" id="t_023_tidak">
                                    <label>Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">13. Apakah pasien telah diinfus/IV line?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_024" id="t_024_ya">
                                    <label for="t_024_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_024" id="t_024_tidak">
                                    <label for="t_024_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">14. Apakah pasien telah melepaskan gigi palsu dan kacamata?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_025" id="t_025_ya">
                                    <label for="t_025_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_025" id="t_025_tidak">
                                    <label for="t_025_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label"><strong>TIME OUT</strong> pukul</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="time" name="v_23" id="v_23">
                            </div>
                        </div>

                        <p>(Dilakukan sebelm dokter melakukan tindakan)</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">1. Tim medis telah memperkenalkan nama dan peran masing-masing</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_026" id="t_026_ya">
                                    <label for="t_026_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_026" id="t_026_tidak">
                                    <label for="t_026_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <p>2. Dokter/perawat melakukan konfirmasi verbal : </p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Nama Pasien</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_027" id="t_027_ya">
                                    <label for="t_027_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_027" id="t_027_tidak">
                                    <label for="t_027_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Lahir</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_028" id="t_028_ya">
                                    <label for="t_028_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_028" id="t_028_tidak">
                                    <label for="t_028_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tindakan</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_029" id="t_029_ya">
                                    <label for="t_029_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_029" id="t_029_tidak">
                                    <label for="t_029_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">3. Apakah hasil pemeriksaan sebelumnya tersedia</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_030" id="t_030_ya">
                                    <label for="t_030_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_030" id="t_030_tidak">
                                    <label for="t_030_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="col-form-label"><strong>SIGN OUT</strong> pukul</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="time" name="v_24" id="v_24">
                            </div>
                        </div>

                        <p>Dilakukan sebelum pasien meninggalkan ruang tindakan dan diruang pemulihan diisi oleh perawat</p>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">1. Tim medis mengkonfirmasi secara verbal nama prosedur</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_031" id="t_031_ya">
                                    <label for="t_030_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_031" id="t_031_ytidak">
                                    <label for="t_030_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <label class="col-form-label">2. Label identitas pasien pada spesimen biopsi</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_032" id="t_032_ya">
                                    <label for="t_032_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_032" id="t_032_tidak">
                                    <label for="t_032_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Nama Pasien : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_25" id="v_25">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Lahir : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="date" name="v_26" id="v_26">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;No. Rekam Medis : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_27" id="v_27">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_033" id="t_033_laki" value="laki">
                                    <label for="t_033_laki">Laki-laki</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_033" id="t_033_perempuan" value="perempuan">
                                    <label for="t_033_perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Tindakan : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_28" id="v_28">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;Lokasi Pengambilan : </label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="v_29" id="v_29">
                            </div>
                        </div>
                    </form>
                </td>
                <td width="30%">
                    <form>
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">3. Kondisi Alat dalam keadaan baik</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_034" id="t_034_ya">
                                    <label for="t_034_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_034" id="t_034_tidak">
                                    <label for="t_034_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">4. Foto USG bila diperlukan</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_035" id="t_035_ya">
                                    <label for="t_035_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_035" id="t_035_tidak">
                                    <label for="t_035_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">5. Observasi Pemulihan</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_036" id="t_036_ya">
                                    <label for="t_036_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_036" id="t_036_tidak">
                                    <label for="t_036_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Kesadaran :</p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="t_037_cm" name="t_037">
                                    <label for="t_037_cm">Compos Mentis</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_037_del" name="t_037">
                                    <label for="t_037_del">Delirium</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_037_coma" name="t_037">
                                    <label for="t_037_coma">Coma</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_037_sam" name="t_037">
                                    <label for="t_037_sam">Samnolen</label><br>
                                    <input class="form-check-input" type="checkbox" id="t_037_sc" name="t_037">
                                    <label for="t_037_sc">Soporo coma</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Gangguan Sistem Pernafasan : </p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hipoksia</p>
                            <div class="col-md-7">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sumbatan jalan nafas </label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_038" id="t_038_ya">
                                    <label for="t_038_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_038" id="t_038_tidak">
                                    <label for="t_038_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;- Gangguan Sistem Kardiovaskuler Arithima</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_039" id="t_039_ya">
                                    <label for="t_039_ya">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="t_039" id="t_039_tidak">
                                    <label for="t_039_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;Diketahui</p>

                        <div class="row">
                            <table align="bottom" style="justify-content: center; width: 100%;">
                                <tr>
                                    <br><br><br><br><br><br>
                                    <td style="text-align: center; width: 30%;">
                                        <label for="" style="text-align: center;">Operator</label>
                                        <br>
                                        <div id="sig"></div>
                                        <br><input type="text" id="v_30" name="v_30" size="5px">
                                    </td>
                                    <td style="text-align: center; width: 30%;">
                                        <label for="" style="text-align: center;">Perawat</label>
                                        <br>
                                        <div id="sig1"></div>
                                        <br><input type="text" id="v_31" name="v_31" size="5px">
                                    </td>
                                    <td style="text-align: center; width: 30%;">
                                        <label for="" style="text-align: center;">Dokter Anastesi</label>
                                        <br>
                                        <div id="sig2"></div>
                                        <br><input type="text" id="v_32" name="v_32" size="5px">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                    <br>
                    <br>
                    <strong>
                        <p>Beri tanda √ pada kotak yang sesui pernyataan untuk pernyataan Ya/Tidak</p>
                    </strong>
                </td>
            </tr>
        </table>
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