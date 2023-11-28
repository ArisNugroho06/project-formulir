<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function index(): string
    {
        return view('layout');
    }

    public function formptk(): string
    {
        return view('form/form_penolakan_tindakan_kedokteran');
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
        return view('form/form_blanko_pengkajian_awal_dan_keperawatan');
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
