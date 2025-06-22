<?= $this->extend('templates/main2') ?>

<?= $this->section('content') ?>
<div class="container-fluid m-0 p-0 d-flex justify-content-between align-items-center shadow-lg">
    <div class="row container-fluid m-0 p-0 border border-bottom-0" style="height: 100vh;">
        <div class="col-3 bg-first p-0">
            <div class="p-4 d-flex flex-column gap-3">
                <h4 class="text-white m-0 px-4">Pengaturan</h4>
                <a href="/settings" class="mt-3" style="display: block; background-color: #66b7e0; color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; text-decoration: none;">Edit profile</a>
                <a href="/settings/password" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Password</a>
                <a href="/settings/terms" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Syarat dan ketentuan</a>
                <a href="/settings/privacy" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Kebijakan privasi</a>
                <a href="/settings/customer-service" class="text-decoration-none px-4 py-3 rounded-3 link-settings text-white">Customer service</a>
            </div>
        </div>
        <div class="col-9 p-0">
            <div class="p-4 mt-4">
                <h3>Edit Profile</h3>
                <p class="fw-semibold mt-4">Gambar Profile Anda</p>
                <div class="d-flex align-items-center gap-4 mt-4">
                    <img src="<?= $user['profile_picture'] ?? 'https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b' ?>" alt="" srcset="" class="profile-lg"
                     style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                    <button class="btn bg-first text-white">Ubah foto profile</button>
                </div>
                <p class="m-0 ms-4 mt-2 fw-bold"><?= $user['name'] ?? 'User' ?></p>
                <div class="pt-5">
                    <form action="/settings/update" method="post">
                        <ul class="list-group mt-5 shadow">
                            <li class="list-group-item">
                                <div class="container-fluid p-0 m-0 d-flex justify-content-between position-relative">
                                    <p class="m-0">Nama</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <input type="text" name="name" class="form-control border-0 text-end" value="<?= $user['name'] ?? '' ?>">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="container-fluid p-0 m-0 d-flex justify-content-between position-relative">
                                    <p class="m-0">Nomor Telepon</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <input type="text" name="phone" class="form-control border-0 text-end" value="<?= $user['phone'] ?? '' ?>">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="container-fluid p-0 m-0 d-flex justify-content-between position-relative">
                                    <p class="m-0">Email</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <p class="m-0 text-fourth"><?= $user['email'] ?? '' ?></p>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="container-fluid p-0 m-0 d-flex justify-content-between position-relative">
                                    <p class="m-0">Alamat</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <input type="text" name="address" class="form-control border-0 text-end" value="<?= $user['address'] ?? '' ?>">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="container-fluid p-0 m-0 d-flex justify-content-between position-relative">
                                    <p class="m-0">Status</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <p class="m-0 text-fourth"><?= $user['status'] ?? 'User' ?></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-3 text-end">
                            <button type="submit" class="btn bg-first text-white">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>