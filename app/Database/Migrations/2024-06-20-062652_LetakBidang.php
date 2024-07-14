<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LetakBidang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_letak' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => TRUE
            ],
            'id_bidangC' => [
                'type'           => 'INT',
                'constraint'     => '20',
            ],
            'dusun' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rt' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'rw' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'blok_tanah' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('id_letak', true);
        $this->forge->createTable('letak_bidang');
    }

    public function down()
    {
        $this->forge->dropTable('letak_bidang');
    }
}
