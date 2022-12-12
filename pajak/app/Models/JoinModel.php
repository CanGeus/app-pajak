<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{

    protected $table      = 'stnk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['no_reg', 'merek', 'type', 'jenis', 'warna', 'bahan_bakar', 'warna_tnkb', 'th_pembuatan', 'isi_silinder', 'no_rangka', 'no_mesin', 'th_perakitan'];

    public function join()
    {
        $builder = $this->table('stnk');
        $builder->select('*');
        $builder->join('pemilik', 'stnk.no_reg = pemilik.no_reg');
        $builder->get();
    }
}
