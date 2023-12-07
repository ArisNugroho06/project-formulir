<?php

namespace App\Models;

use CodeIgniter\Model;
//inisialisasi dependensi untuk tangkap data postget
use CodeIgnitier\HTTP\RequestInterface;

class Assessment_model extends Model
{

    //membuat variabel multi function dan turunannya
    protected $db;
    protected $request;

    public function __construct()
    {
        //inisialisasi koneksi database
        $this->db = \Config\Database::connect();

        $this->request = \Config\Services::request();
    }

    public function tampildata()
    {

        $query = $this->db->query("SELECT * FROM pasien");

        return $query->getResult();
    }

    public function tambahdata()
    {
        $v_06 = $this->request->getPost('v_06');
        $v_07 = $this->request->getPost('v_07');
        $v_08 = $this->request->getPost('v_08');
        $v_09 = $this->request->getPost('v_09');
        $v_10 = $this->request->getPost('v_10');
        $v_11 = $this->request->getPost('v_11');
        $v_12 = $this->request->getPost('v_12');
        $v_13 = $this->request->getPost('v_13');
        $v_14 = $this->request->getPost('v_14');
        $v_15 = $this->request->getPost('v_15');
        $v_16 = $this->request->getPost('v_16');
        $v_17 = $this->request->getPost('v_17');
        $v_18 = $this->request->getPost('v_18');
        $v_19 = $this->request->getPost('v_19');
        $v_20 = $this->request->getPost('v_20');
        $v_21 = $this->request->getPost('v_21');
        $v_22 = $this->request->getPost('v_22');
        $v_23 = $this->request->getPost('v_23');
        $v_24 = $this->request->getPost('v_24');
        $v_25 = $this->request->getPost('v_25');
        $v_26 = $this->request->getPost('v_26');
        $v_27 = $this->request->getPost('v_27');
        $v_28 = $this->request->getPost('v_28');
        $v_29 = $this->request->getPost('v_29');
        $v_30 = $this->request->getPost('v_30');
        $v_31 = $this->request->getPost('v_31');
        $v_32 = $this->request->getPost('v_32');

        $sql = "INSERT INTO test (v_06, v_07, v_08, v_09, v_10, v_11, v_12, v_13, v_14, v_15, v_16, v_17, v_18, v_19, v_20, v_21, v_22, v_23, v_24, v_25, v_26, v_27, v_28, v_29, v_30, v_31, v_32)
                            VALUES ('$v_06', '$v_07', '$v_08','$v_09', '$v_10', '$v_11', '$v_12', '$v_13', '$v_14', '$v_15', '$v_16', '$v_17', '$v_18', '$v_19', '$v_20', '$v_21', '$v_22', '$v_23', '$v_24', '$v_25', '$v_26', '$v_27', '$v_28', '$v_29', '$v_30', '$v_31', '$v_32')";

        $this->db->query($sql);

        return;
    }
}
