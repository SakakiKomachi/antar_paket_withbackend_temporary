<?php namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pengiriman', 'jenis_barang', 'nama_barang', 'nilai_barang', 'jumlah', 'berat', 'tinggi', 'lebar', 'panjang'];

    public function getBarangByIdPengiriman($id_pengiriman)
    {
        return $this->where('id_pengiriman', $id_pengiriman)->first();
    }
}