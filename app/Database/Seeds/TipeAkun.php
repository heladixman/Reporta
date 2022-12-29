<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipeAkun extends Seeder
{
    public function run()
    {
        $data = [
            [
                'namaTipeAkun'  => 'Piutang Usaha',
                'alias'  =>  'AREC'
            ],
            [
                'namaTipeAkun'  => 'Persediaan',
                'alias'  =>  'INTR'
            ],
            [
                'namaTipeAkun'  => 'Aset Lancar Lainnya',
                'alias'  =>  'OCAS'
            ],
            [
                'namaTipeAkun'  => 'Aset Tetap',
                'alias'  =>  'FASS'
            ],
            [
                'namaTipeAkun'  => 'Akumulasi Penyusutan',
                'alias'  =>  'DEPR'
            ],
            [
                'namaTipeAkun'  => 'Aset Lainnya',
                'alias'  =>  'OASS'
            ],
            [
                'namaTipeAkun'  => 'Utang Usaha',
                'alias'  =>  'APAY'
            ],
            [
                'namaTipeAkun'  => 'Liabilitas Jangka Pendek',
                'alias'  =>  'OCLY'
            ],
            [
                'namaTipeAkun'  => 'Liabilitas Jangka Panjang',
                'alias'  =>  'LTLY'
            ],
            [
                'namaTipeAkun'  => 'Modal',
                'alias'  =>  'EQTY'
            ],
            [
                'namaTipeAkun'  => 'Pendapatan',
                'alias'  =>  'REVE'
            ],
            [
                'namaTipeAkun'  => 'Beban Pokok Penjualan',
                'alias'  =>  'COGS'
            ],
            [
                'namaTipeAkun'  => 'Beban',
                'alias'  =>  'EXPS'
            ],
            [
                'namaTipeAkun'  => 'Beban Lainnya',
                'alias'  =>  'OEXP'
            ],
            [
                'namaTipeAkun'  => 'Pendapatan Lainnya',
                'alias'  =>  'OINC'
            ],
        ];
        $this->db->table('tipeakun')->insertBatch($data);
    }
}
