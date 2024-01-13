<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pku extends BaseController
{

    public function index()
    {
        return view('index2');
    }
    public function form1()
    {
        return view('formpku/penilaian_kebutuhan_edukasi_anak');
    }
    public function form2()
    {
        return view('formpku/triase_anak');
    }
    public function form3()
    {
        return view('formpku/penilaian_kebutuhan_edukasi_dewasa');
    }
    public function form4()
    {
        return view('formpku/triase_dewasa');
    }
    public function form5()
    {
        return view('formpku/assessment_medis_pasien_anak');
    }
    public function form6()
    {
        return view('formpku/assessment_perawat');
    }
    public function form7()
    {
        return view('formpku/assessment_medis_pasien_bedah.php');
    }
    public function form8()
    {
        return view('formpku/assessment_medis_pasien_penyakit_dalam.php');
    }
    public function form9()
    {
        return view('formpku/assessment_medis_pasien_kebidanan_dan_kandungan.php');
    }
    public function form10()
    {
        return view('formpku/assessment_medis.php');
    }
    public function form11()
    {
        return view('formpku/assessment_medis_rev.php');
    }
    public function form12()
    {
        return view('formpku/assessment_medis_pasien_neonatus.php');
    }
}
