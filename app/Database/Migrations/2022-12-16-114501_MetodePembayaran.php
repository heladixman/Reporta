<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class MetodePembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'metodePembayaranID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'metodePembayaranName' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'metodePembayaranOwner' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'noRek' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'saldoAwal' =>[
                'type' => 'DECIMAL',
                'constraint' => '11,2'
            ],
            'perTanggal' => [
                'type' => 'DATE',
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('metodePembayaranID',TRUE);
        $this->forge->createTable('metodepembayaran', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('metodepembayaran');
    }
}
