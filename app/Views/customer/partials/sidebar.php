<div class="bg-first px-3 py-4 d-flex flex-column gap-4 min-vh-100" id="side">
    <div class="container-fluid p-0 m-0 d-flex justify-content-center">
        <img src="<?= base_url('assets/img/logo-white.png') ?>" alt="" class="logo">
    </div>
    <hr class="border-white border-2">
    <div class="container-fluid m-0 px-3 py-2 link">
        <a href="<?= base_url('dashboard') ?>"
            class="lead text-decoration-none m-0 font-bold text-white d-flex gap-3 align-items-center">
            <img src="<?= base_url('assets/img/dashboard-white.png') ?>" alt=""> 
            <small>Dashboard</small>
        </a>
    </div>
    <div class="container-fluid m-0 px-3 py-2 bg-white link dropdown">
        <a data-bs-toggle="collapse" href="#collapseExample" role="button"
            class="lead text-decoration-none m-0 font-bold text-first d-flex gap-3 align-items-center">
            <img src="<?= base_url('assets/img/user-blue.png') ?>" alt=""> 
            <small>Customer</small>
        </a>
        <div class="collapse show" id="collapseExample">
            <hr class="mt-3">
            <div class="d-flex flex-column gap-3 align-items-center py-3">
                <a href="<?= base_url('pengiriman') ?>" class="text-decoration-none text-fourth">Pengiriman</a>
                <a href="<?= base_url('customer') ?>" class="text-decoration-none text-first">ID Customer</a>
            </div>
        </div>
    </div>
    <div class="container-fluid m-0 px-3 py-2 link">
        <a href="<?= base_url('settings') ?>"
            class="lead text-decoration-none m-0 font-bold text-white d-flex gap-3 align-items-center">
            <img src="<?= base_url('assets/img/setting.png') ?>" alt=""> 
            <small>Pengaturan</small>
        </a>
    </div>
    <div class="container-fluid m-0 px-3 py-2 link">
        <a type="button" data-bs-toggle="modal" data-bs-target="#keluar"
            class="lead text-decoration-none m-0 font-bold text-white d-flex gap-3 align-items-center">
            <img src="<?= base_url('assets/img/logout.png') ?>" alt=""> 
            <small>Keluar</small>
        </a>
    </div>
</div>