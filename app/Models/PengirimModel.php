<?php namespace App\Models;

use CodeIgniter\Model;

class PengirimModel extends Model
{
    protected $table = 'pengirim';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pengiriman', 'nama_lengkap', 'no_telepon', 'email', 'alamat_lengkap', 'kecamatan', 'kota_kabupaten', 'provinsi', 'kode_pos'];

    public function getPengirimByIdPengiriman($id_pengiriman)
    {
        return $this->where('id_pengiriman', $id_pengiriman)->first();
    }
}