<?php

namespace App\Controllers;

use App\Models\PagesModel;

class Pages extends BaseController
{
    protected $pagesModel;
    public function __construct()
    {
        $this->pagesModel = new PagesModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Create | Pajakin'
        ];
        return view('create', $data);
    }

    public function create()
    {
        $stnk = $this->pagesModel->findAll();
        $data = [
            'title' => 'Home | Pajakin',
            'stnk' => $stnk
        ];
        return view('home', $data);
    }

    public function save()
    {
        $this->pagesModel->save([
            'merek' => $this->request->getVar('merek'),
            'type' => $this->request->getVar('type'),
            'jenis' => $this->request->getVar('jenis'),
            'bahan_bakar' => $this->request->getVar('bahan_bakar'),
            'warna_tnkb' => $this->request->getVar('warna_tnkb'),
            'th_pembuatan' => $this->request->getVar('th_pembuatan'),
            'isi_silinder' => $this->request->getVar('isi_silinder'),
            'no_rangka' => $this->request->getVar('no_rangka'),
            'no_mesin' => $this->request->getVar('no_mesin'),
            'th_perakitan' => $this->request->getVar('th_perakitan')
        ]);
        return redirect()->to('/');
    }
}
