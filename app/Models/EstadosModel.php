<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadosModel extends Model
{
    protected $table         = 'estados';
    protected $primaryKey    = 'codigo_estado';
    protected $allowedFields = [
        'codigo_estado','nombre'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}