<?php
$db = db_connect();

foreach ($dataAssessmentptk as $row) {
};
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Formulir Penolakan Tindakan Kedokteran</title>

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

  <script>
    $(function() {
      var sig = $('#sig3').signature();
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
      var sig = $('#sig4').signature();
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
      var sig = $('#sig5').signature();
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

  <script type="text/javascript">
    $(function f1() {
      $("input[name='t_015']").click(function f1() {
        if ($("#t_015_status").is(":checked")) {
          $("#v_33").removeAttr("disabled");
          $("#v_34").removeAttr("disabled");
          $("#v_35").removeAttr("disabled");
          $("#v_36").removeAttr("disabled");
          $("#t_016_laki").removeAttr("disabled");
          $("#t_016_perempuan").removeAttr("disabled");
          $("#v_33").focus();
        } else {
          $("#v_33").attr("disabled", true);
          $("#v_33").val("");
          $("#v_34").attr("disabled", true);
          $("#v_34").val("");
          $("#v_35").attr("disabled", true);
          $("#v_35").val("");
          $("#v_36").attr("disabled", true);
          $("#v_36").val("");
          $("#t_016_laki").attr("disabled", true);
          $("#t_016_laki").prop("checked", false);
          $("#t_016_perempuan").attr("disabled", true);
          $("#t_016_perempuan").prop("checked", false);
        }
      });
    });
  </script>

</head>

<body>

  <div class="container mt-5">
    <a class="btn btn-primary" href="<?= site_url('home/index') ?>" role="button">Back</a>
  </div>
  <div class="container mt-5" style="text-align: right">
    <h2>RM 08</h2>
  </div>
  <form action="<?= site_url('formulir/addaksi') ?>" method="post">
    <div class="container mt-3">
      <table class="table table-bordered" style="border: 1px solid black">
        <tr>
          <td width="40%">
            <div class="row mb-5">
              <div class="col">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1 class="text-center">FORMULIR PENOLAKAN TINDAKAN DOKTER</h1>
              </div>
          </td>
          <td width="60%">
            <div class="col">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">No RM</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Nama Lengkap</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $row->THENAME; ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <label class="col-form-label">Tanggal Lahir</label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row->DATE_OF_BIRTH; ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row align-items-center">
                    <div class="col-md-3">
                      <label class="col-form-label">Umur</label>
                    </div>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="ageyear " id="ageyear" value="<?php echo $row->AGEYEAR . 't ' .  $row->AGEMONTH . 'b  ' . $row->AGEDAY . 'h'; ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Jenis Kelamin</label>
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $row->GENDER; ?>" readonly>
                  <!-- <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="laki">
                    <label>Laki-laki</label>
                  </div>
                  <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="perempuan">
                    <label>Perempuan</label>
                  </div> -->
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Alamat</label>
                </div>
                <div class="col-md-8">
                  <textarea class="form-control" name="theaddress" id="theaddress" cols="6" rows="2" readonly><?php echo $row->THEADDRESS; ?></textarea>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Dokter Penanggung Jawab Pasien</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="v_06" id="v_06">
                </div>
              </div>

              <hr>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Ruangan</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="class_room_id" id="class_room_id" value="<?php echo $row->CLASS_ROOM_ID; ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <label class="col-form-label">Tanggal dan Jam</label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" value="<?php echo $row->EXAMINATION_DATE; ?>" readonly>
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
        <input class="form-control" type="text" name="v_10" id="v_10">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-7">
        <div class="row align-items-center">
          <div class="col-md-4">
            <label class="col-form-label">Penanggung Jawab *</label>
          </div>
          <div class="col-md-8">
            <select class="form-control" name="t_02">
              <option selected>Pilih</option>
              <option value="1">Penerima Informasi</option>
              <option value="2">Pemberi Persetujuan</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="row align-items-center">
          <div class="col-md-12">
            <input class="form-control" type="text" name="v_11" id="v_11">
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
              <input class="form-control" type="text" name="v_13" id="v_13">
            </div>
          </td>
          <td class="text-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_03_wddd" name="t_03" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Dasar Diagnosis</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_14" id="v_14">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_04_diagnosis" name="t_04" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Tindakan Kedokteran</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_15" id="v_15">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_05_kedokteran" name="t_05" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Indikasi Tindakan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" id="v_16" name="v_16">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_06_tindakan" name="t_06" value="1">
            </div>
          </td>
        </tr>
        <tr>

        <tr>
          <th scope="row" rowspan="3">5</th>
          <td>
            <h6>Tata Cara :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            <p>Tipe Sedasi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_17" id="v_17">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_07_sedasi" name="t_07" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Uraian singkat prosedur dan Tahapan yang penting</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_18" id="v_18">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_07_uraian" name="t_07" value="2">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">6</th>
          <td>Tujuan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_19" id="v_19">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_08_tujuan" name="t_08" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">7</th>
          <td>Risiko</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_20" id="v_20">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_09_risiko" name="t_09" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">8</th>
          <td>Komplikasi</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_21" id="v_21">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_010_komplikasi" name="t_010" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row" rowspan="4">9</th>
          <td>
            <h6>Prognosis :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            <p>Prognosis Vital</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_22" id="v_22">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_011_pvital" name="t_011" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Prognosis Fungsi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_23" id="v_23">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_011_pfungsi" name="t_011" value="2">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Prognosis Kesembuhan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_24" id="v_24">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_011_pkesembuhan" name="t_011" value="3">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">10</th>
          <td>
            <h6>Alternatif dan Risiko</h6>
            <p>Pilihan Pengobatan/Penatalaksanaan</p>
          </td>
          <td>
            <div class="form-group">
              <br>
              <input class="form-control" type="text" name="v_25" id="v_25">
            </div>
          </td>
          <td>
            <div class="form-check">
              <br>
              <input class="form-check-input" type="checkbox" id="t_012_alternatif" name="t_012" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th rowspan="4">11</th>
          <td colspan="3">
            <h6>Hal lain yang akan dilakukan untuk :</h6>
          </td>
        </tr>
        <tr>
          <td>
            <p>Perluasan Tindakan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_26" id="v_26">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_013_perluasan" name="t_013" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Konsultasi selama tindakan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_27" id="v_27">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_013_konsultasi" name="t_013" value="2">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Resusitasi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_28" id="v_28">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_013_resusitasi" name="t_013" value="3">
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
          <div id="sig"></div>
        </td>
      </tr>
      <tr>
        <td>
          <p>Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana diatas
            kemudian yang saya berikan tanda paraf di kolom kanannya, dan telah memahaminya
          </p>
        </td>
        <td>
          <p class="text-center" width="15%">Tanda Tangan</p>
          <div id="sig1"></div>
        </td>
      </tr>
      <tr>
        <th>* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</th>
        <td></td>
      </tr>
    </table>


    <table class="table table-bordered" style="border: 1px solid black">
      <tr>
        <td>
          <h2 class="text-center">PENOLAKAN TINDAKAN KEDOKTERAN</h2>
        </td>
      </tr>
      <tr>
        <td>
          <p>
            Yang bertanda tangan dibawah ini, Saya, nama <input type="text" name="v_29" id="v_29"> umur <input type="text" name="v_30" id="v_30"> tahun,
            <input type="radio" class="form-check-input" name="t_014" id="t_014_laki" value="1">
            <label for="t_014_laki">Laki-laki</label>
            <input type="radio" class="form-check-input" name="t_014" id="t_014_perempuan" value="2">
            <label for="t_014_perempuan">Perempuan</label>,
            alamat <input type="text" name="v_31" id="v_31"> dengan ini menyatakan <strong>PENOLAKAN</strong> untuk dilakukannya tindakan <input type="text" name="v_32" id="v_32"> terhadap
            <input type="radio" class="form-check-input" name="t_015" id="t_015_saya" value="1">
            <label for="t_015_saya">saya /</label>
            <input type="radio" class="form-check-input" name="t_015" id="t_015_status" value="2">
            <label><input type="text" name="v_33" id="v_33" disabled="disabled"></label>
            saya <br>
            bernama <input type="text" name="v_34" id="v_34" disabled="disabled"> umur <input type="text" name="v_35" id="v_35" disabled="disabled"> tahun,
            <input type="radio" class="form-check-input" name="t_016" id="t_016_laki" value="1" disabled="disabled">
            <label for="t_016_laki">Laki-laki</label>
            <input type="radio" class="form-check-input" name="t_016" id="t_016_perempuan" value="2" disabled="disabled">
            <label for="t_016_perempuan">Perempuan</label>,
            alamat <input type="text" name="v_36" id="v_36" disabled="disabled">
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
          <p>Bengkulu, <input type="datetime-local" name="v_37" id="v_37"></p>
        </tr>
        <tr>
          <td>Yang Menyatakan</td>
          <td>Dokter</td>
          <td>Saksi 1</td>
          <td>Saksi 2</td>
        </tr>
        <tr>
          <td>
            <div id="sig2"></div>
          </td>
          <td>
            <div id="sig3"></div>
          </td>
          <td>
            <div id="sig4"></div>
          </td>
          <td>
            <div id="sig5"></div>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="v_38" id="v_38">
          </td>
          <td>
            <input type="text" name="v_39" id="v_39">
          </td>
          <td>
            <input type="text" name="v_40" id="v_40">
          </td>
          <td>
            <input type="text" name="v_41" id="v_41">
          </td>
        </tr>
      </table>
    </div>

    <div class="d-grid gap-2 mb-3">
      <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
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

</html>