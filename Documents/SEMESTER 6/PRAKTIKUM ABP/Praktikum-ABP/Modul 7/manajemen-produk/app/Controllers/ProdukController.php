<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProdukModel();
    }

    // Halaman utama + tabel
    public function index()
    {
        return view('produk/index');
    }

    // Halaman form tambah
    public function create()
    {
        return view('produk/form');
    }

    // Halaman form edit
    public function edit($id)
    {
        $produk = $this->model->find($id);
        return view('produk/form', ['produk' => $produk]);
    }

    // Ambil semua data (JSON untuk DataTables)
    public function getData()
    {
        $data = $this->model->findAll();
        return $this->response->setJSON($data);
    }

    // Simpan data baru
    public function store()
    {
        $this->model->save([
            'nama'     => $this->request->getPost('nama'),
            'kategori' => $this->request->getPost('kategori'),
            'harga'    => $this->request->getPost('harga'),
        ]);
        return redirect()->to('/produk');
    }

    // Update data
    public function update($id)
    {
        $this->model->update($id, [
            'nama'     => $this->request->getPost('nama'),
            'kategori' => $this->request->getPost('kategori'),
            'harga'    => $this->request->getPost('harga'),
        ]);
        return redirect()->to('/produk');
    }

    // Hapus data
    public function delete($id)
    {
        $this->model->delete($id);
        return $this->response->setJSON(['status' => 'ok']);
    }
}