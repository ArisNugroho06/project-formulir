<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPasien extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'NO_REGISTRATION';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
}
