<!-- $db = db_connect();

foreach ($dataAssessmentptk as $row) {
}; -->

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

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

  <script>
    $(function() {
      var sig = {
        container: $('#ttd').signature({
          color: '#0000ff'
        }),

        formSave: function(formData) {
          formData.append("ttd", b4sign.container.signature('toJSON'));
          $.ajax({
            url: "<?= site_url('formulir/addaksi') ?>",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
          });
        },
      }
      sig.container;

      $(document).on('submit', '#form', function(event) {
        b4sign.formSave(new FormData(this));
      });

    });
  </script>

  <script>
    $(function() {
      var sig = $('#ttd_1').signature();
    });
  </script>

  <script>
    $(function() {
      var sig = $('#ttd_2').signature();
    });
  </script>

  <script>
    $(function() {
      var sig = $('#ttd_3').signature();
    });
  </script>

  <script>
    $(function() {
      var sig = $('#ttd_4').signature();
    });
  </script>

  <script>
    $(function() {
      var sig = $('#ttd_5').signature();
    });
  </script>

  <script type="text/javascript">
    $(function f1() {
      $("input[name='t_019']").click(function f1() {
        if ($("#t_019_status").is(":checked")) {
          $("#v_24").removeAttr("disabled");
          $("#v_25").removeAttr("disabled");
          $("#v_26").removeAttr("disabled");
          $("#v_27").removeAttr("disabled");
          $("#t_020_laki").removeAttr("disabled");
          $("#t_020_perempuan").removeAttr("disabled");
          $("#v_24").focus();
        } else {
          $("#v_24").attr("disabled", true);
          $("#v_24").val("");
          $("#v_25").attr("disabled", true);
          $("#v_25").val("");
          $("#v_26").attr("disabled", true);
          $("#v_26").val("");
          $("#v_27").attr("disabled", true);
          $("#v_27").val("");
          $("#t_020_laki").attr("disabled", true);
          $("#t_020_laki").prop("checked", false);
          $("#t_020_perempuan").attr("disabled", true);
          $("#t_020_perempuan").prop("checked", false);
        }
      });
    });
  </script>

</head>

