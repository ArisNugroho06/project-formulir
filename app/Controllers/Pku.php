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
    public function form13()
    {
        return view('formpku/RMJ_2_3.php');
    }
    public function form14()
    {
        return view('formpku/RMJ_2_4.php');
    }
    public function form15()
    {
        return view('formpku/RMJ_2_10.php');
    }
    public function form16()
    {
        return view('formpku/RMJ_2_14.php');
    }
    public function form17()
    {
        return view('formpku/RMJ_2_5.php');
    }
    public function form18()
    {
        return view('formpku/RMJ_2_7.php');
    }

    public function form19()
    {
        return view('formpku/RM_3_4.php');
    }
    public function form20()
    {
        return view('formpku/RM_3_2_9.php');
    }
    public function form21()
    {
        return view('formpku/RM_3_2_10.php');
    }
    public function form22()
    {
        return view('formpku/RM_3_2_11.php');
    }
    public function form23()
    {
        return view('formpku/RM_3_2_12.php');
    }
    public function form24()
    {
        return view('formpku/RM_3_2_13.php');
    }
    public function form25()
    {
        return view('formpku/RM_3_2_14.php');
    }
    public function form26()
    {
        return view('formpku/RM_3_2_15.php');
    }
    public function form27()
    {
        return view('formpku/RM_3_2_16.php');
    }
    public function form28()
    {
        return view('formpku/RM_3_2.php');
    }
    public function form29()
    {
        return view('formpku/RM_5CP5.php');
    }
    public function form30()
    {
        return view('formpku/RM_5CP2b.php');
    }
    public function form31()
    {
        return view('formpku/RM_7_2_Patrograf_2.php');
    }
    public function form32()
    {
        return view('formpku/RM_8e.php');
    }
    public function bantuarip()
    {
        return view('formpku/bantuarip.php');
    }
}
