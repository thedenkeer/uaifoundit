<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'data_barang';
    protected $primaryKey       = 'id_barang';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_barang', 'kategori_barang', 'deskripsi_barang', 'lokasi_barang', 'foto_barang', 'nama_pelapor', 'email', 'no_hp'];
    protected $useSoftDeletes   = false;
    protected $useTimestamps    = false;

    //function untuk relasi tabel
    // function getAll()
    // {
    //     $builder    = $this->db->table('data_barang');
    //     $builder->join('penemu_barang', 'penemu_barang.id_penemu = data_barang.id_penemu');
    //     $query      = $builder->get();
    //     return $query->getResult();
    // }
}