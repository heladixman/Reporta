<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPenerimaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'dataPenerimaanID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'idPenerimaan' =>[
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
        $this->forge->addKey('dataPenerimaanID',TRUE);
        $this->forge->addForeignKey('idPenerimaan', 'penerimaan', 'penerimaanID');
        $this->forge->addForeignKey('idAkunPerkiraan', 'akunperkiraan', 'akunPerkiraanID');
        $this->forge->createTable('datapenerimaan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('datapenerimaan');
    }
}
