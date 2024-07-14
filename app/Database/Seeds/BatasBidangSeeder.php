<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BatasBidangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_bidangC' => 1,
                'utara' => 'Batas Utara',
                'timur' => 'Batas Timur',
                'selatan' => 'Batas Selatan',
                'barat' => 'Batas Barat'
            ],
            // Tambahkan data lainnya jika diperlukan
        ];

        // Menggunakan query builder
        $this->db->table('batas_bidang')->insertBatch($data);
    }
}
