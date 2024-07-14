<?php

namespace App\Models;

use CodeIgniter\Model;

class SpptModel extends Model
{
    protected $table            = 'sppt';
    protected $primaryKey       = 'id_sppt';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_bidangC', 'sppt'];

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
