<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MTipeAkun;

class TipeAkun extends BaseController
{
    public function __construct(){
        $this->tipeAkun = new MTipeAkun();
    }

    public function index()
    {
        $keyword= $this->request->getPost('keyword');
        if($keyword){
            $model =  $this->tipeAkun->searchDataTipeAkun($keyword);
        }else{
            $model =  $this->tipeAkun;
        };

        $data = [
            'tipeakun'          => $model->getTipeAkun()->paginate(10, 'tipeakun'),
            'pager'             => $model->pager,
            'breadcrumbs'       => "Tipe Akun",
            'title'             => "Tipe Akun | Reporta",
            'addNewButton'      => "Tambah Tipe Akun",
            'content'           => "Pages/VTipeAkun"
        ];

        return view('pagesPart/components/index', $data);
    }

    public function newTipeAkun(){
        $session    = session();
        $model      = new MTipeAkun();
        
        $data = [
            'namaTipeAkun'   => $this->request->getPost('namaTipeAkun'),
            'alias'          => $this->request->getPost('alias'),
            'catatan'        => $this->request->getPost('catatan'),
        ];

        $saveNewTipeAkun = $model->newTipeAkun($data);
        session()->setFlashData('message', 'Tipe Akun berhasil ditambahkan');
        return redirect()->to(base_url(). '/tipeakun');
    }

    public function updateTipeAkun(){
        $session = session();
        $model = new MTipeAkun();
        $id = $this->request->getPost('tipeAknID');

        $data = array(
            'namaTipeAkun'  => $this->request->getPost('namaTipeAkun'),
            'alias'         => $this->request->getPost('alias'),
            'catatan'       => $this->request->getPost('catatan'),
        );

        $updateTipeAkun = $model->updateTipeAkun($data, $id);

        session()->setFlashData('message', 'Tipe Akun berhasil diperbarui');
        return redirect()->to(base_url(). '/tipeakun');

    }

    public function deleteTipeAkun(){
        $session = session();
        $model = new MTipeAkun();
        $id = $this->request->getPost('tipeAkunID');
        
        $removeTipeAkun = $model->deleteTipeAkun($id);

        session()->setFlashData('message', 'Tipe Akun berhasil dihapus');
        return redirect()->to(base_url(). '/tipeakun');
    }
}
