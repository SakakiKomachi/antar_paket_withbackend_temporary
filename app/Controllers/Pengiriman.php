<?php namespace App\Controllers;

use App\Models\PengirimanModel;
use App\Models\PengirimModel;
use App\Models\PenerimaModel;
use App\Models\BarangModel;

class Pengiriman extends BaseController
{
    protected $pengirimanModel;
    protected $pengirimModel;
    protected $penerimaModel;
    protected $barangModel;

    public function __construct()
    {
        $this->pengirimanModel = new PengirimanModel();
        $this->pengirimModel = new PengirimModel();
        $this->penerimaModel = new PenerimaModel();
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pengiriman',
            'pengiriman' => $this->pengirimanModel->getAllPengiriman()
        ];
        return view('pengiriman/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Data Pengiriman',
            'validation' => \Config\Services::validation()
        ];
        return view('pengiriman/form_pengiriman', $data);
    }
    

    public function edit($id_pengiriman)
    {
        $data = [
            'title' => 'Form Edit Pengiriman',
            'validation' => \Config\Services::validation(),
            'pengiriman' => $this->pengirimanModel->getPengirimanById($id_pengiriman),
            'pengirim' => $this->pengirimModel->getPengirimByIdPengiriman($id_pengiriman),
            'penerima' => $this->penerimaModel->getPenerimaByIdPengiriman($id_pengiriman),
            'barang' => $this->barangModel->getBarangByIdPengiriman($id_pengiriman)
        ];
        return view('pengiriman/form_pengiriman2', $data);
    }

    public function view($id_pengiriman)
    {
        $data = [
            'title' => 'Detail Pengiriman',
            'pengiriman' => $this->pengirimanModel->getPengirimanById($id_pengiriman),
            'pengirim' => $this->pengirimModel->getPengirimByIdPengiriman($id_pengiriman),
            'penerima' => $this->penerimaModel->getPenerimaByIdPengiriman($id_pengiriman),
            'barang' => $this->barangModel->getBarangByIdPengiriman($id_pengiriman)
        ];
        return view('pengiriman/form_pengiriman2', $data);
    }

    public function store()
    {
        // Validasi input
        if (!$this->validate([
            'id_pengiriman' => 'required|is_unique[pengiriman.id_pengiriman]',
            'nama_pengirim' => 'required',
            'no_telepon_pengirim' => 'required',
            'alamat_pengirim' => 'required',
            'kecamatan_pengirim' => 'required',
            'kota_pengirim' => 'required',
            'provinsi_pengirim' => 'required',
            'kode_pos_pengirim' => 'required',
            'email_pengirim' => 'valid_email',
            'nama_penerima' => 'required',
            'no_telepon_penerima' => 'required',
            'alamat_penerima' => 'required',
            'kecamatan_penerima' => 'required',
            'kota_penerima' => 'required',
            'provinsi_penerima' => 'required',
            'kode_pos_penerima' => 'required',
            'jenis_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric',
            'berat' => 'required|numeric',
            'jenis_layanan' => 'required'
            
        ])) {
            return redirect()->to('/pengiriman/create')->withInput();
        }

        // Simpan data ke database
        // ...

        return redirect()->to('/pengiriman')->with('success', 'Pengiriman berhasil ditambahkan');
    }

    public function save()
    {
        if (!$this->validate([
            'id_pengiriman' => 'required|is_unique[pengiriman.id_pengiriman]',
            'nama_pengirim' => 'required',
            'no_telepon_pengirim' => 'required',
            'alamat_pengirim' => 'required',
            'kecamatan_pengirim' => 'required',
            'kota_pengirim' => 'required',
            'provinsi_pengirim' => 'required',
            'kode_pos_pengirim' => 'required',
            'email_pengirim' => 'valid_email',
            'nama_penerima' => 'required',
            'no_telepon_penerima' => 'required',
            'alamat_penerima' => 'required',
            'kecamatan_penerima' => 'required',
            'kota_penerima' => 'required',
            'provinsi_penerima' => 'required',
            'kode_pos_penerima' => 'required',
            'jenis_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric',
            'berat' => 'required|numeric',
            'jenis_layanan' => 'required'
        ])) {
            return redirect()->to('/pengiriman/create')->withInput();
        }

        // Generate ID Pengiriman if empty
        $id_pengiriman = $this->request->getVar('id_pengiriman');
        if (empty($id_pengiriman)) {
            $id_pengiriman = 'PCST' . date('Ymd') . str_pad($this->pengirimanModel->countAll() + 1, 5, '0', STR_PAD_LEFT);
        }

        // Calculate costs based on service type
        $jenis_layanan = $this->request->getVar('jenis_layanan');
        $biaya_kirim = 0;
        
        switch ($jenis_layanan) {
            case 'Sameday':
                $biaya_kirim = 20000;
                break;
            case 'Frozen':
                $biaya_kirim = 60000;
                break;
            case 'Cargo':
                $biaya_kirim = 70000;
                break;
            case 'Reguler':
                $biaya_kirim = 30000;
                break;
            case 'Next Day':
                $biaya_kirim = 65000;
                break;
        }

        $total_biaya = $biaya_kirim + (float)$this->request->getVar('asuransi');

        // Save pengiriman data
        $this->pengirimanModel->save([
            'id_pengiriman' => $id_pengiriman,
            'tanggal' => date('Y-m-d H:i:s'),
            'jenis_layanan' => $jenis_layanan,
            'biaya_kirim' => $biaya_kirim,
            'asuransi' => $this->request->getVar('asuransi') ?? 0,
            'total_biaya' => $total_biaya,
            'keterangan' => $this->request->getVar('keterangan'),
            'status' => 'Proses',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // Save pengirim data
        $this->pengirimModel->save([
            'id_pengiriman' => $id_pengiriman,
            'nama_lengkap' => $this->request->getVar('nama_pengirim'),
            'no_telepon' => $this->request->getVar('no_telepon_pengirim'),
            'email' => $this->request->getVar('email_pengirim'),
            'alamat_lengkap' => $this->request->getVar('alamat_pengirim'),
            'kecamatan' => $this->request->getVar('kecamatan_pengirim'),
            'kota_kabupaten' => $this->request->getVar('kota_pengirim'),
            'provinsi' => $this->request->getVar('provinsi_pengirim'),
            'kode_pos' => $this->request->getVar('kode_pos_pengirim')
        ]);

        // Save penerima data
        $this->penerimaModel->save([
            'id_pengiriman' => $id_pengiriman,
            'nama_lengkap' => $this->request->getVar('nama_penerima'),
            'no_telepon' => $this->request->getVar('no_telepon_penerima'),
            'alamat_lengkap' => $this->request->getVar('alamat_penerima'),
            'kecamatan' => $this->request->getVar('kecamatan_penerima'),
            'kota_kabupaten' => $this->request->getVar('kota_penerima'),
            'provinsi' => $this->request->getVar('provinsi_penerima'),
            'kode_pos' => $this->request->getVar('kode_pos_penerima')
        ]);

        // Save barang data
        $this->barangModel->save([
            'id_pengiriman' => $id_pengiriman,
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'nilai_barang' => $this->request->getVar('nilai_barang'),
            'jumlah' => $this->request->getVar('jumlah'),
            'berat' => $this->request->getVar('berat'),
            'tinggi' => $this->request->getVar('tinggi'),
            'lebar' => $this->request->getVar('lebar'),
            'panjang' => $this->request->getVar('panjang')
        ]);

        return redirect()->to('/pengiriman')->with('success', 'Data pengiriman berhasil disimpan');
    }

    public function update($id_pengiriman)
    {
        // Similar validation as save()
        // Update all related tables
        
        return redirect()->to('/pengiriman')->with('success', 'Data pengiriman berhasil diupdate');
    }

    public function delete($id_pengiriman)
    {
        $this->pengirimanModel->where('id_pengiriman', $id_pengiriman)->delete();
        $this->pengirimModel->where('id_pengiriman', $id_pengiriman)->delete();
        $this->penerimaModel->where('id_pengiriman', $id_pengiriman)->delete();
        $this->barangModel->where('id_pengiriman', $id_pengiriman)->delete();
        
        return redirect()->to('/pengiriman')->with('success', 'Data pengiriman berhasil dihapus');
    }
}