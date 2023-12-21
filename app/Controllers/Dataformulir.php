<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//inisialisasi model yang akan digunakan
use App\Models\ModelAssessment;

class Dataformulir extends BaseController
{

    protected $mdata;

    public function __construct()
    {
        $this->mdata = new ModelAssessment();
    }

    //menampilkan data formulir yang telah diisi sesuai denga id formulir yang telah diisi

    public function form1()
    {
        $data = $this->mdata->getDataByValue('F1');

        return view('dashboard/form1', ['data' => $data]);
    }

    public function form2()
    {

        $data = $this->mdata->getDataByValue('F2');

        return view('dashboard/form2', ['data' => $data]);
    }

    public function form3()
    {

        $data = $this->mdata->getDataByValue('F3');

        return view('dashboard/form3', ['data' => $data]);
    }

    public function form4()
    {

        $data = $this->mdata->getDataByValue('F4');

        return view('dashboard/form4', ['data' => $data]);
    }

    public function form5()
    {

        $data = $this->mdata->getDataByValue('F5');

        return view('dashboard/form5', ['data' => $data]);
    }

    public function form6()
    {

        $data = $this->mdata->getDataByValue('F6');

        return view('dashboard/form6', ['data' => $data]);
    }

    public function form7()
    {

        $data = $this->mdata->getDataByValue('F7');

        return view('dashboard/form7', ['data' => $data]);
    }
}
