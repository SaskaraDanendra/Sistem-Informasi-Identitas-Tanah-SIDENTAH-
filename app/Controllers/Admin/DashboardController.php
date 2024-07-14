<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $totalLuas = $this->BidangTanahModel->selectSum('luas')->get()->getRow()->luas;

        $data = [
            'title'  =>  'Dashboard',
            'totalC' => $this->DataIndukModel->countAllResults(),
            'totalBidang' => $this->BidangTanahModel->countAllResults(),
            'totalLuas' => $totalLuas,
            'data_induk' => $this->DataIndukModel->limit(3)->find(),
            'totalSppt' => $this->SpptModel->countAllResults()
        ];

        return view('admin/dashboard/index', $data);
    }

    public function totalLuas()
    {
        // Menggunakan query builder untuk menghitung total luas
        $totalLuas = $this->BidangTanahModel->selectSum('luas')->get()->getRow()->luas;

        // Mengembalikan atau menampilkan hasil
        return $this->response->setJSON(['totalLuas' => $totalLuas]);
    }
}
