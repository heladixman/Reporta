<?php

namespace App\Models;
use CodeIgniter\Model;

class MPenerimaan extends Model
{
    protected $table = 'penerimaan';

    public function getPenerimaan($id = false){
        if ($id === false){
            $builder = $this->table('Penerimaan')->select('*');
            return $builder;
        }else{
            return $this->table('Penerimaan')->where('PenerimaanID',$id)->get()->getRowArray();
        }
    }

    public function newPenerimaan($data){
        $query = $this->db->table('Penerimaan')->insert($data);
        return $query;
    }

    public function updatePenerimaan($data, $id){
        $query = $this->db->table('Penerimaan')->update($data, array('PenerimaanID' => $id));
        return $query;
    }

    public function deletePenerimaan($id){
        $query = $this->db->table('Penerimaan')->delete(array('PenerimaanID' => $id));
        return $query;
    }
    
    public function searchDataPenerimaan($keyword){
        return $this->table('Penerimaan')->like('metodePenerimaanName', $keyword)->orLike('metodePenerimaanOwner', $keyword)->orLike('noRek', $keyword)->orLike('perTanggal', $keyword);
    }
}
