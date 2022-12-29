<?php

namespace App\Models;
use CodeIgniter\Model;

class MAkunPerkiraan extends Model
{
    protected $table = 'akunperkiraan';

    public function getAkunPerkiraan($id = false){
        if ($id === false){
            $builder = $this->table('akunperkiraan')->select('*');
            $builder->join('tipeakun', 'tipeAkunID = idTipeAkun', 'left');
            return $builder;
        }else{
            return $this->table('akunperkiraan')->where('akunPerkiraanID',$id)->get()->getRowArray();
        }
    }

    public function getTipeAkun(){
        $query = $this->db->table('tipeakun');
        return $query->get();
    }

    public function newAkunPerkiraan($data){
        $query = $this->db->table('akunperkiraan')->insert($data);
        return $query;
    }

    public function updateAkunPerkiraan($data, $id){
        $query = $this->db->table('akunperkiraan')->update($data, array('akunPerkiraanID' => $id));
        return $query;
    }

    public function deleteAkunPerkiraan($id){
        $query = $this->db->table('akunperkiraan')->delete(array('akunPerkiraanID' => $id));
        return $query;
    }
    
    public function searchDataAkunPerkiraan($keyword){
        $query = $this->table('akunperkiraan')->like('kodeAkunPerkiraan', $keyword)->orLike('idTipeAkun', $keyword)->orLike('namaTipeAkun', $keyword)->orLike('namaAkunPerkiraan', $keyword)->orLike('saldoAwal', $keyword)->orLike('catatanAkunPerkiraan', $keyword);
        return $query;
    }
}
