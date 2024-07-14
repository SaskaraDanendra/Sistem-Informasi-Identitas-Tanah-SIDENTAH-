<?php

namespace App\Models;

use CodeIgniter\Model;

class DataIndukModel extends Model
{
    protected $table            = 'data_induk';
    protected $primaryKey       = 'id_dataC';
    protected $returnType       = 'object';
    protected $allowedFields    = ['no_letter_c', 'no_pemilik_baru', 'nama', 'filescan', 'keterangan'];

    protected bool $allowEmptyInserts = true;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}

//['no_letter_c', 'no_pemilik_baru', 'nama', 'filescan', 'keterangan'];
