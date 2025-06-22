<?= $this->extend('templates/main2') ?>

<?= $this->section('content') ?>
<div class="container-fluid m-0 p-0 d-flex justify-content-between align-items-center shadow-lg">
    <div class="row container-fluid m-0 p-0 min-h-screen border border-bottom-0">
        <div class="col-3 bg-first p-0">
            <div class="p-4 d-flex flex-column gap-3">
                <h4 class="text-white m-0 px-4">Pengaturan</h4>
                <a href="/settings/profile" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white mt-3">Edit profile</a>
                <a href="/settings/password" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Password</a>
                <a href="/settings/terms" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Syarat dan ketentuan</a>
                <a href="/settings/privacy" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white active" style="display: block; background-color: #66b7e0; color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; text-decoration: none;">Kebijakan privasi</a>
                <a href="/settings/customer-service" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Customer service</a>
            </div>
        </div>
        <div class="col-9 p-0">
            <div class="p-4 mt-4">
                <h3 class="mb-4">Kebijakan Privasi</h3>
                <p class="text-justify">Kebijakan Privasi ini menjelaskan bagaimana PT. Seven Inc., masing-masing anak perusahaan, afiliasinya, perusahaan-perusahaan yang terasosiasi dengannya, dan entitas-entitas yang dikendalikan bersama (secara kolektif disebut "Antar Paket") mengumpulkan, menyimpan, menggunakan, mengolah, menganalisa, menguasai, mentransfer, mengungkapkan, menampilkan, membuka dan melindungi setiap data atau informasi pribadi anda (selanjutnya disebut "Pengguna", atau "Anda") yang diberikan kepada Anteraja terhadap penggunaan situs (www.anteraja.id) dan aplikasi milik Anteraja (selanjutnya disebut "Situs") dalam penggunaan layanan yang kami sediakan (selanjutnya disebut "Layanan").</p>
                
                <div class="card shadow-sm border-0 rounded-3 mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-first">A. PEROLEHAN DAN PENGUMPULAN DATA PRIBADI</h5>
                        <div class="card-text mt-3">
                            <p class="text-justify">Antar paket mengumpulkan Data Pribadi dengan tujuan untuk memproses transaksi Anda, mengelola dan memperlancar proses penggunaan Situs, serta tujuan-tujuan lainnya selama diizinkan oleh Peraturan. Kami juga dapat menggabungkan Data Pribadi yang dikumpulkan dengan Data Pribadi lainnya yang kami miliki. Adapun Data Pribadi yang dikumpulkan dengan cara yang tercantum di bawah ini:</p>
                            
                            <p class="text-justify font-semibold">1. Data Pribadi yang diserahkan secara mandiri oleh Pengguna, termasuk namun tidak terbatas pada data yang diserahkan pada saat Pengguna:</p>
                            <ul class="ms-3">
                                <li>Membuat atau memperbarui akun di Anteraja, termasuk diantaranya nama pengguna (username), alamat email, nomor telepon, password, alamat, foto, dan lain-lain;</li>
                                <li>Menghubungi Anteraja, termasuk melalui layanan pelanggan;</li>
                                <li>Mengisi survei yang dikirimkan oleh Anteraja atau atas nama Anteraja;</li>
                                <li>Melakukan interaksi dengan Pengguna lainnya melalui fitur pesan, diskusi produk, ulasan, rating, dan sebagainya;</li>
                                <li>Mempergunakan Layanan pada Situs, termasuk data transaksi yang detil, diantaranya jenis, jumlah dan/atau keterangan dari barang milik Pengguna;</li>
                                <li>Mengisi data-data pembayaran pada saat Pengguna melakukan aktivitas transaksi pembayaran melalui Situs;</li>
                                <li>Menggunakan fitur yang membutuhkan izin akses terhadap perangkat Pengguna.</li>
                            </ul>
                            
                            <p class="text-justify font-semibold mt-3">2. Data yang dikumpulkan secara otomatis:</p>
                            <ul class="ms-3">
                                <li>Data lokasi riil atau perkiraannya seperti alamat IP, lokasi Wi-Fi, geo-location, dan sebagainya;</li>
                                <li>Data berupa waktu dari setiap aktivitas Pengguna, termasuk aktivitas pendaftaran, login, transaksi, dan lain sebagainya;</li>
                                <li>Data penggunaan atau preferensi Pengguna, diantaranya interaksi Pengguna dalam menggunakan Situs;</li>
                                <li>Data perangkat, diantaranya jenis perangkat yang digunakan untuk mengakses Situs;</li>
                                <li>Data catatan (log), diantaranya catatan pada server yang menerima data seperti alamat IP perangkat.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded-3 mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-first">B. PENGGUNAAN DATA PRIBADI</h5>
                        <div class="card-text mt-3">
                            <p class="text-justify">Anteraja dapat menggunakan keseluruhan atau sebagian Data Pribadi yang diperoleh dan dikumpulkan dari Pengguna untuk:</p>
                            <ul class="ms-3">
                                <li>Memproses segala bentuk permintaan, aktivitas maupun transaksi yang dilakukan oleh Pengguna melalui Situs;</li>
                                <li>Penyediaan fitur-fitur untuk memberikan, mewujudkan, memelihara dan memperbaiki Layanan kami;</li>
                                <li>Membantu Pengguna pada saat berkomunikasi dengan layanan pelanggan dari Anteraja;</li>
                                <li>Menghubungi Pengguna melalui email, surat, telepon, fax, dan lain-lain;</li>
                                <li>Melakukan penelitian pasar dan peninjauan kepuasan pelanggan;</li>
                                <li>Menginformasikan kepada Pengguna terkait produk, layanan, promosi bermanfaat dan program loyalitas;</li>
                                <li>Melakukan monitoring ataupun investigasi terhadap transaksi-transaksi mencurigakan;</li>
                                <li>Melindungi keamanan atau integritas Layanan;</li>
                                <li>Untuk tujuan penegakan hukum atau untuk pemenuhan persyaratan hukum dan peraturan yang berlaku.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded-3 mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-first">C. PENGUNGKAPAN DATA PRIBADI PENGGUNA</h5>
                        <div class="card-text mt-3">
                            <p class="text-justify">Antar Paket tidak akan menggunakan Data Pribadi anda selain untuk tujuan yang telah kami beritahukan kepada anda, atau yang mana diijinkan oleh hukum dan peraturan setempat. Kami tidak akan menawarkan, menerbitkan, memberikan, menjual, mengalihkan, mendistribusikan atau meminjamkan Data Pribadi anda dengan pihak lainnya di luar kami untuk tujuan komersial, tanpa meminta persetujuan dari anda, kecuali terhadap hal-hal sebagai berikut:</p>
                            <ul class="ms-3">
                                <li>Dibutuhkan adanya pengungkapan Data Pribadi Pengguna kepada mitra atau pihak ketiga lain yang membantu Anteraja;</li>
                                <li>Dibutuhkan adanya komunikasi antara mitra usaha Anteraja dengan Pengguna dalam hal penyediaan Layanan;</li>
                                <li>Anteraja dapat menyediakan informasi yang relevan kepada vendor, konsultan, mitra pemasaran;</li>
                                <li>Pengguna menghubungi Anteraja melalui media publik seperti blog, media sosial;</li>
                                <li>Anteraja mengungkapkan data Pengguna dalam upaya mematuhi kewajiban hukum.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded-3 mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-first">K. LAYANAN PENGGUNA</h5>
                        <div class="card-text mt-3">
                            <p class="text-justify">Jika Anda memiliki pertanyaan mengenai Data Pribadi anda, mohon hubungi:</p>
                            <p class="text-justify"><strong>PT Seven Inc (ANTAR PAKET)</strong></p>
                            <p class="text-justify">Jalan Raya Janti, Gang Arjuna Nomor 59, Karangjambe, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55198</p>
                            <p class="text-justify">Email : cs@antarpaket.id</p>
                            <p class="text-justify">Telepon : 089633040200</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button class="btn bg-first text-white" onclick="window.print()">Cetak Kebijakan Privasi</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>