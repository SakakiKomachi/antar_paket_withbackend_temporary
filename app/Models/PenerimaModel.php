<?php namespace App\Models;

use CodeIgniter\Model;

class PenerimaModel extends Model
{
    protected $table = 'penerima';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pengiriman', 'nama_lengkap', 'no_telepon', 'alamat_lengkap', 'kecamatan', 'kota_kabupaten', 'provinsi', 'kode_pos'];

    public function getPenerimaByIdPengiriman($id_pengiriman)
    {
        return $this->where('id_pengiriman', $id_pengiriman)->first();
    }
}