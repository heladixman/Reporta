<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunPerkiraan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'akunPerkiraanID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'idTipeAkun' =>[
                'type' => 'INT',
            ],
            'kodeAkunPerkiraan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'namaAkunPerkiraan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'parentAkunPerkiraan' =>[
                'type' => 'INT',
                'null' => true,
            ],
            'saldoAwal' =>[
                'type' => 'DECIMAL',
                'constraint' => '11,2',
                'default' => '0'
            ],
            'catatanAkunPerkiraan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('akunPerkiraanID',TRUE);
        $this->forge->addForeignKey('idTipeAkun', 'tipeakun', 'tipeAkunID');
        $this->forge->createTable('akunperkiraan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('akunperkiraan');
    }
}
