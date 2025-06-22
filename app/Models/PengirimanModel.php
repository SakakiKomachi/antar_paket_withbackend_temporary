<?php namespace App\Models;

use CodeIgniter\Model;

class PengirimanModel extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pengiriman', 'id_customer', 'tanggal', 'jenis_layanan', 'biaya_kirim', 'asuransi', 'total_biaya', 'keterangan', 'status', 'created_at', 'updated_at'];

    public function getAllPengiriman()
    {
        return $this->orderBy('tanggal', 'DESC')->findAll();
    }

    public function getPengirimanById($id_pengiriman)
    {
        return $this->where('id_pengiriman', $id_pengiriman)->first();
    }
}