<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{

    protected $table      = 'stnk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['no_reg', 'merek', 'type', 'jenis', 'warna', 'bahan_bakar', 'warna_tnkb', 'th_pembuatan', 'isi_silinder', 'no_rangka', 'no_mesin', 'th_perakitan'];

    public function get_join()
    {
        return $this->db->table('stnk')
            ->join('pemilik', 'pemilik.no_reg = stnk.no_reg')
            ->get()->getResultArray();
    }
}
