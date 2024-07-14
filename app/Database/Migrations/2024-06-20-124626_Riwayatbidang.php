<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Riwayatbidang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_riwayat' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
            ],
            'id_bidangC' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'riwayat' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
        ]);
        $this->forge->addKey('id_riwayat', true);
        $this->forge->createTable('riwayat_bidang');
    }

    public function down()
    {
        $this->forge->dropTable('riwayat_bidang');
    }
}
