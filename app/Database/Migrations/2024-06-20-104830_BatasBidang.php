<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BatasBidang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_batas' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => TRUE
            ],
            'id_bidangC' => [
                'type'           => 'INT',
                'constraint'     => '20',
            ],
            'utara' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'timur' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'selatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'barat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_batas', true);
        $this->forge->createTable('batas_bidang');
    }

    public function down()
    {
        $this->forge->dropTable('batas_bidang');
    }
}
