<?= $this->extend('templates/main2') ?>

<?= $this->section('content') ?>
<div class="container-fluid m-0 p-0 d-flex justify-content-between align-items-center shadow-lg">
    <div class="row container-fluid m-0 p-0 min-h-screen border border-bottom-0">
        <div class="col-3 bg-first p-0">
            <div class="p-4 d-flex flex-column gap-3">
                <h4 class="text-white m-0 px-4">Pengaturan</h4>
                <a href="/settings/profile" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white mt-3">Edit profile</a>
                <a href="/settings/password" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Password</a>
                <a href="/settings/terms" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white active" style="display: block; background-color: #66b7e0; color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; text-decoration: none;">Syarat dan ketentuan</a>
                <a href="/settings/privacy" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Kebijakan privasi</a>
                <a href="/settings/customer-service" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Customer service</a>
            </div>
        </div>
        <div class="col-9 p-0">
            <div class="p-4 mt-4">
                <h3 class="mb-4">Syarat dan Ketentuan</h3>
                
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title text-first">Ketentuan Penggunaan Layanan</h5>
                        <div class="card-text mt-3">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item border-0">
                                    <strong>Definisi</strong>
                                    <p class="mt-2">Layanan ini adalah platform pengiriman paket yang menghubungkan pengirim dengan kurir.</p>
                                </li>
                                <li class="list-group-item border-0">
                                    <strong>Registrasi</strong>
                                    <p class="mt-2">Pengguna harus mendaftar dengan informasi yang valid dan bertanggung jawab atas akun mereka.</p>
                                </li>
                                <li class="list-group-item border-0">
                                    <strong>Kewajiban Pengguna</strong>
                                    <p class="mt-2">Pengguna dilarang mengirimkan barang-barang yang dilarang oleh hukum.</p>
                                </li>
                                <li class="list-group-item border-0">
                                    <strong>Pembayaran</strong>
                                    <p class="mt-2">Pembayaran harus dilakukan sesuai dengan tarif yang telah ditentukan.</p>
                                </li>
                                <li class="list-group-item border-0">
                                    <strong>Pengiriman</strong>
                                    <p class="mt-2">Waktu pengiriman dapat bervariasi tergantung kondisi lalu lintas dan cuaca.</p>
                                </li>
                                <li class="list-group-item border-0">
                                    <strong>Perubahan Syarat</strong>
                                    <p class="mt-2">Kami berhak mengubah syarat dan ketentuan ini dengan pemberitahuan sebelumnya.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded-3 mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-first">Kebijakan Pengembalian</h5>
                        <div class="card-text mt-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    Pengembalian paket hanya dapat dilakukan dalam kondisi tertentu.
                                </li>
                                <li class="list-group-item border-0">
                                    Pengguna harus melaporkan kerusakan paket dalam waktu 24 jam setelah diterima.
                                </li>
                                <li class="list-group-item border-0">
                                    Pengembalian dana akan diproses dalam waktu 3-5 hari kerja.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button class="btn bg-first text-white" onclick="window.print()">Cetak Syarat dan Ketentuan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>