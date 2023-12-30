<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//inisialisasi model yang akan digunakan
use App\Models\ModelAssessment;
use App\Models\ModelPasien;

class Dataformulir extends BaseController
{

    protected $ModelPasien;
    protected $ModelAssessment;

    public function __construct()
    {
        $this->ModelAssessment = new ModelAssessment();
        $this->ModelPasien = new ModelPasien();
    }

    //menampilkan data formulir yang telah diisi sesuai denga id formulir yang telah diisi

    public function form1()
    {
        $data = $this->ModelAssessment->getDataByValue('F1');

        $datapasien = [
            'detail' => $data
        ];

        return view('dashboard/form1', ['data' => $data]);
    }

    public function form2()
    {

        $data = $this->ModelAssessment->getDataByValue('F2');

        return view('dashboard/form2', ['data' => $data]);
    }

    public function form3()
    {

        $data = $this->ModelAssessment->getDataByValue('F3');

        return view('dashboard/form3', ['data' => $data]);
    }

    public function form4()
    {

        $data = $this->ModelAssessment->getDataByValue('F4');

        return view('dashboard/form4', ['data' => $data]);
    }

    public function form5()
    {

        $data = $this->ModelAssessment->getDataByValue('F5');

        return view('dashboard/form5', ['data' => $data]);
    }

    public function form6()
    {

        $data = $this->ModelAssessment->getDataByValue('F6');

        return view('dashboard/form6', ['data' => $data]);
    }

    public function form7()
    {

        $data = $this->ModelAssessment->getDataByValue('F7');

        return view('dashboard/form7', ['data' => $data]);
    }
}
