<div class="row align-items-start px-4 mt-5 mx-0" id="content">
    <div class="col-6">
        <div class="row">
            <div class="col-6 p-0">
                <div class="p-2">
                    <div class="card-sm shadow-sm border border-fourth rounded p-3 py-4 d-flex flex-column gap-4 align-items-center">
                        <p class="m-0 font-semibold">Total Pengiriman</p>
                        <h3 class="m-0 text-black font-normal"><?= number_format($stats['total_pengiriman']) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-6 p-0">
                <div class="p-2">
                    <div class="card-sm shadow-sm border border-fourth rounded p-3 py-4 d-flex flex-column gap-4 align-items-center">
                        <p class="m-0 font-semibold">Pengiriman Hari Ini</p>
                        <h3 class="m-0 text-black font-normal"><?= number_format($stats['pengiriman_hari_ini']) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-6 p-0">
                <div class="p-2">
                    <a href="<?= base_url('customer/create') ?>"
                        class="text-decoration-none card-sm shadow-sm border border-fourth rounded p-3 py-4 d-flex flex-column gap-4 align-items-center">
                        <img src="<?= base_url('assets/img/new-user.png') ?>" alt="">
                        <p class="m-0 font-semibold text-fourth">Buat ID Customer Baru</p>
                    </a>
                </div>
            </div>
            <div class="col-6 p-0">
                <div class="p-2">
                    <a href="<?= base_url('pengiriman/create') ?>"
                        class="text-decoration-none card-sm shadow-sm border border-fourth rounded p-3 py-4 d-flex flex-column gap-4 align-items-center">
                        <img src="<?= base_url('assets/img/truck-fast.png') ?>" alt="">
                        <p class="m-0 font-semibold text-fourth">Buat Pengiriman Baru</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-12 p-0">
                <div class="p-2">
                    <div class="container-fluid border border-fourth card-chart p-3 rounded">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div>
                                <p class="mb-2 font-semibold">Laporan Sistem</p>
                                <p class="mb-0">Total keseluruhan sesi perhari dari periode mingguan</p>
                            </div>
                            <form action="" class="w-fit">
                                <select name="" id="">
                                    <option value="1">Oktober 2023</option>
                                    <option value="2">November 2023</option>
                                    <option value="3">Desember 2023</option>
                                </select>
                            </form>
                        </div>
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>