<?php

namespace App\Controllers;

//inisialisasi model yang akan digunakan

use App\Models\Assessment_model;
//INISIALISASI AGAR BISA TERIMA DATA POST/GET, valisadi dll
use CodeIgniter\Controller;

class Home extends BaseController
{

    protected $mdata;

    public function __construct()
    {
        $this->mdata = new Assessment_model();
    }

    //menampilkan menu utama pada halaman dashboard

    public function index()
    {
        return view('layout');
    }

    //menambahkan data formulir yang telah diisi ke dalam database assessment_info

    public function addaksi()
    {
        $data['data'] = $this->mdata->tambahdata();

        return redirect()->to('formulir/datapasien');
    }


    //menghapus form dari masing masing tabel 

    public function deleteform1($no)
    {
        $this->mdata->deleteform($no);

        return redirect()->to('formulir/form1');
    }

    public function deleteform2($no)
    {
        $this->mdata->deleteform($no);

        return redirect()->to('formulir/form2');
    }

    public function deleteform3($no)
    {
        $this->mdata->deleteform($no);

        return redirect()->to('formulir/form3');
    }

    public function deleteform4($no)
    {
        $this->mdata->deleteform($no);

        return redirect()->to('formulir/form4');
    }

    public function deleteform5($no)
    {
        $this->mdata->deleteform($no);

        return redirect()->to('formulir/form5');
    }

    public function deleteform6($no)
    {
        $this->mdata->deleteform($no);

        return redirect()->to('formulir/form6');
    }

    public function deleteform7($no)
    {
        $this->mdata->deleteform($no);

        return redirect()->to('formulir/form7');
    }

    //edit masing masing formulir sesuai dengan no pada tabel assessment_info

    public function updateform1($no)
    {
        $contoh['edit'] = $this->mdata->dataform1($no);

        return view('update/updateform1', $contoh);
    }

    public function editform($no)
    {
        $contoh['edit'] = $this->mdata->editform($no);

        return redirect()->to('formulir/form1');
    }
}
