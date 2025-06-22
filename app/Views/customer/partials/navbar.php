<!-- app/Views/customer/partials/navbar.php -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm" style="margin-left: 250px;">
    <div class="container-fluid">
        <div class="d-flex align-items-center ms-auto">
            <span class="me-3"><?= session()->get('username') ?? 'Admin' ?></span>
            <img src="<?= base_url('assets/img/user-default.png') ?>" class="rounded-circle" width="40">
        </div>
    </div>
</nav>