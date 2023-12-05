<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Assessment_model;

class Formulir extends BaseController
{

    protected $mdata;

    public function __construct()
    {
        $this->mdata = new Assessment_model();
    }

    public function formptk(): string
    {

        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentformptk' => $tampildata,
        );


        return view('form/form_blanko_pengkajian_awal_dan_keperawatan', $info);
    }

    public function formpsa(): string
    {
        return view('form/form_persetujuan_anestesi');
    }

    public function formpta(): string
    {
        return view('form/form_penolakan_anestesi');
    }

    public function formtidk(): string
    {
        return view('form/form_tindakan_invansif_diluar_ko');
    }

    public function formbpak(): string
    {
        return view('form/form_penolakan_tindakan_kedokteran');
    }

    public function formpkmrj(): string
    {
        return view('form/form_pengkajian_keperawatan_dan_medis_rawat_jalan');
    }

    public function formcpptrj(): string
    {
        return view('form/form_catatan_perkembangan_pasien_terintegrasi_rawat_jalan');
    }
}
