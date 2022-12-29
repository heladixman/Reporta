<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pembayaranID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'idMetodePembayaran' =>[
                'type' => 'INT',
            ],
            'noCek' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'noBukti' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggalBayar' =>[
                'type' => 'DATE',
            ],
            'catatanPembayaran' => [
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
        $this->forge->addKey('pembayaranID',TRUE);
        $this->forge->addForeignKey('idMetodePembayaran', 'metodepembayaran', 'metodePembayaranID');
        $this->forge->createTable('pembayaran', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
