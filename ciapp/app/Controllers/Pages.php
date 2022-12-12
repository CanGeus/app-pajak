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
            'title' => 'Pembayaran Pajak',
        ];
        return view('create', $data);
    }
    public function save()
    {
        $this->pagesModel->save([
            'no_reg' => $this->request->getVar('no_reg'),
            'merek' => $this->request->getVar('merek'),
            'type' => $this->request->getVar('type'),
            'jenis' => $this->request->getVar('jenis'),
            'warna' => $this->request->getVar('warna'),
            'bahan_bakar' => $this->request->getVar('bahan_bakar'),
            'warna_tnkb' => $this->request->getVar('warna_tnkb'),
            'th_pembuatan' => $this->request->getVar('th_pembuatan'),
            'isi_silinder' => $this->request->getVar('isi_silinder'),
            'no_rangka' => $this->request->getVar('no_rangka'),
            'no_mesin' => $this->request->getVar('no_mesin'),
            'th_perakitan' => $this->request->getVar('th_perakitan'),
            'pemilik' => $this->request->getVar('pemilik'),
            'alamat_pemilik' => $this->request->getVar('alamat_pemilik')
        ]);
        return redirect()->to('/pages/read');
    }

    public function read()
    {
        $read = $this->pagesModel->orderBy('id', 'DESC')->limit(1)->find();
        $data = [
            'title' => 'Struk | Pajak Kendaraan',
            'stnk' => $read,
        ];

        return view('read', $data);
    }
    public function update($id)
    {

        $this->pagesModel->save([
            'id' => $id,
            'pokok' => $this->request->getVar('pokok'),
            'swdkllj' => $this->request->getVar('swdkllj'),
            'jumlah' => $this->request->getVar('jumlah')
        ]);

        return redirect()->to('/pages/done/');
    }
    public function done()
    {
        $read = $this->pagesModel->where('id', 'DESC')->find();
        $data = [
            'title' => 'Struk | Pajak Kendaraan',
            'stnk' => $read,
        ];

        return view('read', $data);
    }
}
