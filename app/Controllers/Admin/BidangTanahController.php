<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BidangTanahModel;
use App\Models\DataIndukModel;

class BidangTanahController extends BaseController
{
    protected $bidangTanahModel;
    protected $dataIndukModel;

    public function __construct()
    {
        $this->bidangTanahModel = new BidangTanahModel();
        $this->dataIndukModel = new DataIndukModel();
    }

    public function index()
    {
        // Mengambil data bidang tanah beserta informasi pemilik dari data_induk
        $bidang_tanah = $this->bidangTanahModel->select('bidang_tanah.*, data_induk.nama, data_induk.id_dataC')
            ->join('data_induk', 'data_induk.id_dataC = bidang_tanah.id_dataC')
            ->findAll();

        $data = [
            'title' => 'Data Bidang Tanah',
            'bidang_tanah' => $bidang_tanah
        ];

        return view('admin/bidangtanah/index', $data);
    }
}
