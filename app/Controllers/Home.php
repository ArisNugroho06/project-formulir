<?php

namespace App\Controllers;

//inisialisasi model yang akan digunakan

use App\Models\ModelPasien;
//INISIALISASI AGAR BISA TERIMA DATA POST/GET, valisadi dll
use CodeIgniter\Controller;

class Home extends BaseController
{

    protected $mdata;

    public function __construct()
    {
        $this->mdata = new ModelPasien();
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

    //ambil data dari database
    public function updateform1($no)
    {
        $contoh['edit'] = $this->mdata->dataform($no);

        return view('update/updateform1', $contoh);
    }
    //jalankan fungsi untuk update data ke database
    public function editform1($no)
    {
        $contoh['edit'] = $this->mdata->editformulir($no);

        return redirect()->to('formulir/form1');
    }


    public function updateform2($no)
    {
        $contoh['editf2'] = $this->mdata->dataform($no);

        return view('update/updateform2', $contoh);
    }

    public function editform2($no)
    {
        $contoh['editf2'] = $this->mdata->editformulir($no);

        return redirect()->to('formulir/form2');
    }
}
