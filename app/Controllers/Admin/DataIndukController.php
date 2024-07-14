<?php

namespace App\Controllers\Admin;

use App\Models\LetakBidangModel;
use App\Models\BidangTanahModel;
use App\Models\BatasBidangModel;
use App\Models\DataIndukModel;
use App\Models\SPPTModel;
use App\Models\RiwayatBidangModel;
use App\Controllers\BaseController;

class DataIndukController extends BaseController
{
    protected $dataIndukModel;
    protected $bidangTanahModel;
    protected $letakBidangModel;
    protected $batasBidangModel;
    protected $spptModel;
    protected $riwayatBidangModel;

    public function __construct()
    {
        $this->dataIndukModel = new DataIndukModel();
        $this->bidangTanahModel = new BidangTanahModel();
        $this->letakBidangModel = new LetakBidangModel();
        $this->batasBidangModel = new BatasBidangModel();
        $this->spptModel = new SPPTModel();
        $this->riwayatBidangModel = new RiwayatBidangModel();
    }

    public function index()
    {
        $dataModel = new DataIndukModel();
        $data['data_induk'] = $dataModel->findAll();

        return view('data_induk/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title'  =>  'Input Letter C',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/datainduk/createC', $data);
    }

    // aturan validasi
    public function create_C()
    {
        $rules = $this->validate([
            'no_letter_c' => 'required',
            'no_pemilik_baru' => 'required',
            'nama' => 'required',
            'filescan' => 'max_size[filescan,2048]|uploaded[filescan]|is_image[filescan]|mime_in[filescan,image/png,image/jpg,image/jpeg]|ext_in[filescan,png,jpg,jpeg]',
            'keterangan' => 'required',

        ]);

        // jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data Produk Gagal Ditambahkan');
            return redirect()->back()->withInput();
        }

        //ambil file gambar
        $gambar = $this->request->getFile('filescan');

        // ambil random nama file
        $file_Scan = $gambar->getRandomName();

        //pindahkan file
        $gambar->move(WRITEPATH . '../public/asset-admin/img/', $file_Scan);

        // Jika data valid
        $this->DataIndukModel->insert([
            'no_letter_c'     => esc($this->request->getPost('no_letter_c')),
            'no_pemilik_baru' => esc($this->request->getPost('no_pemilik_baru')),
            'nama'            => esc($this->request->getPost('nama')),
            'filescan'        => $file_Scan,
            'keterangan'      => esc($this->request->getPost('keterangan')),
        ]);

        return redirect()->to(base_url('datainduk'))->with('success', 'Data Berhasil Ditambahkan !');
    }


    public function datainduk1()
    {
        $data = [
            'title'  =>  'Data Induk 1',
            'data_induk' => $this->DataIndukModel->findAll() // SELECT * FROM data_induk
        ];

        return view('admin/datainduk/datainduk1', $data);
    }

    // fungsi detail
    public function detail_letterc($id_dataC)
    {
        $data = [
            'title' => 'Detail Letter C',
            'data_letter' => $this->dataIndukModel->find($id_dataC),
            'bidang_tanah' => $this->bidangTanahModel->where('id_dataC', $id_dataC)->findAll()
        ];

        return view('admin/datainduk/detail', $data);
    }


    public function bidangtanah()
    {
        $model = new BidangTanahModel();

        $data = [
            'title' => 'Bidang Tanah 1',
            'bidang_tanah' => $model->getJoinedData()
        ];

        return view('admin/datainduk/bidangtanah', $data);
    }

    // tambah datainduk1
    public function tambah1()
    {
        $rules = $this->validate([
            'persil' => 'required',
            'kelas_desa' => 'required',
            'luas' => 'required|numeric',
            'klasifikasi' => 'required',
            'bukti' => 'required',
        ]);

        if (!$rules) {
            return redirect()->back()->withInput()->with('failed', 'Data Gagal Ditambahkan');
        }
        $data = [
            'no_letter_c' => esc($this->request->getPost('persil')),
            'no_pemilik_baru' => esc($this->request->getPost('kelas_desa')),
            'nama' => esc($this->request->getPost('luas')),
            'filescan' => esc($this->request->getPost('klasifikasi')),
            'keterangan' => esc($this->request->getPost('bukti')),
        ];

        $this->DataIndukModel->insert($data);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan !');
    }

