<?php

namespace App\Controllers;

use App\Models\Sayuran_model;

class Sayuran extends BaseController
{
    public function index()
    {
        $sayuranModel = new Sayuran_model();
        $data['sayuran'] = $sayuranModel->findAll();

        return view('sayuran/index', $data);
    }

    public function tambah()
    {
        return view('sayuran/tambah');
    }

    public function simpan()
    {
        $sayuranModel = new Sayuran_model();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok')
        ];

        $sayuranModel->insert($data);

        return redirect()->to(site_url('sayuran'));
    }
}
