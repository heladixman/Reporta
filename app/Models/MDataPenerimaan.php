<?php

namespace App\Models;

use CodeIgniter\Model;

class MDataPembayaran extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'datapeneriman';
    protected $primaryKey       = 'dataPenerimaanID';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['idPenerimaan', 'idAkunPerkiraan','biaya','catatan','createAt','updateAt'];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    protected $createdField  = 'createAt';
    protected $updatedField  = 'updateAt';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
