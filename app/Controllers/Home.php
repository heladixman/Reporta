<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'             => 'Dashboard | Reporta',
            'content'           => 'Pages/VDashboard',
            'breadcrumbs'       => "Dashboard",
            'addNewButton'      => "Tambah Akun Perkiraan",
        ];
        echo view('PagesPart/Components/Index', $data);
    }
}
