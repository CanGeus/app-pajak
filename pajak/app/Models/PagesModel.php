<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table      = 'stnk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['merek', 'type', 'jenis', 'warna', 'bahan_bakar', 'warna_tnkb', 'th_pembuatan', 'isi_silinder', 'no_rangka', 'no_mesin', 'th_perakitan'];
}
