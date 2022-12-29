<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;


class TipeAkun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tipeAkunID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'namaTipeAkun' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'alias' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'catatan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        
        $this->forge->addKey('tipeAkunID',TRUE);
        $this->forge->createTable('tipeakun', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tipeakun');
    }
}
