<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bidangtanah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bidangC' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => TRUE
            ],
            'id_dataC' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'persil' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelas_desa' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'luas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'klasifikasi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'bukti' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_bidangC', true);
        $this->forge->createTable('bidang_tanah');
    }

    public function down()
    {
        $this->forge->dropTable('bidang_tanah');
    }
}
