<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penerimaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'penerimaanID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'idMetodePembayaran' =>[
                'type' => 'INT',
            ],
            'noCek' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'noBukti' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggalBayar' =>[
                'type' => 'DATE',
            ],
            'catatanPenerimaan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'penerima' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('penerimaanID',TRUE);
        $this->forge->addForeignKey('idMetodePembayaran', 'metodepembayaran', 'metodePembayaranID');
        $this->forge->createTable('penerimaan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('penerimaan');
    }
}
