<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MAkunPerkiraan;

class AkunPerkiraan extends BaseController
{
    public function __construct(){
        $this->akunperkiraan = new MAkunPerkiraan();
    }

    public function index()
    {
        $keyword= $this->request->getPost('keyword');
        if($keyword){
            $model =  $this->akunperkiraan->searchDataAkunPerkiraan($keyword);
        }else{
            $model =  $this->akunperkiraan;
        };

        $data = [
            'akunperkiraan'     => $model->getAkunPerkiraan()->paginate(10, 'metodepembayaran'),
            'pager'             => $model->pager,
            'xTipeAkun'         => $model->getTipeAkun()->getResult(),
            'breadcrumbs'       => "Akun Perkiraan",
            'title'             => "Akun Perkiraan | Reporta",
            'addNewButton'      => "Tambah Akun Perkiraan",
            'content'           => "Pages/VAkunPerkiraan"
        ];

        return view('pagesPart/components/index', $data);
    }

    public function newAkunPerkiraan(){
        $session    = session();
        $model      = new MAkunPerkiraan();
        
        $data = [
            'idTipeAkun'            => $this->request->getPost('idTipeAkun'),
            'kodeAkunPerkiraan'     => $this->request->getPost('kodeAkunPerkiraan'),
            'namaAkunPerkiraan'     => $this->request->getPost('namaAkunPerkiraan'),
            'saldoAwal'             => $this->request->getPost('saldoAwal'),
            'catatanAkunPerkiraan'  => $this->request->getPost('catatanAkunPerkiraan')
        ];

        $saveNewAkunPerkiraan = $model->newAkunPerkiraan($data);
        session()->setFlashData('message', 'Akun Perkiraan berhasil ditambahkan');
        return redirect()->to(base_url(). '/akunperkiraan');
    }

    public function updateAkunPerkiraan(){
        $session = session();
        $model = new MAkunPerkiraan();
        $id = $this->request->getPost('idAkunP');

        $data = array(
            'idTipeAkun'            => $this->request->getPost('idTipeAkun'),
            'kodeAkunPerkiraan'     => $this->request->getPost('kodeAkunPerkiraan'),
            'namaAkunPerkiraan'     => $this->request->getPost('namaAkunPerkiraan'),
            'saldoAwal'             => $this->request->getPost('saldoAwal'),
            'catatanAkunPerkiraan'  => $this->request->getPost('catatanAkunPerkiraan')
        );

        $updateAkunPerkiraan = $model->updateAkunPerkiraan($data, $id);

        session()->setFlashData('message', 'Akun Perkiraan berhasil diperbarui');
        return redirect()->to(base_url(). '/akunperkiraan');

    }

    public function deleteAkunPerkiraan(){
        $session = session();
        $model = new MAkunPerkiraan();
        $id = $this->request->getPost('akunPerkiraanID');
        
        $removeAkunPerkiraan = $model->deleteAkunPerkiraan($id);

        session()->setFlashData('message', 'Akun Perkiraan berhasil dihapus');
        return redirect()->to(base_url(). '/akunperkiraan');
    }
}
