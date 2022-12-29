<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MPenerimaan;
use App\Models\MDataPenerimaan;

class Penerimaan extends BaseController
{
    public function __construct(){
        $this->Penerimaan = new MPenerimaan();
    }

    public function index()
    {
        $keyword= $this->request->getPost('keyword');
        if($keyword){
            $model =  $this->Penerimaan->searchDataPembayaran($keyword);
        }else{
            $model =  $this->Penerimaan;
        };

        // $idPem = $idPem = $this->Pembayaran->get('pembayaranID');
        $idPem = '1';

        $data = [
            'Penerimaan'        => $model->getPenerimaan()->paginate(10, 'penerimaan'),
            'pager'             => $model->pager,
            'metodePembayaran'  => $model->getMetodePembayaran()->getResult(),
            'akunPerkiraan'     => $model->getAkunPerkiraan()->getResult(),
            'dataPembayaran'    => $model->getDataPembayaran($idPem)->getResult(),
            'totalItem'         => $model->getTotalDataPembayaran(),
            'totalBiaya'        => "total Item",
            'breadcrumbs'       => "Penerimaan",
            'title'             => "Penerimaan | Reporta",
            'addNewButton'      => "Tambah Penerimaan",
            'content'           => "Pages/VPenerimaan"
        ];

        return view('pagesPart/components/index', $data);
    }

    public function newPembayaran(){
        $session               = session();
        $modelPembayaran       = new MPenerimaan();
        $modelDataPembayaran   = new MDataPembayaran();
        
        $data = [
            'idMetodePembayaran'        => $this->request->getPost('idMetodePembayaran'),
            'noCek'                     => $this->request->getPost('noCek'),
            'noBukti'                   => $this->request->getPost('noBukti'),
            'tanggalBayar'              => $this->request->getPost('tanggalBayar'),
            'catatanPembayaran'         => $this->request->getPost('catatanPembayaran'),
            'penerima'                  => $this->request->getPost('penerima')
        ];

        $saveNewPembayaran = $modelPembayaran->newPembayaran($data);

        $idPembayaran  = $modelPembayaran->insertID();
        $akunPerkiraan = $this->request->getVar('idAkunPerkiraan');
        $saldoAwal = $this->request->getVar('saldoAwal');
        $catatan = $this->request->getVar('catatan');

        for($i = 0; $i < count((array)$akunPerkiraan); $i++){
            $data2[] = [
                'idPembayaran' => $idPembayaran,
                'idAkunPerkiraan' => $akunPerkiraan[$i],
                'biaya' => $saldoAwal[$i],
                'catatan' => $catatan[$i]
            ];
        }

        $saveNewDataPembayaran = $modelDataPembayaran->insertBatch($data2);
        session()->setFlashData('message', 'Pembayaran berhasil ditambahkan');
        return redirect()->to(base_url(). '/pembayaran');
    }

    public function updatePembayaran(){
        $session = session();
        $model = new MPembayaran();
        $id = $this->request->getPost('PembayaranID');

        $data = array(
            'metodePembayaranName'      => $this->request->getPost('metodePembayaranName'),
            'metodePembayaranOwner'     => $this->request->getPost('metodePembayaranOwner'),
            'noRek'                     => $this->request->getPost('noRek'),
            'saldoAwal'                 => $this->request->getPost('saldoAwal'),
            'perTanggal'                => $this->request->getPost('perTanggal')
        );

        $updatePembayaran = $model->updatePembayaran($data, $id);

        session()->setFlashData('message', 'Pembayaran berhasil diperbarui');
        return redirect()->to(base_url(). '/pembayaran');

    }

    public function deletePembayaran(){
        $session = session();
        $model = new MPembayaran();
        $id = $this->request->getPost('akunPerkiraanID');
        
        $removePembayaran = $model->deletePembayaran($id);

        session()->setFlashData('message', 'Pembayaran berhasil dihapus');
        return redirect()->to(base_url(). '/pembayaran');
    }
}
