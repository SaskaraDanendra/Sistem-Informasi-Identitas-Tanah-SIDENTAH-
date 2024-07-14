<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SpptModel;

class SpptController extends BaseController
{
    protected $spptModel;

    public function __construct()
    {
        $this->spptModel = new SpptModel();
    }

    public function update()
    {
        $id_sppt = $this->request->getPost('id_sppt');
        $sppt = $this->request->getPost('sppt');

        $this->spptModel->update($id_sppt, ['sppt' => $sppt]);

        return redirect()->back()->with('success', 'Data SPPT berhasil diupdate');
    }
}
