<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//inisialisasi model yang akan digunakan
use App\Models\ModelAssessment;

class Update extends BaseController
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
            'edit' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/updateform1', $datapasien);
    }

    public function form2($no)
    {

        $datapasien = [
            'edit' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/updateform2', $datapasien);
    }

    public function form3($no)
    {

        $datapasien = [
            'edit' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/updateform3', $datapasien);
    }

    public function form4($no)
    {

        $datapasien = [
            'edit' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/updateform4', $datapasien);
    }

    public function form5($no)
    {

        $datapasien = [
            'edit' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/updateform5', $datapasien);
    }

    public function form6($no)
    {

        $datapasien = [
            'edit' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/updateform6', $datapasien);
    }

    public function form7($no)
    {

        $datapasien = [
            'edit' => $this->mdata->where(['no' => $no])->first()
        ];

        return view('update/updateform7', $datapasien);
    }
}
