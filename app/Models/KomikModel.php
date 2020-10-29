<?php

namespace App\Models;

use CodeIgniter\model;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = true;
    protected $allowFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];


    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
