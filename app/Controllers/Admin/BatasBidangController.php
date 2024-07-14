<?php

namespace App\Controllers\Admin;

use App\Models\BatasBidangModel;
use App\Controllers\BaseController;

class BatasBidangController extends BaseController
{
    public function tambah()
    {
        $model = new BatasBidangModel();

        $data = [
            'id_bidangC' => $this->request->getPost('id_bidangC'),
            'utara' => $this->request->getPost('utara'),
            'timur' => $this->request->getPost('timur'),
            'selatan' => $this->request->getPost('selatan'),
            'barat' => $this->request->getPost('barat')
        ];

        $model->insert($data);

        return redirect()->to('/datainduk1/detail/' . $data['id_bidangC'])->with('success', 'Data batas bidang berhasil ditambahkan.');
    }

    public function update()
    {
        $model = new BatasBidangModel();

        $id = $this->request->getPost('id_batas');
        $data = [
            'utara' => $this->request->getPost('utara'),
            'timur' => $this->request->getPost('timur'),
            'selatan' => $this->request->getPost('selatan'),
            'barat' => $this->request->getPost('barat')
        ];

        $model->update($id, $data);

        return redirect()->to('/datainduk1/detail/' . $this->request->getPost('id_bidangC'))->with('success', 'Data batas bidang berhasil diubah.');
    }

    public function detail($id)
    {
        $batasBidangModel = new BatasBidangModel();
        $data['batas_bidang'] = $BatasBidangModel->where('id_bidangC', $id)->findAll();

        // Ambil data lain yang diperlukan
        $data['tanah'] = $this->getTanahData($id);
        $data['dataLetter'] = $this->getDataLetter($id);

        return view('admin/datainduk/detailtanah', $data);
    }
    // Fungsi contoh untuk mendapatkan data tanah, ganti dengan implementasi yang sesuai
    private function getTanahData($id)
    {
        // Implementasi logika untuk mendapatkan data tanah berdasarkan ID
    }

    // Fungsi contoh untuk mendapatkan data letter, ganti dengan implementasi yang sesuai
    private function getDataLetter($id)
    {
        // Implementasi logika untuk mendapatkan data letter berdasarkan ID
    }
}
