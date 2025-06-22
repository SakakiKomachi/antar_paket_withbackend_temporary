<?= $this->extend('templates/main'); ?>

<?= $this->section('content'); ?>
<div class="container py-4 px-5">
    <div class="container bg-white shadow-lg rounded-4 p-4">
        <div class="container-fluid justify-content-between mb-3">
            <h4><?= isset($pengiriman) ? 'Detail Pengiriman' : 'Form Data Pengiriman'; ?></h4>
            <div class="mt-4 w-100 container-fluid bg-first p-3 text-light rounded-3 start-0 end-0">
                <div class="fw-bold container row align-items-start">
                    Informasi Pengiriman
                </div>
            </div>
            
            <form class="row g-3 p-3" action="<?= isset($pengiriman) ? '/pengiriman/update/' . $pengiriman['id_pengiriman'] : '/pengiriman/save'; ?>" method="post">
                <?= csrf_field(); ?>
                <?php if (isset($pengiriman)): ?>
                    <input type="hidden" name="_method" value="PUT">
                <?php endif; ?>
                
                <div class="col-md-6">
                    <label for="id_pengiriman" class="form-label">ID Pengiriman</label>
                    <input type="text" class="form-control" id="id_pengiriman" name="id_pengiriman" 
                        value="<?= isset($pengiriman) ? $pengiriman['id_pengiriman'] : old('id_pengiriman'); ?>" 
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="kecamatan_pengirim" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_pengirim" name="kecamatan_pengirim" 
                        value="<?= isset($pengirim) ? $pengirim['kecamatan'] : old('kecamatan_pengirim'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="nama_pengirim" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" 
                        value="<?= isset($pengirim) ? $pengirim['nama_lengkap'] : old('nama_pengirim'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="kota_pengirim" class="form-label">Kota/Kabupaten</label>
                    <input type="text" class="form-control" id="kota_pengirim" name="kota_pengirim" 
                        value="<?= isset($pengirim) ? $pengirim['kota_kabupaten'] : old('kota_pengirim'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="no_telepon_pengirim" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="no_telepon_pengirim" name="no_telepon_pengirim" 
                        value="<?= isset($pengirim) ? $pengirim['no_telepon'] : old('no_telepon_pengirim'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="provinsi_pengirim" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_pengirim" name="provinsi_pengirim" 
                        value="<?= isset($pengirim) ? $pengirim['provinsi'] : old('provinsi_pengirim'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="email_pengirim" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email_pengirim" name="email_pengirim" 
                        value="<?= isset($pengirim) ? $pengirim['email'] : old('email_pengirim'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="kode_pos_pengirim" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="kode_pos_pengirim" name="kode_pos_pengirim" 
                        value="<?= isset($pengirim) ? $pengirim['kode_pos'] : old('kode_pos_pengirim'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="alamat_pengirim" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat_pengirim" name="alamat_pengirim" 
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>><?= isset($pengirim) ? $pengirim['alamat_lengkap'] : old('alamat_pengirim'); ?></textarea>
                </div>
                
                <div class="mt-5 w-100 container-fluid bg-first p-3 text-light rounded-3 start-0 end-0">
                    <div class="container-fluid fw-bold row align-items-start">
                        Informasi Penerima
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="nama_penerima" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" 
                        value="<?= isset($penerima) ? $penerima['nama_lengkap'] : old('nama_penerima'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="kecamatan_penerima" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_penerima" name="kecamatan_penerima" 
                        value="<?= isset($penerima) ? $penerima['kecamatan'] : old('kecamatan_penerima'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="no_telepon_penerima" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="no_telepon_penerima" name="no_telepon_penerima" 
                        value="<?= isset($penerima) ? $penerima['no_telepon'] : old('no_telepon_penerima'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="kota_penerima" class="form-label">Kota/Kabupaten</label>
                    <input type="text" class="form-control" id="kota_penerima" name="kota_penerima" 
                        value="<?= isset($penerima) ? $penerima['kota_kabupaten'] : old('kota_penerima'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="kode_pos_penerima" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="kode_pos_penerima" name="kode_pos_penerima" 
                        value="<?= isset($penerima) ? $penerima['kode_pos'] : old('kode_pos_penerima'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="provinsi_penerima" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_penerima" name="provinsi_penerima" 
                        value="<?= isset($penerima) ? $penerima['provinsi'] : old('provinsi_penerima'); ?>"
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                </div>
                <div class="col-md-6">
                    <label for="alamat_penerima" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat_penerima" name="alamat_penerima" 
                        <?= isset($pengiriman) ? 'readonly' : ''; ?>><?= isset($penerima) ? $penerima['alamat_lengkap'] : old('alamat_penerima'); ?></textarea>
                </div>
                
                <div class="mt-5 w-100 container-fluid bg-first p-3 text-light rounded-3 start-0 end-0">
                    <div class="container-fluid fw-bold row align-items-start">
                        Informasi Barang
                    </div>
                </div>
                
                <div class="mt-5 row">
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="jenis_barang" class="mb-3">Jenis Barang</label>
                            <input type="text" class="container-fluid form-group" id="jenis_barang" name="jenis_barang" 
                                value="<?= isset($barang) ? $barang['jenis_barang'] : old('jenis_barang'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="nama_barang" class="mb-3">Nama Barang</label>
                            <input type="text" class="container-fluid form-group" id="nama_barang" name="nama_barang" 
                                value="<?= isset($barang) ? $barang['nama_barang'] : old('nama_barang'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="nilai_barang" class="mb-3">Nilai Barang</label>
                            <input type="text" class="container-fluid form-group" id="nilai_barang" name="nilai_barang" 
                                value="<?= isset($barang) ? $barang['nilai_barang'] : old('nilai_barang'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="jumlah" class="mb-3">Jumlah</label>
                            <input type="text" class="container-fluid form-group" id="jumlah" name="jumlah" 
                                value="<?= isset($barang) ? $barang['jumlah'] : old('jumlah'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="berat" class="mb-3">Berat</label>
                            <input type="text" class="container-fluid form-group" id="berat" name="berat" 
                                value="<?= isset($barang) ? $barang['berat'] : old('berat'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="tinggi" class="mb-3">Tinggi</label>
                            <input type="text" class="container-fluid form-group" id="tinggi" name="tinggi" 
                                value="<?= isset($barang) ? $barang['tinggi'] : old('tinggi'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="lebar" class="mb-3">Lebar</label>
                            <input type="text" class="container-fluid form-group" id="lebar" name="lebar" 
                                value="<?= isset($barang) ? $barang['lebar'] : old('lebar'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="p-5">
                            <label for="panjang" class="mb-3">Panjang</label>
                            <input type="text" class="container-fluid form-group" id="panjang" name="panjang" 
                                value="<?= isset($barang) ? $barang['panjang'] : old('panjang'); ?>"
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <div class="p-3">
                            <label for="keterangan" class="mb-2 fw-bold">Keterangan</label>
                            <textarea rows="4" name="keterangan" id="keterangan" class="container-fluid" 
                                <?= isset($pengiriman) ? 'readonly' : ''; ?>><?= isset($pengiriman) ? $pengiriman['keterangan'] : old('keterangan'); ?></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5 w-100 container-fluid bg-first p-3 text-light rounded-3 start-0 end-0">
                    <div class="container-fluid fw-bold row align-items-start">
                        Informasi Pengiriman
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-12 p-0">
                        <div class="p-3">Jenis Layanan</div>
                    </div>
                    
                    <?php 
                    $jenis_layanan = isset($pengiriman) ? $pengiriman['jenis_layanan'] : old('jenis_layanan');
                    ?>
                    
                    <div class="col-4 p-0">
                        <div class="p-3">
                            <div class="border d-flex align-items-start p-3 rounded">
                                <input type="radio" name="jenis_layanan" id="sameday" class="mt-2 d-block p-3" 
                                    value="Sameday" <?= ($jenis_layanan == 'Sameday') ? 'checked' : ''; ?>
                                    <?= isset($pengiriman) ? 'disabled' : ''; ?>>
                                <div class="d-flex align-items-center ms-3 justify-content-between container-fluid p-0">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Sameday</span>
                                        <small>( max 35 x 30 x 25cm )</small>
                                    </div>
                                    <span>Rp. 20.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="p-3">
                            <div class="border d-flex align-items-start p-3 rounded">
                                <input type="radio" name="jenis_layanan" id="frozen" class="mt-2 d-block p-3" 
                                    value="Frozen" <?= ($jenis_layanan == 'Frozen') ? 'checked' : ''; ?>
                                    <?= isset($pengiriman) ? 'disabled' : ''; ?>>
                                <div class="d-flex align-items-center ms-3 justify-content-between container-fluid p-0">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Frozen</span>
                                        <small>( Max 30 x 22 x 12 cm )</small>
                                    </div>
                                    <span>Rp. 60.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="p-3">
                            <div class="border d-flex align-items-start p-3 rounded">
                                <input type="radio" name="jenis_layanan" id="cargo" class="mt-2 d-block p-3" 
                                    value="Cargo" <?= ($jenis_layanan == 'Cargo') ? 'checked' : ''; ?>
                                    <?= isset($pengiriman) ? 'disabled' : ''; ?>>
                                <div class="d-flex align-items-center ms-3 justify-content-between container-fluid p-0">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Cargo</span>
                                        <small>( Max 80 cm )</small>
                                    </div>
                                    <span>Rp. 70.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="p-3">
                            <div class="border d-flex align-items-start p-3 rounded">
                                <input type="radio" name="jenis_layanan" id="reguler" class="mt-2 d-block p-3" 
                                    value="Reguler" <?= ($jenis_layanan == 'Reguler') ? 'checked' : ''; ?>
                                    <?= isset($pengiriman) ? 'disabled' : ''; ?>>
                                <div class="d-flex align-items-center ms-3 justify-content-between container-fluid p-0">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Reguler</span>
                                        <small>( 20 x 20 x 8 cm )</small>
                                    </div>
                                    <span>Rp. 30.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="p-3">
                            <div class="border d-flex align-items-start p-3 rounded">
                                <input type="radio" name="jenis_layanan" id="nextday" class="mt-2 d-block p-3" 
                                    value="Next Day" <?= ($jenis_layanan == 'Next Day') ? 'checked' : ''; ?>
                                    <?= isset($pengiriman) ? 'disabled' : ''; ?>>
                                <div class="d-flex align-items-center ms-3 justify-content-between container-fluid p-0">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">Next Day</span>
                                        <small>( 30 x 35 x 25 cm)</small>
                                    </div>
                                    <span>Rp. 65.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr class="border-dark my-5" style="border-style: dashed;">
                
                <div class="row justify-content-end">
                    <div class="col-4 p-0 d-flex flex-column">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Asuransi:</td>
                                    <td>
                                        <span class="text-end d-block">Rp. <?= isset($pengiriman) ? number_format($pengiriman['asuransi'], 0, ',', '.') : '0'; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Biaya Kirim:</td>
                                    <td>
                                        <span class="text-end d-block">Rp. <?= isset($pengiriman) ? number_format($pengiriman['biaya_kirim'], 0, ',', '.') : '0'; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Total Biaya:</td>
                                    <td>
                                        <span class="text-end d-block fw-bold">Rp. <?= isset($pengiriman) ? number_format($pengiriman['total_biaya'], 0, ',', '.') : '0'; ?></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <small class="text-danger text-end my-4">*perkiraan tarif pengiriman</small>
                        <div class="d-flex align-items-center justify-content-end">
                            <?php if (!isset($pengiriman)): ?>
                                <button type="submit" class="btn bg-first text-white">Check Out</button>
                                <button type="reset" class="btn bg-warning text-white mx-3">Reset</button>
                            <?php endif; ?>
                            <a href="/pengiriman" class="btn bg-danger text-white">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>