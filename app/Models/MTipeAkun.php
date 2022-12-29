<?php

namespace App\Models;
use CodeIgniter\Model;

class MTipeAkun extends Model
{
    protected $table = 'tipeakun';

    public function getTipeAkun($id = false){
        if ($id === false){
            $builder = $this->table('tipeakun')->select('*');
            return $builder;
        }else{
            return $this->table('tipeakun')->where('tipeAkunID',$id)->get()->getRowArray();
        }
    }

    public function newTipeAkun($data){
        $query = $this->db->table('tipeakun')->insert($data);
        return $query;
    }

    public function updateTipeAkun($data, $id){
        $query = $this->db->table('tipeakun')->update($data, array('tipeAkunID' => $id));
        return $query;
    }

    public function deleteTipeAkun($id){
        $query = $this->db->table('tipeakun')->delete(array('tipeAkunID' => $id));
        return $query;
    }
    
    public function searchDataTipeAkun($keyword){
        return $this->table('tipeakun')->like('namaTipeAkun', $keyword)->orLike('alias', $keyword)->orLike('catatan', $keyword);
    }
}
