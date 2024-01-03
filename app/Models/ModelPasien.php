<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPasien extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'NO_REGISTRATION';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    //     public function getJoinedDataById($NO_REGISTRATION)
    //     {
    //         // Melakukan INNER JOIN dengan table2
    //         $builder = $this->db->table('pasien');
    //         $builder->select('pasien.*, assessment_info.*');
    //         $builder->join('assessment_info', 'pasien.NO_REGISTRATION = assessment_info.NO_REGISTRATION', 'inner');
    //         $builder->where('pasien.NO_REGISTRATION', $NO_REGISTRATION);

    //         // Mengambil hasil query
    //         $query = $builder->get();

    //         // Mengembalikan satu baris hasil query
    //         $result = $query->getRow();

    //         return $arrayResult = (array) $result;
    //     }

    public function getUsers($perPage, $page)
    {
        return $this->paginate($perPage, 'group1', $page);
    }

    public function search($keyword)
    {

        return $this->table('pasien')->like('thename', $keyword)->orLike('no_registration', $keyword);
    }
}