    // tambah2 datainduk1
    public function tambah2()
    {
        // aturan validasi input
        $rules = $this->validate([
            'no_letter_c'     => 'required',
            'no_pemilik_baru' => 'required',
            'nama'            => 'required',
            'filescan'        => 'required',
            'keterangan'      => 'required',
        ]);

        // Jika Validasi Gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data Gagal Ditambahkan !');
            return redirect()->back()->withInput();
        }
    }

    // Ubah Data Induk 1
    public function update($id_dataC)
    {
        $data = [
            'no_letter_c' => esc($this->request->getPost('no_letter_c')),
            'no_pemilik_baru' => esc($this->request->getPost('no_pemilik_baru')),
            'nama' => esc($this->request->getPost('nama')),
            'keterangan' => esc($this->request->getPost('keterangan')),
        ];

        $this->DataIndukModel->update($id_dataC, $data);

        return redirect()->back()->with('success', 'Data Berhasil Diubah !');
    }

    // Hapus Data Induk 1
    public function destroy($id_dataC)
    {
        $this->DataIndukModel->where('id_dataC', $id_dataC)->delete();
        $this->DataIndukModel->delete($id_dataC);

        return redirect()->back()->with('success', 'Data Berhasil Dihapus !');
    }

    public function tambahBidangTanah()
    {
        $rules = $this->validate([
            'persil' => 'required',
            'kelas_desa' => 'required',
            'luas' => 'required|numeric',
            'klasifikasi' => 'required',
            'bukti' => 'required'
        ]);

        if (!$rules) {
            return redirect()->back()->with('failed', 'Data Gagal Ditambahkan!')->withInput();
        }

        $data = [
            'id_dataC' => $this->request->getPost('id_dataC'),
            'persil' => $this->request->getPost('persil'),
            'kelas_desa' => $this->request->getPost('kelas_desa'),
            'luas' => $this->request->getPost('luas'),
            'klasifikasi' => $this->request->getPost('klasifikasi'),
            'bukti' => $this->request->getPost('bukti')
        ];

        $this->bidangTanahModel->save($data);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    // Fungsi untuk menghapus data bidang tanah
    public function destroyBidangTanah($id_bidangC)
    {
        $deleted = $this->bidangTanahModel->delete($id_bidangC);
        if ($deleted) {
            log_message('info', 'Data berhasil dihapus');
        } else {
            log_message('error', 'Data gagal dihapus');
        }
        return $this->response->setJSON(['success' => (bool)$deleted]);
    }

    public function getBidangTanah($id_bidangC)
    {
        $bidangTanah = $this->bidangTanahModel->find($id_bidangC);
        return $this->response->setJSON($bidangTanah);
    }

    public function updateBidangTanah()
    {
        $id_bidangC = $this->request->getPost('id_bidangC');

        $data = [
            'persil' => $this->request->getPost('persil'),
            'kelas_desa' => $this->request->getPost('kelas_desa'),
            'luas' => $this->request->getPost('luas'),
            'klasifikasi' => $this->request->getPost('klasifikasi'),
            'bukti' => $this->request->getPost('bukti')
        ];

        $this->bidangTanahModel->update($id_bidangC, $data);

        return redirect()->back()->with('success', 'Data Berhasil Diperbarui');
    }

    public function detail($id)
    {
        $data = [
            'tanah' => $this->letakBidangModel->find($id),
            'SPPT' => $this->spptModel->where('id_bidangC', $id)->findAll(),
            'letak_bidang' => $this->letakBidangModel->where('id_bidangC', $id)->findAll(),
            'riwayat_bidang' => $this->riwayatBidangModel->where('id_bidangC', $id)->findAll(),
            'batas_bidang' => $this->batasBidangModel->where('id_bidangC', $id)->findAll(),

        ];

        // Pastikan data dalam bentuk objek sebelum diteruskan ke view
        $data['tanah'] = is_array($data['tanah']) ? (object)$data['tanah'] : $data['tanah'];
        foreach ($data['SPPT'] as &$sppt) {
            $sppt = is_array($sppt) ? (object)$sppt : $sppt;
        }
        foreach ($data['letak_bidang'] as &$letakbidang) {
            $letakbidang = is_array($letakbidang) ? (object)$letakbidang : $letakbidang;
        }

        return view('admin/datainduk/detailtanah', $data);
    }

    public function tambahLetakBidang()
    {
        $this->letakBidangModel->save([
            'id_bidangC' => $this->request->getPost('id_bidangC'),
            'dusun' => $this->request->getPost('dusun'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'alamat' => $this->request->getPost('alamat'),
            'blok_tanah' => $this->request->getPost('blok_tanah'),
        ]);

        return redirect()->back()->with('success', 'Data Letak Bidang berhasil ditambahkan.');
    }

    public function updateLetakBidang()
    {
        $this->letakBidangModel->save([
            'id_letak' => $this->request->getPost('id_letak'),
            'dusun' => $this->request->getPost('dusun'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'alamat' => $this->request->getPost('alamat'),
            'blok_tanah' => $this->request->getPost('blok_tanah'),
        ]);

        return redirect()->back()->with('success', 'Data Letak Bidang berhasil diubah.');
    }

    public function tambahRiwayatBidang()
    {
        $rules = $this->validate([
            'id_bidangC' => 'required',
            'riwayat' => 'required'
        ]);

        if (!$rules) {
            return redirect()->back()->withInput()->with('failed', 'Data Gagal Ditambahkan');
        }

        $this->riwayatBidangModel->save([
            'id_bidangC' => $this->request->getPost('id_bidangC'),
            'riwayat' => $this->request->getPost('riwayat')
        ]);

        return redirect()->back()->with('success', 'Data Riwayat Bidang berhasil ditambahkan.');
    }

    public function updateRiwayatBidang()
    {
        $rules = $this->validate([
            'id_riwayat' => 'required',
            'riwayat' => 'required'
        ]);

        if (!$rules) {
            return redirect()->back()->withInput()->with('failed', 'Data Gagal Diperbarui');
        }

        $this->riwayatBidangModel->save([
            'id_riwayat' => $this->request->getPost('id_riwayat'),
            'riwayat' => $this->request->getPost('riwayat')
        ]);

        return redirect()->back()->with('success', 'Data Riwayat Bidang berhasil diperbarui.');
    }
}
