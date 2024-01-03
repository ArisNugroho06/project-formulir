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

        $currentPage = $this->request->getVar('page_assessment_info') ? $this->request->getVar('page_assessment_info') : 1;

        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if ($keyword) {
            $cariform = $this->ModelAssessment->search($keyword);
        } else {
            $cariform = $this->ModelAssessment->getDataByValue('F1');
        }

        $data = [
            'data' => $this->ModelAssessment->where('FORM', 'F1')->paginate(2, 'assessment_info'),
            'pager' => $this->ModelAssessment->pager,
            'currentPage' => $currentPage,
        ];

        return view('dashboard/form1', $data);
    }

    public function form2()
    {

        $currentPage = $this->request->getVar('page_assessment_info') ? $this->request->getVar('page_assessment_info') : 1;

        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if ($keyword) {
            $cariform = $this->ModelAssessment->search($keyword);
        } else {
            $cariform = $this->ModelAssessment->getDataByValue('F2');
        }

        $data = [
            'data' => $this->ModelAssessment->where('FORM', 'F2')->paginate(2, 'assessment_info'),
            'pager' => $this->ModelAssessment->pager,
            'currentPage' => $currentPage,
        ];

        return view('dashboard/form2', $data);
    }

    public function form3()
    {

        $currentPage = $this->request->getVar('page_assessment_info') ? $this->request->getVar('page_assessment_info') : 1;

        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if ($keyword) {
            $cariform = $this->ModelAssessment->search($keyword);
        } else {
            $cariform = $this->ModelAssessment->getDataByValue('F3');
        }

        $data = [
            'data' => $this->ModelAssessment->where('FORM', 'F3')->paginate(2, 'assessment_info'),
            'pager' => $this->ModelAssessment->pager,
            'currentPage' => $currentPage,
        ];

        return view('dashboard/form3', $data);
    }

    public function form4()
    {

        $currentPage = $this->request->getVar('page_assessment_info') ? $this->request->getVar('page_assessment_info') : 1;

        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if ($keyword) {
            $cariform = $this->ModelAssessment->search($keyword);
        } else {
            $cariform = $this->ModelAssessment->getDataByValue('F4');
        }

        $data = [
            'data' => $this->ModelAssessment->where('FORM', 'F4')->paginate(2, 'assessment_info'),
            'pager' => $this->ModelAssessment->pager,
            'currentPage' => $currentPage,
        ];

        return view('dashboard/form4', $data);
    }

    public function form5()
    {

        $currentPage = $this->request->getVar('page_assessment_info') ? $this->request->getVar('page_assessment_info') : 1;

        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if ($keyword) {
            $cariform = $this->ModelAssessment->search($keyword);
        } else {
            $cariform = $this->ModelAssessment->getDataByValue('F5');
        }

        $data = [
            'data' => $this->ModelAssessment->where('FORM', 'F5')->paginate(2, 'assessment_info'),
            'pager' => $this->ModelAssessment->pager,
            'currentPage' => $currentPage,
        ];
        // return view('dashboard/form5', ['data' => $data]);
        return view('dashboard/form5', $data);
    }

    public function form6()
    {

        $currentPage = $this->request->getVar('page_assessment_info') ? $this->request->getVar('page_assessment_info') : 1;

        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if ($keyword) {
            $cariform = $this->ModelAssessment->search($keyword);
        } else {
            $cariform = $this->ModelAssessment->getDataByValue('F6');
        }

        $data = [
            'data' => $this->ModelAssessment->where('FORM', 'F6')->paginate(2, 'assessment_info'),
            'pager' => $this->ModelAssessment->pager,
            'currentPage' => $currentPage,
        ];

        return view('dashboard/form6', $data);
    }

    public function form7()
    {

        $currentPage = $this->request->getVar('page_assessment_info') ? $this->request->getVar('page_assessment_info') : 1;

        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if ($keyword) {
            $cariform = $this->ModelAssessment->search($keyword);
        } else {
            $cariform = $this->ModelAssessment->getDataByValue('F7');
        }

        $data = [
            'data' => $this->ModelAssessment->where('FORM', 'F7')->paginate(2, 'assessment_info'),
            'pager' => $this->ModelAssessment->pager,
            'currentPage' => $currentPage,
        ];

        return view('dashboard/form7', $data);
    }
}
