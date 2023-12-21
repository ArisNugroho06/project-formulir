<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAssessment extends Model
{
    protected $table      = 'assessment_info';
    protected $primaryKey = 'no';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    public function getDataByValue($value)
    {
        return $this->where('form', $value)->findAll();
    }
}
