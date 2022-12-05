<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Pajakin'
        ];
        return view('home', $data);
    }
}