<body>

  <div class="container mt-5">
    <a class="btn btn-primary" href="<?= site_url('home/datapasien') ?>" role="button">Back</a>
  </div>
  <div class="container mt-5" style="text-align: right">
    <h2>RM 08</h2>
  </div>
  <form action="<?= site_url('formulir/addaksi') ?>" method="post" id="form" autocomplete="off">
    <input type="hidden" id="form" name="form" value="F1">
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
                  <input class="form-control" type="text" name="no_registration" id="no_registration" value="<?php echo $psn[0]->NO_REGISTRATION; ?>" readonly>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Nama Lengkap</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $psn[0]->THENAME; ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <label class="col-form-label">Tanggal Lahir</label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $psn[0]->DATE_OF_BIRTH; ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row align-items-center">
                    <div class="col-md-3">
                      <label class="col-form-label">Umur</label>
                    </div>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="ageyear" id="ageyear" value="<?php echo $psn[0]->AGEYEAR . 't ' .  $psn[0]->AGEMONTH . 'b ' . $psn[0]->AGEDAY . 'h'; ?>" readonly>
                      <input type="hidden" name="agemonth" id="agemonth" value="<?php echo $psn[0]->AGEMONTH; ?>">
                      <input type="hidden" name="ageday" id="ageday" value="<?php echo $psn[0]->AGEDAY; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Jenis Kelamin</label>
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $psn[0]->GENDER; ?>" readonly>
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
                  <textarea class="form-control" name="theaddress" id="theaddress" cols="6" rows="2" readonly><?php echo $psn[0]->THEADDRESS; ?></textarea>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Dokter Penanggung Jawab Pasien</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="v_01" id="v_01">
                </div>
              </div>

              <hr>

              <div class="row align-items-center">
                <div class="col-md-4">
                  <label class="col-form-label">Ruangan</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="class_room_id" id="class_room_id" value="<?php echo $psn[0]->CLASS_ROOM_ID; ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <label class="col-form-label">Tanggal dan Jam</label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" value="<?php echo $psn[0]->EXAMINATION_DATE; ?>" readonly>
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
              <input class="form-check-input" type="checkbox" id="t_02_wddd" name="t_02" value="1">
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
              <input class="form-check-input" type="checkbox" id="t_03_diagnosis" name="t_03" value="1">
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
              <input class="form-check-input" type="checkbox" id="t_04_kedokteran" name="t_04" value="1">
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
              <input class="form-check-input" type="checkbox" id="t_05_tindakan" name="t_05" value="1">
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
              <input class="form-control" type="text" name="v_08" id="v_08">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_06_sedasi" name="t_06" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Uraian singkat prosedur dan Tahapan yang penting</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_09" id="v_09">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_07_uraian" name="t_07" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">6</th>
          <td>Tujuan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_10" id="v_10">
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
              <input class="form-control" type="text" name="v_11" id="v_11">
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
              <input class="form-control" type="text" name="v_12" id="v_12">
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
              <input class="form-control" type="text" name="v_13" id="v_13">
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
              <input class="form-control" type="text" name="v_14" id="v_14">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_012_pfungsi" name="t_012" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Prognosis Kesembuhan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_15" id="v_15">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_013_pkesembuhan" name="t_013" value="1">
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
              <input class="form-control" type="text" name="v_16" id="v_16">
            </div>
          </td>
          <td>
            <div class="form-check">
              <br>
              <input class="form-check-input" type="checkbox" id="t_014_alternatif" name="t_014" value="1">
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
              <input class="form-control" type="text" name="v_17" id="v_17">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_015_perluasan" name="t_015" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Konsultasi selama tindakan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_18" id="v_18">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_016_konsultasi" name="t_016" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <p>Resusitasi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_19" id="v_19">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_017_resusitasi" name="t_017" value="1">
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
          <p class="text-center" width="15%">Tanda Tangan</p>
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
          <h2 class="text-center">PENOLAKAN TINDAKAN KEDOKTERAN</h2>
        </td>
      </tr>
      <tr>
        <td>
          <p>
            Yang bertanda tangan dibawah ini, Saya, nama <input type="text" name="v_20" id="v_20"> umur <input type="text" name="v_21" id="v_21"> tahun,
            <input type="radio" class="form-check-input" name="t_018" id="t_018_laki" value="1">
            <label for="t_018_laki">Laki-laki</label>
            <input type="radio" class="form-check-input" name="t_018" id="t_018_perempuan" value="2">
            <label for="t_018_perempuan">Perempuan</label>,
            alamat <input type="text" name="v_22" id="v_22"> dengan ini menyatakan <strong>PENOLAKAN</strong> untuk dilakukannya tindakan <input type="text" name="v_23" id="v_23"> terhadap
            <input type="radio" class="form-check-input" name="t_019" id="t_019_saya" value="1">
            <label for="t_019_saya">saya /</label>
            <input type="radio" class="form-check-input" name="t_019" id="t_019_status" value="2">
            <label><input type="text" name="v_24" id="v_24" disabled="disabled"></label>
            saya <br>
            bernama <input type="text" name="v_25" id="v_25" disabled="disabled"> umur <input type="text" name="v_26" id="v_26" disabled="disabled"> tahun,
            <input type="radio" class="form-check-input" name="t_020" id="t_020_laki" value="1" disabled="disabled">
            <label for="t_020_laki">Laki-laki</label>
            <input type="radio" class="form-check-input" name="t_020" id="t_020_perempuan" value="2" disabled="disabled">
            <label for="t_020_perempuan">Perempuan</label>,
            alamat <input type="text" name="v_27" id="v_27" disabled="disabled">
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
          <p>Bengkulu, <input type="datetime-local" name="v_28" id="v_28"></p>
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
            <input type="text" name="v_29" id="v_29">
          </td>
          <td>
            <input type="text" name="v_30" id="v_30">
          </td>
          <td>
            <input type="text" name="v_31" id="v_31">
          </td>
          <td>
            <input type="text" name="v_32" id="v_32">
          </td>
        </tr>
      </table>
    </div>

    <div class="d-grid gap-2 mb-3">
      <input class="btn btn-primary" type="submit" id="submit" name="submit" value="Simpan">
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