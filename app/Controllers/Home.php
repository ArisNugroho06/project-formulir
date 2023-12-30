<?php

namespace App\Controllers;

//inisialisasi model yang akan digunakan

use App\Models\ModelPasien;
use App\Models\ModelAssessment;
//INISIALISASI AGAR BISA TERIMA DATA POST/GET, valisadi dll
use CodeIgniter\Controller;

class Home extends BaseController
{

    protected $ModelPasien;
    protected $ModelAssessment;

    public function __construct()
    {
        $this->ModelPasien = new ModelPasien();
        $this->ModelAssessment = new ModelAssessment();
    }

    //menampilkan menu utama pada halaman dashboard

    public function index()
    {
        $totalpasien = $this->ModelPasien->countAll();
        $totalF1 = $this->ModelAssessment->hitungtotalF1();
        $totalF2 = $this->ModelAssessment->hitungtotalF2();
        $totalF3 = $this->ModelAssessment->hitungtotalF3();
        $totalF4 = $this->ModelAssessment->hitungtotalF4();
        $totalF5 = $this->ModelAssessment->hitungtotalF5();
        $totalF6 = $this->ModelAssessment->hitungtotalF6();
        $totalF7 = $this->ModelAssessment->hitungtotalF7();

        $data = [
            'totalpasien' => $totalpasien,
            'totalF1' => $totalF1,
            'totalF2' => $totalF2,
            'totalF3' => $totalF3,
            'totalF4' => $totalF4,
            'totalF5' => $totalF5,
            'totalF6' => $totalF6,
            'totalF7' => $totalF7
        ];

        return view('index', $data);
    }
}
