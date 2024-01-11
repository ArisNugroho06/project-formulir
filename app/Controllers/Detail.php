<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//inisialisasi model yang akan digunakan
use App\Models\ModelAssessment;
use App\Models\ModelPasien;

class Detail extends BaseController
{

    protected $ModelAssessment;
    protected $ModelPasien;

    public function __construct()
    {
        $this->ModelAssessment = new ModelAssessment();
        $this->ModelPasien = new ModelPasien();
    }

    //menampilkan data formulir yang telah diisi sesuai denga id formulir yang telah diisi

    public function form1($no)
    {
        $dataJOIN = $this->ModelAssessment->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.no', $no)
            ->find($no);

        $datapasien = [
            'detail' => $dataJOIN
        ];

        return view('detail/detailform1', $datapasien);
    }

    public function form2($no)
    {

        $dataJOIN = $this->ModelAssessment->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.no', $no)
            ->find($no);

        $datapasien = [
            'detail' => $dataJOIN
        ];

        return view('detail/detailform2', $datapasien);
    }

    public function form3($no)
    {

        $dataJOIN = $this->ModelAssessment->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.no', $no)
            ->find($no);

        $datapasien = [
            'detail' => $dataJOIN
        ];

        return view('detail/detailform3', $datapasien);
    }

    public function form4($no)
    {

        $dataJOIN = $this->ModelAssessment->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.no', $no)
            ->find($no);

        $datapasien = [
            'detail' => $dataJOIN
        ];

        return view('detail/detailform4', $datapasien);
    }

    public function form5($no)
    {

        $dataJOIN = $this->ModelAssessment->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.no', $no)
            ->find($no);

        $datapasien = [
            'detail' => $dataJOIN
        ];

        // $datapasien = [
        //     'detail' => $this->ModelPasien->getJoinedDataById($NO_REGISTRATION)
        // ];

        return view('detail/detailform5', $datapasien);
    }

    public function form6($no)
    {

        $dataJOIN = $this->ModelAssessment->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.no', $no)
            ->find($no);

        $datapasien = [
            'detail' => $dataJOIN
        ];
        return view('detail/detailform6', $datapasien);
    }

    public function form7($no)
    {

        $dataJOIN = $this->ModelAssessment->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.no', $no)
            ->find($no);

        $datapasien = [
            'detail' => $dataJOIN
        ];

        return view('detail/detailform7', $datapasien);
    }

    public function deletef1($no)
    {
        $this->ModelAssessment->delete($no);

        session()->setFlashData('pesan', 'Data Berhasil Dihapus');

        return redirect()->to(site_url('dataformulir/form1'));
    }

    public function deletef2($no)
    {
        $this->ModelAssessment->delete($no);

        session()->setFlashData('pesan', 'Data Berhasil Dihapus');

        return redirect()->to(site_url('dataformulir/form2'));
    }

    public function deletef3($no)
    {
        $this->ModelAssessment->delete($no);
        return redirect()->to(site_url('dataformulir/form3'));
    }

    public function deletef4($no)
    {
        $this->ModelAssessment->delete($no);

        session()->setFlashData('pesan', 'Data Berhasil Dihapus');

        return redirect()->to(site_url('dataformulir/form4'));
    }

    public function deletef5($no)
    {
        $this->ModelAssessment->delete($no);

        session()->setFlashData('pesan', 'Data Berhasil Dihapus');

        return redirect()->to(site_url('dataformulir/form5'));
    }

    public function deletef6($no)
    {
        $this->ModelAssessment->delete($no);

        session()->setFlashData('pesan', 'Data Berhasil Dihapus');

        return redirect()->to(site_url('dataformulir/form6'));
    }

    public function deletef7($no)
    {
        $this->ModelAssessment->delete($no);

        session()->setFlashData('pesan', 'Data Berhasil Dihapus');

        return redirect()->to(site_url('dataformulir/form7'));
    }
}
