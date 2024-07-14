<?php

namespace App\Controllers\Admin;

use App\Models\LetakBidangModel;
use App\Models\BidangTanahModel;
use App\Controllers\BaseController;

class LetakBidangController extends BaseController
{
    public function index()
    {
        $model = new LetakBidangModel();
        $data['letak_bidang'] = $model->findAll();

        return view('admin/datainduk/letak_bidang', $data);
    }

    public function tambah()
    {
        $bidangModel = new BidangTanahModel();
        $letakModel = new LetakBidangModel();

        $id_bidangC = $this->request->getPost('id_bidangC');

        // Validasi apakah id_bidangC ada di tabel bidang_tanah
        $bidang = $bidangModel->find($id_bidangC);
        if (!$bidang) {
            return redirect()->back()->with('error', 'ID Bidang Tanah tidak ditemukan.');
        }

        $data = [
            'dusun' => $this->request->getPost('dusun'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'alamat' => $this->request->getPost('alamat'),
            'blok_tanah' => $this->request->getPost('blok_tanah'),
            'id_bidangC' => $id_bidangC
        ];

        $letakModel->insert($data);

        return redirect()->back()->with('success', 'Data letak bidang berhasil ditambahkan.');
    }

    public function update()
    {
        $letakModel = new LetakBidangModel();

        $id_letak = $this->request->getPost('id_letak');

        $data = [
            'dusun' => $this->request->getPost('dusun'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'alamat' => $this->request->getPost('alamat'),
            'blok_tanah' => $this->request->getPost('blok_tanah')
        ];

        $letakModel->update($id_letak, $data);

        return redirect()->back()->with('success', 'Data letak bidang berhasil diperbarui.');
    }
}
