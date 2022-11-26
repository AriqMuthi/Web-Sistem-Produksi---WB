<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $allowedFields = [
        'kotak',
        'kode',
        'total'
    ];
    protected $useTimestamps = true;
}