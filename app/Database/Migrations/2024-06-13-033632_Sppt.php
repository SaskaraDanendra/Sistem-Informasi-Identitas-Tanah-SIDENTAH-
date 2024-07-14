<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sppt extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sppt' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
            ],
            'id_bidangC' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'sppt' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_sppt', true);
        $this->forge->createTable('sppt');
    }

    public function down()
    {
        $this->forge->dropTable('sppt');
    }
}
