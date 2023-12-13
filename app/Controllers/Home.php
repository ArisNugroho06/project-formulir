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
}
