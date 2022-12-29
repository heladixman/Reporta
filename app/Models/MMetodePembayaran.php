<?php

namespace App\Models;
use CodeIgniter\Model;

class MMetodePembayaran extends Model
{
    protected $table = 'metodepembayaran';

    public function getMetodePembayaran($id = false){
        if ($id === false){
            $builder = $this->table('metodepembayaran')->select('*');
            return $builder;
        }else{
            return $this->table('metodepembayaran')->where('metodePembayaranID',$id)->get()->getRowArray();
        }
    }

    public function newMetodePembayaran($data){
        $query = $this->db->table('metodepembayaran')->insert($data);
        return $query;
    }

    public function updateMetodePembayaran($data, $id){
        $query = $this->db->table('metodepembayaran')->update($data, array('metodePembayaranID' => $id));
        return $query;
    }

    public function deleteMetodePembayaran($id){
        $query = $this->db->table('metodepembayaran')->delete(array('metodePembayaranID' => $id));
        return $query;
    }
    
    public function searchDataMetodePembayaran($keyword){
        return $this->table('metodepembayaran')->like('metodePembayaranName', $keyword)->orLike('metodePembayaranOwner', $keyword)->orLike('noRek', $keyword)->orLike('perTanggal', $keyword);
    }
}
