<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatBidangModel extends Model
{
    protected $table = 'riwayat_bidang';
    protected $primaryKey = 'id_riwayat';
    protected $allowedFields = ['id_bidangC', 'riwayat'];
}
