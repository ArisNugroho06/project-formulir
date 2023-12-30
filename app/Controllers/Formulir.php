<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//inisialisasi model yang akan digunakan
use App\Models\ModelPasien;

class Formulir extends BaseController
{

    protected $ModelPasien;

    public function __construct()
    {
        $this->ModelPasien = new ModelPasien();
    }

    //menampilkan semua data pasien saat akan mengisi formulir baru

    public function datapasien()
    {
        // $datapasien = $this->ModelPasien->findAll();

        // $data = [
        //     'daftarpasien' => $datapasien
        // ];

        $data['daftarpasien'] = $this->ModelPasien->paginate(1, 'pasien');
        $data['pager'] = $this->ModelPasien->pager;

        return view('dashboard/datapasien', $data);
    }

    //menapilkan data data dari tabel pasien ketika akan mengisi form baru

    public function formptk($no_registration)
    {
        $datapasien = [
            'psn' => $this->ModelPasien->where(['no_registration' => $no_registration])->find($no_registration)
        ];

        return view('form/form_penolakan_tindakan_kedokteran', $datapasien);
    }

    public function formpsa($no_registration)
    {

        $datapasien = [
            'psn' => $this->ModelPasien->where(['no_registration' => $no_registration])->find($no_registration)
        ];

        return view('form/form_persetujuan_anestesi', $datapasien);
    }

    public function formpta($no_registration)
    {
        $datapasien = [
            'psn' => $this->ModelPasien->where(['no_registration' => $no_registration])->find($no_registration)
        ];

        return view('form/form_penolakan_anestesi', $datapasien);
    }

    public function formtidk($no_registration)
    {

        $datapasien = [
            'psn' => $this->ModelPasien->where(['no_registration' => $no_registration])->find($no_registration)
        ];


        return view('form/form_tindakan_invansif_diluar_ko', $datapasien);
    }

    public function formbpak($no_registration)
    {

        $datapasien = [
            'psn' => $this->ModelPasien->where(['no_registration' => $no_registration])->find($no_registration)
        ];

        return view('form/form_blanko_pengkajian_awal_dan_keperawatan', $datapasien);
    }

    public function formpkmrj($no_registration)
    {

        $datapasien = [
            'psn' => $this->ModelPasien->where(['no_registration' => $no_registration])->find($no_registration)
        ];


        return view('form/form_pengkajian_keperawatan_dan_medis_rawat_jalan', $datapasien);
    }

    public function formcpptrj($no_registration)
    {

        $datapasien = [
            'psn' => $this->ModelPasien->where(['no_registration' => $no_registration])->find($no_registration)
        ];


        return view('form/form_catatan_perkembangan_pasien_terintegrasi_rawat_jalan', $datapasien);
    }
}
