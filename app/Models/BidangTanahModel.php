<?php

namespace App\Models;

use CodeIgniter\Model;

class BidangTanahModel extends Model
{
    protected $table = 'bidang_tanah';
    protected $primaryKey = 'id_bidangC';
    protected $allowedFields = ['id_dataC', 'persil', 'kelas_desa', 'luas', 'klasifikasi', 'bukti'];
    protected bool $allowEmptyInserts = true;

    public function getJoinedData()
    {
        return $this->db->table('bidang_tanah')
            ->select('bidang_tanah.*, data_induk.nama, sppt.sppt')
            ->join('data_induk', 'data_induk.id_dataC = bidang_tanah.id_dataC')
            ->join('sppt', 'sppt.id_bidangC = bidang_tanah.id_bidangC')
            ->get()
            ->getResult();
    }

    public function deleteBidangTanah($id)
    {
        return $this->delete($id); // Metode delete dari CI4 Model
    }
}
