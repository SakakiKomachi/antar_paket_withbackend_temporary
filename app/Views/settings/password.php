<?= $this->extend('templates/main2') ?>

<?= $this->section('content') ?>
<div class="container-fluid m-0 p-0 d-flex justify-content-between align-items-center shadow-lg">
      <div class="row container-fluid m-0 p-0 border border-bottom-0" style="height: 100vh;">
        <div class="col-3 bg-first p-0">
            <!-- Sidebar settings -->
            <div class="p-4 d-flex flex-column gap-3">
                <h4 class="text-white m-0 px-4">Pengaturan</h4>
                <a href="/settings" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white mt-3">Edit profile</a>
                <a href="/settings/password" class="text-decoration-none px-4 py-3 rounded-3 link-settings active text-white" style="display: block; background-color: #66b7e0; color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; text-decoration: none;">Password</a>
                <a href="/settings/terms" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Syarat dan ketentuan</a>
                <a href="/settings/privacy" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Kebijakan privasi</a>
                <a href="/settings/customer-service" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Customer service</a>
            </div>
        </div>
        <div class="col-9 p-4">
            <h3>Password</h3>
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <p class="mt-4">Silahkan masukkan password lama dan password baru Anda untuk mengubah password baru.</p>
            <form class="mt-5" action="/settings/password/update" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="current_password" class="form-label">Password Saat Ini</label>
                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Masukkan password saat ini" required>
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label">Password Baru</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Masukkan password baru" required minlength="8">
                </div>
                <div class="mb-5">
                    <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Masukkan ulang password baru" required>
                </div>
                <button type="submit" class="btn bg-first text-white px-5 py-2">Perbarui</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>