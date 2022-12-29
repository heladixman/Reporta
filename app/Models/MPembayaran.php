<?php

namespace App\Models;
use CodeIgniter\Model;

class MPembayaran extends Model
{
    protected $table = 'pembayaran';

    public function getPembayaran($id = false){
        if ($id === false){
            $query = $this->table('pembayaran')->select('*');
            $query->join('metodepembayaran', 'metodePembayaranID = idMetodePembayaran');
            $query->join('datapembayaran', 'pembayaranID = idPembayaran', 'right');
            $query->join('akunperkiraan', 'idAkunPerkiraan = akunPerkiraanID', 'left');
            return $query;
        }else{
            return $this->table('pembayaran')->where('PembayaranID',$id)->get()->getRowArray();
        }
    }

    public function getDataPembayaran(){
        $query = $this->db->table('pembayaran')->select('(SELECT COUNT(idPembayaran) FROM datapembayaran)')->where('idPembayaran', '1');
        $query->join('datapembayaran', 'idPembayaran = pembayaranID', 'left');
        return $query->get();
    }

    public function getTotalDataPembayaran(){
        $query = $this->db->table('datapembayaran')->where('idPembayaran', '3')->countAllResults();
        return $query;
    }

    public function getMetodePembayaran(){
        $query = $this->db->table('metodepembayaran');
        return $query->get();
    }

    public function getAkunPerkiraan(){
        $query = $this->db->table('akunperkiraan');
        return $query->get();
    }

    public function newPembayaran($data){
        $query = $this->db->table('pembayaran')->insert($data);
        return $query;
    }

    public function updatePembayaran($data, $id){
        $query = $this->db->table('pembayaran')->update($data, array('PembayaranID' => $id));
        return $query;
    }

    public function deletePembayaran($id){
        $query = $this->db->table('datapembayaran')->delete(array('dataPembayaranID' => $id));
        return $query;
    }
    
    public function searchDataPembayaran($keyword){
        return $this->table('pembayaran')->like('metodePembayaranName', $keyword)->orLike('metodePembayaranOwner', $keyword)->orLike('noCek', $keyword)->orLike('noBukti', $keyword)->orLike('tanggalBayar', $keyword)->orLike('catatanPembayaran', $keyword)->orLike('penerima', $keyword);
    }
}
