<?php

namespace App\Models;

use CodeIgniter\Model;

class BatasBidangModel extends Model
{
    protected $table = 'batas_bidang';
    protected $primaryKey = 'id_batas';
    protected $allowedFields = ['id_bidangC', 'utara', 'timur', 'selatan', 'barat'];
}
