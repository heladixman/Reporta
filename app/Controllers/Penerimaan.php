<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MPenerimaan;

class Penerimaan extends BaseController
{
    public function __construct(){
        $this->Penerimaan = new MPenerimaan();
    }

    public function index()
    {
        $keyword= $this->request->getPost('keyword');
        if($keyword){
            $model =  $this->Penerimaan->searchDataPenerimaan($keyword);
        }else{
            $model =  $this->Penerimaan;
        };

        $data = [
            'metodePenerimaan'  => $model->getPenerimaan()->paginate(10, 'Penerimaan'),
            'pager'             => $model->pager,
            'breadcrumbs'       => "Penerimaan",
            'title'             => "Penerimaan | Reporta",
            'addNewButton'      => "Tambah Penerimaan",
            'content'           => "Pages/VPenerimaan"
        ];

        return view('pagesPart/components/index', $data);
    }

    public function newPenerimaan(){
        $session    = session();
        $model      = new MPenerimaan();
        
        $data = [
            'metodePenerimaanName'      => $this->request->getPost('metodePenerimaanName'),
            'metodePenerimaanOwner'     => $this->request->getPost('metodePenerimaanOwner'),
            'noRek'                     => $this->request->getPost('noRek'),
            'saldoAwal'                 => $this->request->getPost('saldoAwal'),
            'perTanggal'                => $this->request->getPost('perTanggal')
        ];

        $saveNewPenerimaan = $model->newPenerimaan($data);
        session()->setFlashData('message', 'Metode Penerimaan berhasil ditambahkan');
        return redirect()->to(base_url(). '/metodePenerimaan');
    }

    public function updatePenerimaan(){
        $session = session();
        $model = new MPenerimaan();
        $id = $this->request->getPost('PenerimaanID');

        $data = array(
            'metodePenerimaanName'      => $this->request->getPost('metodePenerimaanName'),
            'metodePenerimaanOwner'     => $this->request->getPost('metodePenerimaanOwner'),
            'noRek'                     => $this->request->getPost('noRek'),
            'saldoAwal'                 => $this->request->getPost('saldoAwal'),
            'perTanggal'                => $this->request->getPost('perTanggal')
        );

        $updatePenerimaan = $model->updatePenerimaan($data, $id);

        session()->setFlashData('message', 'Metode Penerimaan berhasil diperbarui');
        return redirect()->to(base_url(). '/metodePenerimaan');

    }

    public function deletePenerimaan(){
        $session = session();
        $model = new MPenerimaan();
        $id = $this->request->getPost('metodePenerimaanID');
        
        $removePenerimaan = $model->deletePenerimaan($id);

        session()->setFlashData('message', 'Metode Penerimaan berhasil dihapus');
        return redirect()->to(base_url(). '/metodePenerimaan');
    }
}
