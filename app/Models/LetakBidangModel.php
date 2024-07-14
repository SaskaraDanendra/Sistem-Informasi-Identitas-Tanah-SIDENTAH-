<?php

namespace App\Models;

use CodeIgniter\Model;

class LetakBidangModel extends Model
{
    protected $table = 'letak_bidang';
    protected $primaryKey = 'id_letak';
    protected $allowedFields = ['dusun', 'rt', 'rw', 'alamat', 'blok_tanah', 'id_bidangC'];
}
