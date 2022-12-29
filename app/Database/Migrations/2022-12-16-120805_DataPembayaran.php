<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'dataPembayaranID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'idPembayaran' =>[
                'type' => 'INT',
            ],
            'idAkunPerkiraan' => [
                'type' => 'INT',
            ],
            'biaya' => [
                'type' => 'DECIMAL',
                'constraint' => '11,2'
            ],
            'catatan' =>[
                'type' => 'TEXT',
                'null' => true,
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('dataPembayaranID',TRUE);
        $this->forge->addForeignKey('idPembayaran', 'pembayaran', 'pembayaranID');  
        $this->forge->addForeignKey('idAkunPerkiraan', 'akunperkiraan', 'akunPerkiraanID');
        $this->forge->createTable('datapembayaran', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('datapembayaran');
    }
}
