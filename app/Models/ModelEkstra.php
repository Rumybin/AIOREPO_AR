<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEkstra extends Model
{
    protected $table = 'db_ekstra';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['Nama', 'Hari'];

    public function getEkstraByDay($hari)
{
    // Menggunakan select untuk memilih kolom yang diinginkan
    return $this->select('Nama')
                ->where('Hari', $hari)
                ->findAll();
}
    public function getallNama()
{
    return $this->select('Nama')->findAll();
}

}
