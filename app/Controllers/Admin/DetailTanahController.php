<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BidangTanahModel;
use App\Models\DataIndukModel;
use App\Models\SpptModel;
use App\Models\LetakBidangModel;
use App\Models\BatasBidangModel; // Tambahkan ini
use App\Models\RiwayatBidangModel; // Tambahkan ini

class DetailTanahController extends BaseController
{
    protected $bidangTanahModel;
    protected $dataIndukModel;
    protected $spptModel;
    protected $letakBidangModel;
    protected $batasBidangModel; // Tambahkan ini
    protected $riwayatBidangModel; // Tambahkan ini

    public function __construct()
    {
        $this->bidangTanahModel = new BidangTanahModel();
        $this->dataIndukModel = new DataIndukModel();
        $this->spptModel = new SpptModel();
        $this->letakBidangModel = new LetakBidangModel();
        $this->batasBidangModel = new BatasBidangModel(); // Tambahkan ini
        $this->riwayatBidangModel = new RiwayatBidangModel(); // Tambahkan ini
    }

    public function index()
    {
        // Contoh logika untuk index
        $model = new BidangTanahModel();
        $data['bidang_tanah'] = $model->findAll();

        return view('admin/datainduk/index', $data);
    }

    public function detail_bidangc($id_bidangC)
    {
        $tanah = $this->bidangTanahModel->find($id_bidangC);
        if (empty($tanah)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Bidang tanah dengan ID ' . $id_bidangC . ' tidak ditemukan.');
        }

        $id_dataC = $tanah['id_dataC']; // Pastikan ini dalam bentuk array
        $dataLetter = $this->dataIndukModel->find($id_dataC);

        $data = [
            'title' => 'Detail Bidang Tanah',
            'tanah' => (object)$tanah, // Konversi menjadi objek
            'dataLetter' => (object)$dataLetter, // Konversi menjadi objek
            'SPPT' => $this->spptModel->where('id_bidangC', $id_bidangC)->findAll(),
            'letak_bidang' => $this->letakBidangModel->where('id_bidangC', $id_bidangC)->findAll(),
            'batas_bidang' => $this->batasBidangModel->where('id_bidangC', $id_bidangC)->findAll(), // Tambahkan ini
            'riwayat_bidang' => $this->riwayatBidangModel->where('id_bidangC', $id_bidangC)->findAll() // Tambahkan ini
        ];

        return view('admin/datainduk/detailtanah', $data);
    }

    public function tambah_letak_bidang()
    {
        $this->letakBidangModel->save([
            'id_bidangC' => $this->request->getPost('id_bidangC'),
            'dusun' => $this->request->getPost('dusun'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'alamat' => $this->request->getPost('alamat'),
            'blok_tanah' => $this->request->getPost('blok_tanah'),
        ]);

        return redirect()->back()->with('success', 'Letak bidang berhasil ditambahkan');
    }


    public function tambahSppt()
    {
        $spptModel = new SpptModel();

        $data = [
            'id_bidangC' => $this->request->getPost('id_bidangC'),
            'sppt' => $this->request->getPost('sppt')
        ];

        $spptModel->insert($data);

        return redirect()->back()->with('success', 'SPPT berhasil ditambahkan.');
    }

    // Tambahkan metode ini
    public function tambahBatasBidang()
    {
        $this->batasBidangModel->save([
            'id_bidangC' => $this->request->getPost('id_bidangC'),
            'utara' => $this->request->getPost('utara'),
            'timur' => $this->request->getPost('timur'),
            'selatan' => $this->request->getPost('selatan'),
            'barat' => $this->request->getPost('barat')
        ]);

        return redirect()->back()->with('success', 'Batas bidang berhasil ditambahkan.');
    }

    public function updateBatasBidang()
    {
        $id_batas = $this->request->getPost('id_batas');

        $this->batasBidangModel->update($id_batas, [
            'utara' => $this->request->getPost('utara'),
            'timur' => $this->request->getPost('timur'),
            'selatan' => $this->request->getPost('selatan'),
            'barat' => $this->request->getPost('barat')
        ]);

        return redirect()->back()->with('success', 'Batas bidang berhasil diperbarui.');
    }
    public function tambahRiwayatBidang()
    {
        $this->riwayatBidangModel->save([
            'id_bidangC' => $this->request->getPost('id_bidangC'),
            'riwayat' => $this->request->getPost('riwayat')
        ]);

        return redirect()->back()->with('success', 'Riwayat bidang berhasil ditambahkan.');
    }

    public function updateRiwayatBidang()
    {
        $id_riwayat = $this->request->getPost('id_riwayat');

        $this->riwayatBidangModel->update($id_riwayat, [
            'riwayat' => $this->request->getPost('riwayat')
        ]);

        return redirect()->back()->with('success', 'Riwayat bidang berhasil diperbarui.');
    }
}
