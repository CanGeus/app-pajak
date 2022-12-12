<?php

namespace App\Controllers;

use App\Models\PagesModel;

class Detail extends BaseController
{
    protected $pagesModel;
    public function __construct()
    {
        $this->pagesModel = new PagesModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Detail | Pajakin',
            'detail' => $this->pagesModel->join(),
        ];
        return view('detail', $data);
        // $detail = $this->pagesModel->where(['no_reg' => $parm])->first();
        // dd($detail);
    }
}
