<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataInduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dataC' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'no_letter_c' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'no_pemilik_baru' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'filescan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_dataC', true);
        $this->forge->createTable('data_induk');
    }

    public function down()
    {
        $this->forge->dropTable('data_induk');
    }
}
