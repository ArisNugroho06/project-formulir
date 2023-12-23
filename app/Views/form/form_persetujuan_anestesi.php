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

  <title>PERSETUJUAN TINDAKAN ANESTESI LOKAL</title>

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
      var sig = $('#ttd').signature();
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
      var sig = $('#ttd_1').signature();
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
      var sig = $('#ttd_2').signature();
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
      var sig = $('#ttd_3').signature();
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
      var sig = $('#ttd_4').signature();
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
      var sig = $('#ttd_5').signature();
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
      $("input[name='t_013']").click(function f1() {
        if ($("#t_013_status").is(":checked")) {
          $("#v_15").removeAttr("disabled");
          $("#v_16").removeAttr("disabled");
          $("#v_17").removeAttr("disabled");
          $("#v_18").removeAttr("disabled");
          $("#t_014_laki").removeAttr("disabled");
          $("#t_014_perempuan").removeAttr("disabled");
          $("#v_15").focus();
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
    <a class="btn btn-primary" href="<?= site_url('formulir/datapasien') ?>" role="button">Back</a>
  </div>


  <div class="container mt-5" style="text-align: center">
    <h2>RSUD Dr. M. YUNUS BENGKULU</h2>
  </div>
  <div class="container mt-3">
    <form action="<?= site_url('insert/create') ?>" method="post" autocomplete="off">
      <?php csrf_field(); ?>
      <input type="hidden" id="form" name="form" value="F2">
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
                <h1 class="text-center">PERSETUJUAN TINDAKAN ANESTESI LOKAL</h1>
              </div>
          </td>
          <td width="50%">
            <div class="col">

              <div class="row align-items-center">
                <div class="col-md-3">
                  <label class="col-form-label">No RM</label>
                </div>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $psn['NO_REGISTRATION'] ?>" readonly>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-3">
                  <label class="col-form-label">Nama Lengkap</label>
                </div>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $psn['THENAME'] ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-7">
                  <div class="row align-items-center">
                    <div class="col-md-5">
                      <label class="col-form-label">Tanggal Lahir</label>
                    </div>
                    <div class="col-md-7">
                      <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $psn['DATE_OF_BIRTH'] ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="row align-items-center">
                    <div class="col-md-3">
                      <label class="col-form-label">Umur</label>
                    </div>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="ageyear" id="ageyear" value="<?php echo $psn['AGEYEAR'] . 't ' .  $psn['AGEMONTH'] . 'b ' . $psn['AGEDAY'] . 'h' ?>" readonly>
                      <input type="hidden" name="agemonth" id="agemonth" value="<?php echo $psn['AGEMONTH'] ?>">
                      <input type="hidden" name="ageday" id="ageday" value="<?php echo $psn['AGEDAY'] ?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-3">
                  <label class="col-form-label">Jenis Kelamin</label>
                </div>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $psn['GENDER'] ?>" readonly>
                  <!-- <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="laki">
                    <label>Laki-laki</label>
                  </div>
                  <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="perempuan">
                    <label>Perempuan</label>
                  </div>
                </div> -->
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-3">
                  <label class="col-form-label">Alamat</label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control" name="theaddress" id="theaddress" cols="6" rows="2" readonly><?php echo $psn['THEADDRESS'] ?></textarea>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-3">
                  <label class="col-form-label">Dokter Penanggung Jawab Pasien</label>
                </div>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="v_01" id="v_01">
                </div>
              </div>

              <hr>

              <div class="row align-items-center">
                <div class="col-md-3">
                  <label class="col-form-label">Ruangan</label>
                </div>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="class_room_id" id="class_room_id" value="<?php echo $psn['CLASS_ROOM_ID'] ?>" readonly>
                </div>
              </div>


              <div class="row">
                <div class="col-md-9">
                  <div class="row align-items-center">
                    <div class="col-md-4">
                      <label class="col-form-label">Tanggal dan Jam</label>
                    </div>
                    <div class="col-md-7">
                      <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" value="<?php echo $psn['EXAMINATION_DATE'] ?>" readonly>
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
      <input class="form-control" type="text" name="v_02" id="v_02">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-7">
      <div class="row align-items-center">
        <div class="col-md-4">
          <label class="col-form-label">Penanggung Jawab *</label>
        </div>
        <div class="col-md-8">
          <select class="form-control" name="t_01">
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
          <input class="form-control" type="text" name="v_03" id="v_03">
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
            <input class="form-control" type="text" name="v_04" id="v_04">
          </div>
        </td>
        <td class="text-center">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="t_02" name="t_02" value="1">
          </div>
        </td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>Dasar Diagnosis</td>
        <td>
          <div class="form-group">
            <input class="form-control" type="text" name="v_05" id="v_05">
          </div>
        </td>
        <td>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="t_03" name="t_03" value="1">
          </div>
        </td>
      </tr>

      <tr>
        <th scope="row">3</th>
        <td>Tindakan Kedokteran</td>
        <td>
          <div class="form-group">
            <input class="form-control" type="text" name="v_06" id="v_06">
          </div>
        </td>
        <td>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="t_04" name="t_04" value="1">
          </div>
        </td>
      </tr>

      <tr>
        <th scope="row">4</th>
        <td>Indikasi Tindakan</td>
        <td>
          <div class="form-group">
            <input class="form-control" type="text" id="v_07" name="v_07">
          </div>
        </td>
        <td>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="t_05" name="t_05" value="1">
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
            <input class="form-check-input" type="checkbox" id="t_06" name="t_06" value="1">
          </div>
        </td>
      </tr>

      <tr>
        <th scope="row">6</th>
        <td>Tujuan</td>
        <td>
          <div class="form-group">
            <input class="form-control" type="text" name="v_08" id="v_08">
          </div>
        </td>
        <td>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="t_07" name="t_07" value="1">
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
            <input class="form-check-input" type="checkbox" id="t_08" name="t_08" value="1">
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
            <input class="form-control" type="text" name="v_09" id="v_09">
          </div>
        </td>
        <td>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="t_09" name="t_09" value="1">
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
            <input class="form-control" type="text" name="v_10" id="v_10">
          </div>
        </td>
        <td>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="t_010" name="t_010" value="1">
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
            <input class="form-check-input" type="checkbox" id="t_011" name="t_011" value="1">
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
        <div id="ttd"></div>
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
        <div id="ttd_1"></div>
      </td>
    </tr>
    <tr>
      <th colspan="2">* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</th>
    </tr>
  </table>


  <table class="table table-bordered" style="border: 1px solid black">
    <tr>
      <td>
        <h3 class="text-center">PERSETUJUAN TINDAKAN ANESTESI LOKAL</h3>
      </td>
    </tr>
    <tr>
      <td>
        <p>
          Yang bertanda tangan dibawah ini, Saya, nama <input type="text" name="v_11" id="v_11"> umur <input type="text" name="v_12" id="v_12"> tahun,
          <input type="radio" class="form-check-input" name="t_012" id="t_012_laki" value="1">
          <label for="t_012_laki">Laki-laki</label>
          <input type="radio" class="form-check-input" name="t_012" id="t_012_perempuan" value="2">
          <label for="t_012_perempuan">Perempuan</label>,
          alamat <input type="text" name="v_13" id="v_13"> dengan ini menyatakan <strong>PERSETUJUAN</strong> untuk dilakukannya tindakan <input type="text" name="v_14" id="v_14"> terhadap
          <input type="radio" class="form-check-input" name="t_013" id="t_013_saya" value="1">
          <label for="t_013_saya">saya /</label>
          <input type="radio" class="form-check-input" name="t_013" id="t_013_status" value="2">
          <label><input type="text" name="v_15" id="v_15" disabled="disabled"></label>
          saya <br>
          bernama <input type="text" name="v_16" id="v_16" disabled="disabled"> umur <input type="text" name="v_17" id="v_17" disabled="disabled"> tahun,
          <input type="radio" class="form-check-input" name="t_014" id="t_014_laki" value="1" disabled="disabled">
          <label for="t_014_laki">Laki-laki</label>
          <input type="radio" class="form-check-input" name="t_014" id="t_014_perempuan" value="2" disabled="disabled">
          <label for="t_014_perempuan">Perempuan</label>,
          alamat <input type="text" name="v_18" id="v_18" disabled="disabled">
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
        <p>Bengkulu, <input type="datetime-local" name="v_19" id="v_19"></p>
      </tr>
      <tr>
        <td>Yang Menyatakan</td>
        <td>Dokter</td>
        <td>Saksi 1</td>
        <td>Saksi 2</td>
      </tr>
      <tr>
        <td>
          <div id="ttd_2"></div>
        </td>
        <td>
          <div id="ttd_3"></div>
        </td>
        <td>
          <div id="ttd_4"></div>
        </td>
        <td>
          <div id="ttd_5"></div>
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="v_20" id="v_20">
        </td>
        <td>
          <input type="text" name="v_21" id="v_21">
        </td>
        <td>
          <input type="text" name="v_22" id="v_22">
        </td>
        <td>
          <input type="text" name="v_23" id="v_23">
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