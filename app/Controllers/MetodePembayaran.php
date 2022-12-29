<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MMetodePembayaran;

class MetodePembayaran extends BaseController
{
    public function __construct(){
        $this->metodePembayaran = new MMetodePembayaran();
    }

    public function index()
    {
        $keyword= $this->request->getPost('keyword');
        if($keyword){
            $model =  $this->metodePembayaran->searchDataMetodePembayaran($keyword);
        }else{
            $model =  $this->metodePembayaran;
        };

        $data = [
            'metodePembayaran'  => $model->getMetodePembayaran()->paginate(10, 'metodepembayaran'),
            'pager'             => $model->pager,
            'breadcrumbs'       => "Metode Pembayaran",
            'title'             => "Metode Pembayaran | Reporta",
            'addNewButton'      => "Tambah Metode Pembayaran",
            'content'           => "Pages/VMetodePembayaran"
        ];

        return view('PagesPart/Components/Index', $data);
    }

    public function newMetodePembayaran(){
        $session    = session();
        $model      = new MMetodePembayaran();
        
        $data = [
            'metodePembayaranName'      => $this->request->getPost('metodePembayaranName'),
            'metodePembayaranOwner'     => $this->request->getPost('metodePembayaranOwner'),
            'noRek'                     => $this->request->getPost('noRek'),
            'saldoAwal'                 => $this->request->getPost('saldoAwal'),
            'perTanggal'                => $this->request->getPost('perTanggal')
        ];

        $saveNewMetodePembayaran = $model->newMetodePembayaran($data);
        session()->setFlashData('message', 'Metode Pembayaran berhasil ditambahkan');
        return redirect()->to(base_url(). '/metodepembayaran');
    }

    public function updateMetodePembayaran(){
        $session = session();
        $model = new MMetodePembayaran();
        $id = $this->request->getPost('metPembayaranID');

        $data = array(
            'metodePembayaranName'      => $this->request->getPost('metodePembayaranName'),
            'metodePembayaranOwner'     => $this->request->getPost('metodePembayaranOwner'),
            'noRek'                     => $this->request->getPost('noRek'),
            'saldoAwal'                 => $this->request->getPost('saldoAwal'),
            'perTanggal'                => $this->request->getPost('perTanggal')
        );

        $updateMetodePembayaran = $model->updateMetodePembayaran($data, $id);

        session()->setFlashData('message', 'Metode Pembayaran berhasil diperbarui');
        return redirect()->to(base_url(). '/metodepembayaran');

    }

    public function deleteMetodePembayaran(){
        $session = session();
        $model = new MMetodePembayaran();
        $id = $this->request->getPost('metodePembayaranID');
        
        $removeMetodePembayaran = $model->deleteMetodePembayaran($id);

        session()->setFlashData('message', 'Metode Pembayaran berhasil dihapus');
        return redirect()->to(base_url(). '/metodepembayaran');
    }
}
