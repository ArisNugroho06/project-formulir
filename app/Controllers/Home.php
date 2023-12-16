<?php

namespace App\Controllers;

//inisialisasi model yang akan digunakan

use App\Models\Assessment_model;
//INISIALISASI AGAR BISA TERIMA DATA POST/GET, valisadi dll
use CodeIgniter\Controller;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    protected $mdata;

    public function __construct()
    {
        $this->mdata = new Assessment_model();
    }

    // public function index(): string
    // {
    //     return view('layout');
    // }

    public function index()
    {
        $contoh['daftarpasien'] = $this->mdata->tampilsemuadata();

        return view('layout', $contoh);
    }

    public function datapasien()
    {

        $contoh['daftarpasien'] = $this->mdata->tampilsemuadata();

        return view('dashboard/datapasien', $contoh);
    }

    public function form1()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform1();

        return view('dashboard/form1', $contoh);
    }

    public function form2()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform2();

        return view('dashboard/form2', $contoh);
    }

    public function form3()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform3();

        return view('dashboard/form3', $contoh);
    }

    public function form4()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform4();

        return view('dashboard/form4', $contoh);
    }

    public function form5()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform5();

        return view('dashboard/form5', $contoh);
    }

    public function form6()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform6();

        return view('dashboard/form6', $contoh);
    }

    public function form7()
    {

        $contoh['daftarpasien'] = $this->mdata->tampildataform7();

        return view('dashboard/form7', $contoh);
    }
}
