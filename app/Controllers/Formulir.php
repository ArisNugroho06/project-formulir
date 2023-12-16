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


    public function addaksi()
    {
        $data['data'] = $this->mdata->tambahdata();

        return redirect()->to('home/datapasien');
    }
}

// public function formptk(): string
//     {

//         $tampilptk =  $this->mdata->tampildata();

//         $infoptk = array(
//             'dataAssessmentptk' => $tampilptk,
//         );

//         return view('form/form_penolakan_tindakan_kedokteran', $infoptk);
//     }

//     public function formpsa(): string
//     {

//         $tampilpsa =  $this->mdata->tampildata();

//         $infopsa = array(
//             'dataAssessmentpsa' => $tampilpsa,
//         );

//         return view('form/form_persetujuan_anestesi', $infopsa);
//     }

//     public function formpta(): string
//     {
//         $tampilpta =  $this->mdata->tampildata();

//         $infopta = array(
//             'dataAssessmentpta' => $tampilpta,
//         );

//         return view('form/form_penolakan_anestesi', $infopta);
//     }

//     public function formtidk(): string
//     {

//         $tampiltidk =  $this->mdata->tampildata();

//         $infotidk = array(
//             'dataAssessmenttidk' => $tampiltidk,
//         );


//         return view('form/form_tindakan_invansif_diluar_ko', $infotidk);
//     }

//     public function formbpak(): string
//     {

//         $tampildata =  $this->mdata->tampildata();

//         $info = array(
//             'dataAssessmentformptk' => $tampildata,
//         );

//         return view('form/form_blanko_pengkajian_awal_dan_keperawatan', $info);
//     }

//     public function formpkmrj(): string
//     {

//         $tampilpkmrj =  $this->mdata->tampildata();

//         $infopkmrj = array(
//             'dataAssessmentpkmrj' => $tampilpkmrj,
//         );


//         return view('form/form_pengkajian_keperawatan_dan_medis_rawat_jalan', $infopkmrj);
//     }

//     public function formcpptrj(): string
//     {

//         $tampilcpptrj =  $this->mdata->tampildata();

//         $infocpptrj = array(
//             'dataAssessmentcpptrj' => $tampilcpptrj,
//         );


//         return view('form/form_catatan_perkembangan_pasien_terintegrasi_rawat_jalan', $infocpptrj);
//     }


//     public function addaksi()
//     {
//         $data['data'] = $this->mdata->tambahdata();

//         return redirect()->to('home/index');
//     }
// }