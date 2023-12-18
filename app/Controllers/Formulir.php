<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//inisialisasi model yang akan digunakan
use App\Models\Assessment_model;

class Formulir extends BaseController
{

    protected $mdata;

    public function __construct()
    {
        $this->mdata = new Assessment_model();
    }

    //menapilkan data data dari tabel pasien ketika akan mengisi form baru

    public function formptk($body_id): string
    {

        $infoptk['psn'] = $this->mdata->formpasien($body_id);

        return view('form/form_penolakan_tindakan_kedokteran', $infoptk);
    }

    public function formpsa($body_id): string
    {

        $infopsa['psn'] = $this->mdata->formpasien($body_id);

        return view('form/form_persetujuan_anestesi', $infopsa);
    }

    public function formpta($body_id): string
    {
        $infopta['psn'] = $this->mdata->formpasien($body_id);

        return view('form/form_penolakan_anestesi', $infopta);
    }

    public function formtidk($body_id): string
    {

        $infotidk['psn'] = $this->mdata->formpasien($body_id);


        return view('form/form_tindakan_invansif_diluar_ko', $infotidk);
    }

    public function formbpak($body_id): string
    {

        $infobpak['psn'] = $this->mdata->formpasien($body_id);

        return view('form/form_blanko_pengkajian_awal_dan_keperawatan', $infobpak);
    }

    public function formpkmrj($body_id): string
    {

        $infopkmrj['psn'] = $this->mdata->formpasien($body_id);


        return view('form/form_pengkajian_keperawatan_dan_medis_rawat_jalan', $infopkmrj);
    }

    public function formcpptrj($body_id): string
    {

        $infocpptrj['psn'] = $this->mdata->formpasien($body_id);


        return view('form/form_catatan_perkembangan_pasien_terintegrasi_rawat_jalan', $infocpptrj);
    }

    //menampilkan semua data pasien saat akan mengisi formulir baru

    public function datapasien()
    {

        $contoh['daftarpasien'] = $this->mdata->tampilsemuadata();

        return view('dashboard/datapasien', $contoh);
    }

    //menampilkan data formulir yang telah diisi sesuai denga id formulir yang telah diisi

    public function form1()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform1();

        return view('dashboard/form1', $contoh);
    }

    public function form2()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform2();

        return view('dashboard/form2', $contoh);
    }

    public function form3()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform3();

        return view('dashboard/form3', $contoh);
    }

    public function form4()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform4();

        return view('dashboard/form4', $contoh);
    }

    public function form5()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform5();

        return view('dashboard/form5', $contoh);
    }

    public function form6()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform6();

        return view('dashboard/form6', $contoh);
    }

    public function form7()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform7();

        return view('dashboard/form7', $contoh);
    }
}
