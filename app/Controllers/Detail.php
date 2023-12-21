<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//inisialisasi model yang akan digunakan
use App\Models\ModelAssessment;

class Detail extends BaseController
{

    protected $mdata;

    public function __construct()
    {
        $this->mdata = new ModelAssessment();
    }

    //menampilkan data formulir yang telah diisi sesuai denga id formulir yang telah diisi

    public function form1($no)
    {

        $datapasien = [
            'detail' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('detail/detailform1', $datapasien);
    }

    public function form2($no)
    {

        $datapasien = [
            'detail' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('detail/detailform2', $datapasien);
    }

    public function form3($no)
    {

        $datapasien = [
            'psn' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/form3', $datapasien);
    }

    public function form4($no)
    {

        $datapasien = [
            'psn' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/form4', $datapasien);
    }

    public function form5($no)
    {

        $datapasien = [
            'psn' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/form5', $datapasien);
    }

    public function form6($no)
    {

        $datapasien = [
            'psn' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/form6', $datapasien);
    }

    public function form7($no)
    {

        $datapasien = [
            'psn' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/form7', $datapasien);
    }
}
