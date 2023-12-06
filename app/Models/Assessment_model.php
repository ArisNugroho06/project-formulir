<?php

namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\HTTP\RequestInterface;

class Assessment_model extends Model
{
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

        $sql = "INSERT INTO assessment_info(v_06, v_07, v_08, v_09, v_10)
                            VALUES ('$v_06', '$v_07', '$v_08','$v_09', '$v_10')";

        $this->db->query($sql);

        return;
    }
}
